<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('index');
    }

    public function shevablog(){
        return view('welcome');
    }

    public function login(){
        return view('authentication.login');
    }
    public function register(){
        return view('authentication.register');
    }
    public function forgotPassword(){
        return view('authentication.forgotPassword');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }





    public function test(){
        return view('layouts.authentication');
    }
}
