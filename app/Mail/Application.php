<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Application extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name = null;
	public $phone = null;
    public $messange = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->name = $params['name'] ?: '';
        $this->phone = $params['phone'] ?: '';
        $this->messange = $params['messange'] ?: '';
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('mail')
        			->subject("Новая запись");
    }
}
