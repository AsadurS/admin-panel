<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActiveGuet;
use App\ActiveGuest;
use App\ActiveUser;
use Illuminate\Support\Facades\Auth;
use Session;
session_start() ;
class Hom2Controller extends Controller
{
  public function index(Request $request)
  {
      if(!empty($_SERVER["HTTP_CLIENT_IP"])){
      $ip=$_SERVER["HTTP_CLIENT_IP"];
      }
      elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
      $ip=$_SERVER["HTTP_X_FORWARDED_FOR"];
      }
      else{
      $ip=$_SERVER["REMOTE_ADDR"];
    }
    $session=session_id();
    Session::put('session',$session);
    Session::put('ip',$ip);
      if(Auth::check()){
        $all=Activeuser::where('user_id', Auth::user()->id)->first();
        if($all){

        }
        else{
        $ss=new ActiveUser();
        $ss->user_id=Auth::user()->id;
        $ss->save();
        }
      }
      else{
        $all=ActiveGuest::where('session_id',$session)->first();
        if($all){

        }
          else{
            $ss=new ActiveGuest();
            $ss->ip=$ip;
            $ss->session_id=$session;
            $ss->save();
          }
        }
        return view('welcome');
       }

}
