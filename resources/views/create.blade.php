@extends('layouts.app')

@section('content')

@php


@endphp
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> -->

        <div class="col-md-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-middle">
                  <h5>Check</h5>
                </div>

                <div class="card-body">
                    <form action="{{route('check')}}" method="post">
                      @csrf
                      <div class="row">

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="mstring">Master String</label>
                            <input type="text" class="form-control @error('mstring') is-invalid @enderror" id="mstring" placeholder="Enter Master String" name="mstring" value="{{old('mstring')}}">
                            @error('mstring')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="string1">String1</label>
                            <input type="text" class="form-control @error('string1') is-invalid @enderror" id="string1" placeholder="Enter String 1" name="string1" value="{{old('string1')}}">
                            @error('string1')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="string2">String2</label>
                            <input type="text" class="form-control @error('string2') is-invalid @enderror" id="string2" placeholder="Enter String2" name="string2" value="{{old('string2')}}">
                            @error('string2')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="string3">String3</label>
                            <input type="text" class="form-control @error('string3') is-invalid @enderror" id="string3" placeholder="Enter String3" name="string3" value="{{old('string3')}}">
                            @error('string3')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="string4">String4</label>
                            <input type="text" class="form-control @error('string4') is-invalid @enderror" id="string4" placeholder="Enter String4" name="string4" value="{{old('string4')}}">
                            @error('string4')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        

                        <div class="col-md-12 text-right mt-2">

                          <button class="btn btn-primary" type="submit">Check</button>

                        </div>

                        <div class="col-md-12">
                       
                            @if(session()->has('result'))

                              @foreach(session('result') as $key => $value)
                                <li>
                                  {{$key}} - {{$value}}
                                </li>
                              @endforeach

                            @endif
                        </div>
                        
                      </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
