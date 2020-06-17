@extends('layouts.auth')


@section('content')
    <div class="container">
        @include('authentication.includes.errors')

        {!! Form::open(['action'=>'LoginController@loginPost', 'method'=>'POST', 'class'=>'user']); !!}


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

