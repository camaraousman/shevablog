<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('authentication.login');
    }

    public function loginPost(LoginRequest $request){
        dd($request->all());
    }

    public function register(){
        return view('authentication.register');
    }
    public function registerPost(RegisterRequest $request){
        dd($request->all());
    }
}
