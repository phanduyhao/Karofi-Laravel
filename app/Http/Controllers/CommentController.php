<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new comments();
        $comment->user_name = $request->input('user_name');
        $comment->user_email = $request->input('user_email');
        $comment->comment_content = $request->input('comment_content');
        $comment->parent_comment_id = $request->input('parent_comment_id');
        // Set other fields if needed
        $comment->save();

        return response()->json($comment); // Return the new comment as JSON
    }
}
