<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        $details = [
            'name'=>$request->name, 
            'email'=>$request->email, 
            'msg'=>$request->msg
        ];
            Mail::to("ernur.k088@gmail.com")->send(new TestMail($details));
            return "Email sent";
       }
}
