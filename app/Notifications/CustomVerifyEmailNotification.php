<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as DefaultVerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class CustomVerifyEmailNotification extends DefaultVerifyEmail
{
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('GrammarLeap Email Verification')
            ->greeting('Hello ' . $notifiable->fname . '!')
            ->line('Thank you for registering with us. To complete your registration, please verify your email address by clicking the button below:')
            ->action('Verify Email Address', $this->verificationUrl($notifiable))
            ->line('If you did not create an account with us, please ignore this email. No further action is required.')
            ->line('Best regards,')
            ->line('GrammarLeap Team');
    }
}

