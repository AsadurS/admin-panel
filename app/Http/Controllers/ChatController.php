<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Events\Illuminate\Auth\Events\ChatEvent;
class ChatController extends Controller
{
  public function __construct(){
    return $this->middleware('auth');
  }
    public function chat(){
      return view('chat');
    }
    public function send(){
      $user=User::find(Auth::user()->id);
      $message='hello asad';
      event(new ChatEvent($message,$user));
    }
}
