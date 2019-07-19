<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Auth;
use Hash;
use Session;
use Illuminate\Support\facades\Input as input;
class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){

  }

  public function view($id){
	 $view=User::where('id',$id)->first();
	 return view('profile.view',compact('view'));
	}

	public function update($id){
	 $update=User::where('id',$id)->first();
	 return view('profile.update',compact('update'));
	}


		public function change($id){
		$change=User::where('id',$id)->first();
		return view('profile.change-pass',compact('change'));
    }

  public function updated(Request $request){
      $id=$_POST['id'];
          $this->validate($request,[
            'name'=>"required|unique:users,name,$id|max:15|min:3",
            'phone'=>"required|unique:users,phone,$id|max:15|min:7",
            //'email'=>"required|unique:users,email,$id"
          ]);
         $updated=User::where('id',$id)->update([
                 'name'=>$_POST['name'],
                'phone' => $_POST['phone'],
                'updated_at' => Carbon::now('Asia/Dhaka')->toDateTimeString()
        ]);
        if($updated){
          Session::flash('success','Succesfully update ');
        return redirect('/view/'.$id);
        }
        else{
        return redirect()->back();
        }
    }


    public function passChange( Request $request){
         $user=User::find(Auth::user()->id);
          $a=Hash::check(Input::get('oldpassword'),$user['password']);
          if(!$a){
            Session::flash('er','value');
              return redirect('/change/pass');
          }
          $this->validate($request,[
            'oldpassword'=> 'required',
            'password'=>'required|string|min:6|confirmed',
          ]);

          if( $a && Input::get('password')==Input::get('password_confirmation')){
            $user->password=bcrypt(Input::get('password'));
            $user->save();

              Session::flash('success','value');
                return redirect('/view/'.Auth::user()->id);
            }
            else{
              Session::flash('error','value');
                return redirect('/change/pass');
            }
       }
}
