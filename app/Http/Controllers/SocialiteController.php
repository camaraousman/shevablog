<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
//use Str;
//use Hash;
//use Auth;

class SocialiteController extends Controller
{

    //----------------------------- Socialite -----------------------------------------------

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        try{
            $getInfo = Socialite::driver($provider)->stateless()->user();
            $user = $this->createUser($getInfo,$provider);
            auth()->login($user);
        }
        catch(\Exception $e){
            return redirect()->to('/');
        }


        if(Auth::User()->isAdmin()){
            return redirect()->to('/admin');
        }
        else{
            return redirect()->to('/blogger');
        }

    }
    function createUser($getInfo,$provider){


        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }



}
