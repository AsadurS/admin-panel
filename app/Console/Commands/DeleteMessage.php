<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Subcriber;
use App\User;
use Notification;
use App\Notifications\NotifyUser;
class DeleteMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:subcriber';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email send Subcriber';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    { $limit=Carbon::now()->subHour(23);
      $message=User::whereNotNull('email_verified_at')->where('last_sign_in_at','<',$limit)->get();
      // $this->info(print_r($message));
      foreach ($message as $key => $user) {
    //  Notification::send($user, new NotifyUser());
       $user->notify(new NotifyUser());
        $this->info($user->email);

      }
    }
}
