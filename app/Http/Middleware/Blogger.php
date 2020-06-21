<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Blogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(!Auth::User()->isAdmin()){
                return $next($request);
            }
            else{
                abort(403, 'unauthorized action');
            }


        }
        return redirect('/login');
    }
}
