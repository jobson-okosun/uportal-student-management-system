@extends('layouts.app')

@section('content')

 @include ('header')

<div class="container mt-4">
    <div class="row flex justify-content-center">
        <div class="col-md-8 flex justify-content-center">
            <img class="mx-auto d-block rounded-circle"width="120px" height="120px" src="{{asset('images/avater.png')}}">    

            <h3 class="text-center font-weight-bold mt-2">
                {{ __(' Student Login') }} 
            </h3>      
                     
        </div>
    </div>

    <div class="row justify-content-center">  
        <div class="col-md-8">

            <div class="card">
                <div class="card-body justify-content-center">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input id="matno" type="text" class="form-control @error('matno') is-invalid @enderror" name="matno" placeholder="{{'Matriculation No'}}" required autofocus>
                                @error('matno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">                         
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder ="{{'Password'}}" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
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
