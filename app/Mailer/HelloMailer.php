<?php

namespace App\Mailer;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\serializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HelloMailer extends Mailable
{
	use Queueable, serializesModels;

	/**
	* Create a new message instance.
	*
	*@return void
	*/
	public function __construct()
	{
		//
	}

	/**
	* Build the message.
	*
	*@return $this
	*/
	public function build()
	{
		#this code will use template in resource/views/mailer/hello_mailer.blade.php
		#this code will send email with subject 'Hello Mailer'
		return $this->view('mailer/hello_mailer')->subject('Hello Mailer');
	}
}