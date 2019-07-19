<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Role;
use App\Demo;
use Carbon\Carbon;
use Image;
class uploadController extends Controller
{
  public function index(){
  $role=Role::all();
    return view('upload.upload',compact('role'));
  }
  public function store(Request $request){

    $image=$request->file('image');
    if(isset($image)){
      //make unique
      $currentDate= Carbon::now()->toDateString();
      $imageName='image'.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
      if(!Storage::disk('public')->exists('image')){
        Storage::disk('public')->makeDirectory('image');
      }
      //rsize and upload
      $categoryImage=Image::make($image)->resize(1600,479)->stream();
      storage::disk('public')->put('image/'.$imageName,$categoryImage);
    }
      else{
        $imageName='default.png';
      }
      if($request->hasFile('file')){
  $fileName=$request->file->getClientOriginalName();
  $ss=$fileName;
  $request->file->storeAs('public/file',$ss);
     }
  $pp=$_POST['subject'];
  $b=implode(',',$pp);
  $ins=new Demo();
  $ins->role_id=$request->category;
  $ins->subject=$b;
  $ins->gender=$request->gender;
  $ins->phone=$request->phone;
  $ins->file=$request=$ss;
  $ins->image=$request=$imageName;
  $ins->save();
  }
  public function view(){
    $al=Demo::all();
    return view('upload.all',compact('al'));
  }
  public function fileView($id){
  $find=Demo::findOrFail($id);
  return view('upload.fileview',compact('find'));
  }


}
