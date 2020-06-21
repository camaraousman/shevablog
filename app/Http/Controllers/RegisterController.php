<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('authentication.register');
    }

    public function register(RegisterRequest $request){
        $input = $request->all();

        $input['password'] = bcrypt($request->input('password'));
        User::create($input);

        return redirect()->to('admin');
    }
}
