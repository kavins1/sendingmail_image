<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TesMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name    = $this->data['name'];

        return $this->subject('Subject email')
                   ->view('email_template',compact('name'))
                   ->attach($this->data['image']->getRealpath(), [
                    'as'=> $this->data['image']->getClientOriginalName()
                    ]);
    }
}
