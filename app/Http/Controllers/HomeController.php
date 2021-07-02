<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('create');
    }

    public function check(Request $request){

        
        $request->validate([
            'mstring'   =>  'required',
            'string1'   =>  'required',   
            'string2'   =>  'required',
            'string3'   =>  'required',
            'string4'   =>  'required',
        ]);
        
        $mstring = $request->mstring;

        $orgMstring = str_split($mstring);

        $arrMstring = str_split($mstring);
        $arrMstring2 = str_split($mstring);
        
        //dd($request->all());

        $arrString1 = str_split($request->string1);

        //$fields = array_flip($arrString1);
        //dd($arrString1,$fields);


        $result[$request->string1] = 'Yes';

        foreach ($arrString1 as $key => $value) {
            
            if( in_array( $value ,$arrMstring ) ){

                foreach ($arrMstring as $key2 => $value2) {

                    if($value2 == $value){

                        unset($arrMstring[$key2]);
                        break;
                    }
                }
            }
            else{

                $arrMstring = $arrMstring2;
                $result[$request->string1] = 'No';
                break;
            }
        }

        $result[$request->string2] = 'Yes';
        $arrMstring2 = $arrMstring;

        $arrString2 = str_split($request->string2);
        foreach ($arrString2 as $key => $value) {
            
            if( in_array( $value ,$arrMstring ) ){

                foreach ($arrMstring as $key2 => $value2) {

                    if($value2 == $value){

                        unset($arrMstring[$key2]);
                        break;
                    }
                }
            }
            else{

                $arrMstring = $arrMstring2;
                $result[$request->string2] = 'No';
                break;
            }
        }

        $result[$request->string3] = 'Yes';
        $arrMstring2 = $arrMstring;

        $arrString3 = str_split($request->string3);
        foreach ($arrString3 as $key => $value) {
            
            if( in_array( $value ,$arrMstring ) ){

                foreach ($arrMstring as $key2 => $value2) {

                    if($value2 == $value){

                        unset($arrMstring[$key2]);
                        break;
                    }
                }
            }
            else{

                $arrMstring = $arrMstring2;
                $result[$request->string3] = 'No';
                break;
            }
        }

        $result[$request->string4] = 'Yes';
        $arrMstring2 = $arrMstring;

        $arrString4 = str_split($request->string4);
        foreach ($arrString4 as $key => $value) {
            
            if( in_array( $value ,$arrMstring ) ){

                foreach ($arrMstring as $key2 => $value2) {

                    if($value2 == $value){

                        unset($arrMstring[$key2]);
                        break;
                    }
                }
            }
            else{

                $arrMstring = $arrMstring2;
                $result[$request->string4] = 'No';
                break;
            }
        }

        //dd( $result ,$orgMstring,  $arrMstring);

        //dd($request->all(),$arrMstring,$arrString1);

        return redirect()->back()->with(['result'=>$result]);
    }
    
}
