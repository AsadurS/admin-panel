<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcriber;
use Session;
use App\User;
use App\Notifications\sendmail;
use Notification;
use App\Mail\VerifyMail;
use Mail;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
class SubctriberController extends Controller
{

  public function index(){
    $sub=Subcriber::all();
    return view('subcriber.index',compact('sub'));
  }
  public function create(Request $request){
    $asad=Subcriber::where('email',$request->email)->where('status',0)->first();
    if($asad){
      $thisUser=Subcriber::findOrFail($asad->id);
    $this->sendEmail($thisUser);

    //  Toastr::info('message', 'u are alrady adfdk ye send a mail to your email to active yor email');
     Session::flash('success','u are alrady adfdk ye send a mail to your email to active yor email');
        return redirect()->back();}
        else{
        $this->validate($request,[
      'email'=>'required|unique:subcribers,email',
    ]);
    $sub= new Subcriber;
    $sub->email=$request->email;
    $sub->verifytoken=Str::random(40);
    $sub->save();


    $users=User::whereNotNull('email_verified_at')->get();
  $data=  new Subcriber;
    $data->email=$request->email;
    $data->id;
    Notification::send($users, new sendmail($data));
    $thisUser=Subcriber::findOrFail($sub->id);
  $this->sendEmail($thisUser);

  Session::flash('success','Please Verify your email To get Update from this system');
      return redirect()->back();}


  }

  public function delete($dd){
  Subcriber::where('id',$dd)->delete();
  Session::flash('success','subcriber delete succesfully');
  return redirect()->back();
  }
  public function verify(){
    return view('verify.email');
  }
  public function sendEmail($thisUser){
    Mail::to($thisUser['email'])->send(new VerifyMail($thisUser));
  }
  public function subverify($email,$token){
  $subc=Subcriber::where('email',$email)->where('verifytoken',$token)->first();
  if($subc){
    Subcriber::where('email',$email)->where('verifytoken',$token)
    ->update(['status'=>1,
              'verifytoken'=>Str::random(40)
  ]);
    Session::flash('success','you are suceessfuly added to our subcriber');
    return redirect('/');

  }
  elseif(Subcriber::where('email',$email)->where('verifytoken','!=',$token)->where('status',1)){
    Session::flash('success','you are aready verify your email');
    return redirect('/');
  }
else{

}


  }
}
