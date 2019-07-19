<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Auth;
class CheckStatus
{
    public function handle($request, Closure $next)
    {  $response = $next($request);
        //If the status is not approved redirect to login
        if(Auth::check() && Auth::user()->status != 1){
            Auth::logout();
        Session::flash('err','Record does not match');
            return redirect('/login');
        }
        return $response;
    }
}
