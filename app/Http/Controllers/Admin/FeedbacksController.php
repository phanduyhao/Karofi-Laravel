<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedbacks;
use Illuminate\Support\Str;

class feedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = feedbacks::all();
        return view('admin.feedback.index',compact('feedbacks'),[
            'title' => 'Quản lý danh mục'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $feedbacks = feedbacks::all();
        return view('admin.feedback.create',compact('feedbacks'),[
            'title' => 'Thêm mới danh mục'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required', // Kiểm tra đã nhập Email chưa, có đúng định dạng Email không ?
            'alias' => 'required' // Kiểm tra đã nhập mật khẩu chưa ?
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề danh mục !',
            'alias.required' => 'Vui lòng nhập Alias'
        ] );
        // Kiểm tra xem feedback_id có tồn tại trong bảng feedback hay không
        $feedback = new feedbacks;
        $feedback->title = $request->title;
        $feedback->short_desc = $request->desc;
        $feedback->alias = $request->alias;

        $feedback->parent_id = $request->parent_id;

        $feedback->active = $request->active ? 1 : 0;
        $feedback->save();
        // Chuyển hướng về trang hiển thị danh sách feedback hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('feedbacks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(feedbacks $feedbacks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedbacks $feedback)
    {
        $feedbacks = feedbacks::find($feedback);
        return view('admin.feedback.edit',compact('feedbacks','feedback'),[
            'title' => 'Chỉnh sửa danh mục'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, feedbacks $feedback)
    {
        $this->validate($request,[
            'title' => 'required', // Kiểm tra đã nhập Email chưa, có đúng định dạng Email không ?
            'alias' => 'required' // Kiểm tra đã nhập mật khẩu chưa ?
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề danh mục !',
            'alias.required' => 'Vui lòng nhập Alias'
        ]);
        // Kiểm tra xem feedback_id có tồn tại trong bảng feedback hay không
        $feedback->title = $request->title;
        $feedback->short_desc = $request->desc;
        $feedback->alias = $request->alias;
        $feedback->parent_id = $request->parent_id;
        $feedback->active = $request->active ? 1 : 0;
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
        return redirect()->route('feedbacks.index')->with('success', 'danh mục đã được xóa thành công.');
    }
}
