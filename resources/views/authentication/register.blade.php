@extends('layouts.auth')

@section('title')
    ShevaBlog - Register
@stop


@section('content')

    <!-- Page Header -->
{{--    <header class="masthead" style="background-image: url('{{asset('img/silver-imac-display.jpg')}}')">--}}
{{--        <div class="overlay"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 col-md-10 mx-auto">--}}
{{--                    <div class="site-heading">--}}
{{--                        <h1>ShevaBlog</h1>--}}
{{--                        <span class="subheading">powered by ShevaTech</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}




<div class="container">

    <form class="user">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
            </div>
        </div>
        <a href="login.html" class="btn btn-primary btn-user btn-block">
            Register Account
        </a>
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

    </form>

    <hr>
    <div class="text-center">
        <a class="small" href="{{route('login')}}">Already have an account? Login</a>
    </div>
    <div class="text-center">
        <a class="small" href="{{route('forgotPassword')}}">Forgot Password?</a>
    </div>

</div>

@endsection

