<?php

namespace App\Http\Controllers;
use App\Mail\Mailru;

use Illuminate\Http\Request;

class Email extends Controller
{
    public function sendmail(Request $request)
    {
		$name=$this->name;
		$email=$this->email;
		$text=$this->text;
		
		Mail::to('jabzzz1377@gmail.com')->send(new Mail($name,$email,$text));
	}
}
