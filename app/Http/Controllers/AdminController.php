<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use App\Role;
use Session;
use Auth;
use Carbon\Carbon;
use Cache;
use App\DateTime;
use App\ActiveUser;
use DB;
use PDF;
use App;
use Brian2694\Toastr\Facades\Toastr;
class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }
  public function index()
    {
               //$request->session()->forget('key');
            //$request->session()->flush();
              //session(['key' => 'value']);
       if(request()->has('role_id')){
        $a= User::join('date_times', 'users.id', '=', 'date_times.user_id')
            ->select('users.*', 'date_times.last_activity')
              ->where('users.role_id', request('role_id'))

            ->paginate(2);
      //   $a=User::where('role_id', request('role_id'))->paginate(2);
       }
       else {
        $a= User::join('date_times', 'users.id', '=', 'date_times.user_id')
            ->select('users.*', 'date_times.last_activity')
             ->orderBy('role_id','ASC')
            ->paginate(10);

      //   $a=User::orderBy('role_id','ASC')->paginate(3);

           //$a=User::whepaginate(3);

       }


      return view('user.index',compact('a','chart'));
    }
    public function pdf(Request $request)
     {
       $pdf = PDF::loadHTML($this->convert_customer_data_to_html());
return $pdf->download('invoice.pdf');
     // $pdf = \App::make('dompdf.wrapper');
     // $pdf->loadHTML($this->convert_customer_data_to_html());
     // return $pdf->stream();
    }

    public function convert_customer_data_to_html()
    {

        $a= User::all();

     $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Email</th>
    <th style="border: 1px solid; padding:12px;" width="15%">phone</th>
    <th style="border: 1px solid; padding:12px;" width="15%">role_id</th>


   </tr>
     ';
    foreach ($a as $key => $all) {


      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$all->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$all->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$all->phone.'</td>
       <td style="border: 1px solid; padding:12px;">'.$all->role->name.'</td>
      </tr>

      ';

     }

     $output .= '</table>';
     return $output;
    }
    public function create()
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
    echo $ip;
   //   $ipAddress = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
   // dd($ipAddress);

        }





    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {     $update=User::findOrFail($id);
          return view('user.edit',compact('update'));
    }


    public function update(Request $request, $id)
    {
      if(Auth::user()->role_id>1){
      return redirect('/user');
      }
      else{
      $user=User::find($id);
      $user->role_id=$request->role;
      $user->save();
      return redirect('/user');
    }
  }

    public function destroy($id)
    {
        //
    }
    public function active($id){
      User::where('id',$id)->update([
        'status'=> 1
      ]);
      return redirect('/user');

    }

    public function inactive($id){
      User::where('id',$id)->update([
        'status'=> 0
      ]);
      return redirect('/user');
    }

    public function delete($id){
          if(Auth::user()->role_id>1){
          //  Session::flash('error','you are not Allow this page');
          Toastr::warning('message', 'you are not Allow this page');
          return redirect()->back();
          }
        else{    // $dd=User::where('role_id',1)->get();
          //         foreach (  $dd as $key => $value) {
          //           $asad=$value->id==Auth::user()->id;  }
                  if($id==Auth::user()->id){
                    Session::flash('error','You cannot delete Yoursalfe');
                    Toastr::warning('message', 'You cannot delete Yoursalfe');
                   return redirect('user');

                     }


                 else {
                   User::where('id',$id)->delete();
                   Session::flash('success','Delete Successfully');
                  Toastr::info('message', 'Delete Successfully');

                  return redirect('user');

                 }

                }
    }
    public function asad(){
      $all=Activeuser::where('user_id', Auth::user()->id)->first();
       Activeuser::where('user_id', Auth::user()->id)->delete();
       return redirect('/');
    }
    public function logout(){
        // Session::put('admin_name',null);
        //Session::put('admin_id',null);
  $all=Activeuser::where('user_id', Auth::user()->id)->delete();
  if ($all) {
    Auth::logout();
       return redirect('/');
  }
  else {
    echo "string";
  }

    }
}
