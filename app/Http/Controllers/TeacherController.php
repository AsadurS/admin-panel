<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ActiveGuest;
use App\ActiveUser;
use Session;
use DB;
use App\User;
use Charts;
use PDF;
use Auth;

class TeacherController extends Controller
  {
      public function __construct(){
        $this->middleware('auth');
      }

      public function index(Request $request)
      {

          // $updated=User::where(Auth::user()->id)->update([
          //           'status'=> 1]);


        $activeGuest=ActiveGuest::all();
        // $activeUser=DB::table('active_users')
        //       ->join('users', 'active_users.user_id', '=', 'users.id')
        //       ->select('active_users.*', 'users.name')
        //       ->get();

        $activeUser=ActiveUser::all();
        $s=ActiveGuest::count();
        $actr=ActiveGuest::all();
        $d=ActiveUser::count();
        $g=Session::get('ip');
        $chart = Charts::multi('bar','material')
           ->title('amr chart')
         ->dimensions(0,400)
          ->template('material')
          ->colors(['red','green','blue'])
         ->dataset('SuperAdmin',[5,0,0])
         ->dataset('admin',[0,5,0])
         ->dataset('user',[0,0,4])

         ->labels(['Super Admin', 'Admin', 'User']);

        return view('dashbord.dashbord',compact('activeGuest','chart','activeUser','s','d','g','actr'));
      }
       public function pdf(){
        $pdf = PDF::loadView('dashbord.dashbord');
  return $pdf->download('dashbord.pdf');
      }


      public function create()
      {

      }

      public function store(Request $request)
      {

      }

      public function show($id)
      {

      }

      public function edit($id)
      {

      }

      public function update(Request $request, $id)
      {

      }

      public function destroy($id)
      {

      }
  }
