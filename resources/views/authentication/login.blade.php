@extends('layouts.auth')


@section('content')
    <div class="container">
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                    <hr>
                                    <a href="{{url('login/google')}}" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="{{url('login/github')}}" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>

                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{route('register')}}">Create an Account!</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="{{route('forgotPassword')}}">Forgot Password?</a>
                                </div>
    </div>
@endsection

