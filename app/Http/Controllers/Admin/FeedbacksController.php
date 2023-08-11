<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedbacks;
use Illuminate\Support\Str;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = feedbacks::all();
        return view('admin.feedback.index',compact('feedbacks'),[
            'title' => 'Quản lý phản hồi'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(feedbacks $feedback)
    {
        $feedbacks = feedbacks::find($feedback);
        return view('admin.feedback.details',compact('feedbacks','feedback'),[
            'title' => 'Chi tiết phản hồi'
        ]);
    }
    public function update(Request $request, feedbacks $feedback)
    {
        $feedback->seen = $request->seen ? 1 : 0;
        $feedback->save();
        // Chuyển hướng về trang hiển thị danh sách feedback hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('feedbacks.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedbacks $feedback)
    {
        $feedback->delete();
        // Chuyển hướng về trang danh sách feedback hoặc trang khác (tuỳ ý)
        return redirect()->route('feedbacks.index')->with('success', 'phản hồi đã được xóa thành công.');
    }
}
