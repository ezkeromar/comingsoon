<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Mail;

class ContactController extends Controller
{
    public function contact (Request $request) {
        $data = [
            'name' => 'the Creatiiives',
            'email' => $request->email
        ];
        Mail::send(['html'=>'mail'], $data, function($message) {
            $message->to('contact@thecreatiiives.com', 'Tutorials Point')->subject
               ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        return 'OK';
    }
}
