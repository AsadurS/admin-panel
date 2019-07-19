<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Mail\NewMail;
use App\User;
use Session;
use Image;

use App\Mailfile;
use Attach;
class MailController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function send(Request $request){
      $user=User::whereNotNull('email_verified_at')->get();
      foreach ($user as $key => $value) {
      $data=array(
        'email'=>$value->email,
        'msg'=>$request->msg,
        'file'=>$request->file,
        'sub'=>$request->sub,
      );

      Mail::send('mail',$data,function($message)use ($data)
      {
        $message->to($data['email']);
        $message->subject($data['sub']);
        $message->from('asadursf1994@gmail.com');
      });
      Session::flash('success','Mail successfully send');
      return redirect('/user');
}
    }
    public function sendto($id){
      $all=User::findOrFail($id);
      return view('emaill',compact('all'));
    }
    public function sendtoto(){
      return view('emailto');
    }
    public function sendmail(Request $request){

          $id=$_POST['id'];
          $user=User::findOrFail($id);
          $data=array(
            'email'=>$user->email,
            'msg'=>$request->msg,
            'file'=>$request->file,
            'sub'=>$request->sub,
          );
          Mail::send('mail',$data,function($message)use ($data)
          {
            $message->to($data['email']);
            $message->subject($data['sub']);
            $message->from('asadursf1994@gmail.com');
          });


        Session::flash('success','Mail successfully send');
        return redirect('/user');
    }
}
