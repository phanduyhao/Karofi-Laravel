<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comments;
use Illuminate\Support\Str;

class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = comments::all();
        return view('admin.comment.index',compact('comments'),[
            'title' => 'Quản lý bình luận'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(comments $comment)
    {
        $comments = comments::find($comment);
        return view('admin.comment.details',compact('comments','comment'),[
            'title' => 'Chi tiết bình luận'
        ]);
    }
    public function update(Request $request, comments $comment)
    {
        $comment->seen = $request->seen ? 1 : 0;
        $comment->save();
        // Chuyển hướng về trang hiển thị danh sách comment hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('comments.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comments $comment)
    {
        $comment->delete();
        // Chuyển hướng về trang danh sách comment hoặc trang khác (tuỳ ý)
        return redirect()->route('comments.index')->with('success', 'bình luận đã được xóa thành công.');
    }
}
