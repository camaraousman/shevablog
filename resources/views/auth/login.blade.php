@include('layouts.login_head')
@extends('layouts.app')


@section('content')

    <div class="container">
        @include('authentication.includes.errors')

        {!! Form::open(['action'=>'Auth\LoginController@login', 'me thod'=>'POST', 'class'=>'user']); !!}


        <div class="form-group">
            {!! Form::email('email',null,['placeholder'=>'Enter Email-Address ', 'class'=>'form-control form-control-user']); !!}
        </div>

        <div class="form-group">
            {!! Form::password('password', ['placeholder'=>'Enter Password', 'class'=>'form-control form-control-user']); !!}
        </div>

        {!! Form::submit('Login', ['class'=>'btn btn-primary btn-user btn-block']); !!}

        <hr>
        <a href="{{url('login/google')}}" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Login with Google
        </a>
        <a href="{{url('login/facebook')}}" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
        </a>
        <a href="{{url('login/github')}}" class="btn btn-github btn-user btn-block">
            <i class="fab fa-github fa-fw"></i> Login with Github
        </a>
        {!! Form::close() !!}



        <hr>
        <div class="text-center">
            <a class="small" href="{{route('register')}}">Create an Account!</a>
        </div>

        <div class="text-center">
            <a class="small" href="{{route('forgotPassword')}}">Forgot Password?</a>
        </div>
    </div>

@endsection

























{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
