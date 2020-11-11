<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ResetPassword extends \Illuminate\Auth\Notifications\ResetPassword
{
    use Queueable;
 
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {

        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        return (new MailMessage)

            ->subject(__('myhouse/auth/reset.aa'))
            ->line(__('myhouse/auth/reset.ab'))
            ->action(__('myhouse/auth/reset.ac'), url(config('app.url').route('password.reset', ['token' => $this->token], false)))
            ->line(__('myhouse/auth/reset.ad') , ['count' => config('auth.passwords.users.expire')])
            ->line(__('myhouse/auth/reset.ae'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
