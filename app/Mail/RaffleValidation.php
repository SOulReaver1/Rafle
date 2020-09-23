<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RaffleValidation extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname, $lastname, $email)
    {
        //

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('raffle.email.index', ['firstname' => $this->firstname, 'lastname' => $this->lastname, 'email' => $this->email]);
    }
}
