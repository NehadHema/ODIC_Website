<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Message;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'message'=> 'required|string',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);
  
        $data=[
         'message'=>$request->message,
         'name'=>$request->name,
         'email'=>$request->email,
         'subject'=>$request->subject
        ];
        // var_dump($data);
        
        Mail::to('original.gaol@gmail.com')->send(new WelcomeMail($data));
        try {
            return redirect()->back()->with(['message_sent' => 'Your message has been sent successfully!']);  
        } catch (Exception $th) {
            return redirect()->back()->with(['message_sent' => 'Sorry something occures!']);  
        }
    }
}
