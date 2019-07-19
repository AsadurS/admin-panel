<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Cache;
use Carbon\Carbon;
class OnlineCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { if(Auth::check()){
      $expiresAt = now()->addMinutes(1);
      Cache::put('asad'. Auth::user()->id, true, $expiresAt);
    }

        return $next($request);
    }
}
