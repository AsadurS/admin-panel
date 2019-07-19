<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\User;
use Attach;
class NewMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build( Request $request)
    {

      $id=$_POST['id'];
      $user=User::findOrFail($id);

         return $this->markdown('email',['dmsg'=>$request->msg,'sub'=>$request->sub,
         attach($request['file']->getRealPath(),array(

             'as'=>'file.'.$request['file']->getClientOrginalExtension(),
              'mine'=>$request['file']->getRealPath(),
      ))])->to($user->email);




    }
}
