<?php

namespace App\Http\Middleware;

use Closure;
use App\DateTime;
use DB;
use Auth;
use Carbon\Carbon;
use App\User;
class LastActivity
{
    public function handle($request, Closure $next)
    { if(Auth::check()){
      $empty=Datetime::where('user_id',Auth::user()->id)->first();
      if(!$empty){
        $ins=new DateTime();
        $ins->user_id=Auth::user()->id;
        $ins->last_activity=Carbon::now();
        $ins->save();
      }
      else {
        DB::table('date_times')
              ->where('user_id',Auth::user()->id)
              ->update(['last_activity' =>carbon::now()->addMinutes(1)]);
      }
    }
        return $next($request);
    }
}
