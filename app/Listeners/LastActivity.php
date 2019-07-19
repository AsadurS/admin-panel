<?php

namespace App\Listeners;

use App\Events\LastActivity;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LastActivity
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LastActivity  $event
     * @return void
     */
    public function handle(LastActivity $event)
    {
    
      $event->user->last_activities=Carbon::now('Asia/Dhaka');
      $event->user->save();
    }
}
