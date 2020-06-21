<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function index(){
        return view('authentication.login');
    }

    public function login(LoginRequest $request){

//        $credentials = $request->only('email','password');
//
//        if (Auth::attemp($credentials)){
//            return redirect()->intended('admin');
//        }
//        if (User::where('email', '=', $request->input('email') AND 'password', '=', $request->input('password'))->exists()) {
//            return "user exists";
//        }

         

    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }



}
