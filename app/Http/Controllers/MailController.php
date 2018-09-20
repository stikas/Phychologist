<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests; 
use App\Http\Requests\ContactForm;
use Redirect;
use Validator;

class MailController extends Controller
{
    public function send(ContactForm $request)
    {
    	try {
			\Mail::send('emailTemplate.index',
			        array(
			            'name' => $request->get('name'),
			            'email' => $request->get('email'),
			            'user_message' => $request->get('message')
			        ), function($message) use ($request)
				    {
				        $message->to('kkamarin87@hotmail.com', 'Client')->subject('Client message');
				    });

				return Redirect::to('/')
			    		    ->with('message', 'Το email στάλθηκε επιτυχώς.');
    	}
    	catch(\Exception $e)
        {
            return Redirect::to('/')
			    		    ->with('error_message', 'Υπήρξε πρόβλημα. Δοκιμάστε ξανα.');
        }
    }
}
