<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedBack extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $message)
    {
        $this->email = $email;
        $this->message = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.feedback', [
            'emailaddress' => $this->email,
            'newmessage' => $this->message
        ])->attach(public_path('uploads/') . '3.jpg', [
            'as' => 'test.jpg',
            'mime' => 'image/jpeg',
        ]);
    }
}
