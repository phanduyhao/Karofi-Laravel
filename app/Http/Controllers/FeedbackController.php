<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbacks;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Create and save the feedback
        $feedback = new Feedbacks;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->address = $request->address;
        $feedback->contents = $request->contents;
        $feedback->seen = $request->seen ? 1 : 0;
        $feedback->save();
        // Send email to admin
        $senderName = $request->name;
        $sendEmail = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $contents = $request->contents;
       $subject = "Xin chào, tôi là " . $senderName;
        Mail::send('mail', ['subject'=>$subject, 'name' => $senderName, 'contents'=>$contents], function ($message) use($subject) {
            $message->to('haomrvuii@gmail.com')
            ->subject($subject);
        });
    }
}

