<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'Illuminate\Auth\Events\Login' => [
       'App\Listeners\UpdateLastSignInAt',
   ],
   'Illuminate\Auth\Events\Logout' => [
        'App\Listeners\UpdateLastSignOutAt',
    ],
  'App\Events\ChatEvent' => [
        'App\Listeners\Chatlistener',
    ],
  'App\Events\LastActivity' => [
        'App\Listeners\LastActivity',
    ],
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
