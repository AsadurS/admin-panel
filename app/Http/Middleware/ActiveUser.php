<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Carbon\Carbon;
use Session;
use Cache;
class ActiveUser
{

    public function handle($request, Closure $next)
    {if(Auth::check()){
      $expiresAt = now()->addMinutes(1);
      Cache::put('asad'. Auth::user()->id, true, $expiresAt);
    }
else{
$expiresAt = now()->addMinutes(1);
Cache::put('asad2',true,$expiresAt);
}
        return $next($request);
    }
  }
