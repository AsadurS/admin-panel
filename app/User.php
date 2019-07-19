<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\ActiveUser;
use Carbon\Carbon;
use Cache;
use Auth;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $fillable = [
        'name', 'phone','email', 'password','role_id','username','last_activities',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates =[
    'last_sign_out_at','last_activity'
   ];
    public function role(){
      return $this->belongsTo('App\Role');
    }
    public function isOnline()
     {
        return Cache::get('asad'. $this->id);
     }
     
}
