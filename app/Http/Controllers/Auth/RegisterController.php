<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{


    use RegistersUsers;

    protected $redirectTo = '/teacher';


    public function __construct()
    {

    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
          //  'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
          //  'password' => 'required|string|min:6|confirmed',
          //  'phone' => 'required|min:6|unique:users,phone',
            //'username'=> 'regex:/^[A-Z][a-z][0-9]+$/|required|min:6|unique:users,username'],
            'username' => [
              'unique:users,username',
      'required',
      'regex:/^[a-zA-Z0-9]*([a-zA-Z][0-9]|[0-9][a-zA-Z])[a-zA-Z0-9]*$/'
  ],
            'password' => [
      'required',
      'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',
      'confirmed'
  ]],

            [  'username.regex'=>'your Username must be mixed with latter and number',
             'password.regex'=>'password combination must be upercase,lowecase,latter&number',
          //    'phone.required'=>'you must fillup this field',
          //    'phone.unique'=>'The phon no you enter is alreay taken',

        ]);

    }

  
    protected function create(array $data)
    {
        return User::create([
          //  'name' => $data['name'],
          //  'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
          //  'role_id' => $data['role'],
            'username'=>$data['username']
        ]);
    }

}
