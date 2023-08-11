<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbacks;
class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Create and save the feedback
        $feedback = new feedbacks;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->address = $request->address;
        $feedback->contents = $request->contents;
        $feedback->seen = $request->seen ? 1 : 0;
        $feedback->save();
        return redirect()->back()->with('success', 'Phản hồi của bạn đã được gửi thành công!');
    }
}
