<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('authentication.login');
    }

    public function loginPost(LoginRequest $request){

//        $credentials = $request->only('email','password');
//
//        if (Auth::attemp($credentials)){
//            return redirect()->intended('admin');
//        }

        dd($request->all());
    }

    public function register(){
        return view('authentication.register');
    }
    public function registerPost(RegisterRequest $request){
        $input = $request->all();

        $input['password'] = bcrypt($request->input('password'));
        User::create($input);

        return redirect()->to('admin');
    }
}
