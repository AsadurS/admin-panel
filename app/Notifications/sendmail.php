<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class sendmail extends Notification
{
    use Queueable;
    public $post;


    public function __construct($post)

    {
      $this->post=$post;

    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                     ->greeting('Hello!')
                    ->subject('New Subcriber added')
                    ->line('details.'.$this->post)
                    ->action('View subcriber', url('/subcriber/view'))
                    ->line('Thank you for using our application!');
    }


    public function toArray($notifiable)
    {
        return [

        ];
    }
}
