<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // user tidak ada
        if(!Auth::user()){
            return redirect('/login');
        }
        else if((Auth::user()->role != 'admin') || (Auth::user()->role != 'admin')){
            return redirect('/');
        }


        return $next($request);
    }
}
