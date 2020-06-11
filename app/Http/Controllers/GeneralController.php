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

    public function test(){
        return view('layouts.admin');
    }
}
