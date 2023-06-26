<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        
        $name = "Funny Coder";
        $subject="New Subject of This Mail";
        $content="This is full paragraph of content for template";
    
        Mail::to('jeetchaani@gmail.com')->send(new SendEmail($name,$subject,$content));
    
        return "Email sent successfully.";
    }
}
