<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ActiveGuest
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
