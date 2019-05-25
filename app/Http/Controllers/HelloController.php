<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HelloController extends Controller
{	
	/*
    public function sendWelcomeEmail(Request $request)
    {
    	// Validate email address
    	$this->validate($request, ['email' => 'required']);

    	//This code will trigger HelloMailer class to send email
    	Mail::to($request->input('email'))->send(new HelloMailer());

    	// Redirect and send message about status sending email request
    	return redirect()->back()->width('success', 'Email has been sent successfully. Please  check your email.');
    }
    */

    public function send()
    {
    	Mail::send(['text'=>'mail'], ['name', 'Meilani'], function($message){
    		$message->to('meilanianggraeni888@gmail.com', 'To Meilani')->subject('Test Email');
    		$message->from('meilanianggraeni888@gmail.com', 'Meilani');
    	});
    }
}
