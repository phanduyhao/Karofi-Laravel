<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cates;
use Illuminate\Http\Request;
use App\Models\videos;
use Illuminate\Support\Str;

class videosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cates = cates::all();
        $videos = videos::all();
        return view('admin.video.index',compact('videos','cates'),[
            'title' => 'Quản lý video'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cates = cates::all();
        $videos = videos::all();
        return view('admin.video.create',compact('videos','cates'),[
            'title' => 'Thêm mới video'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cates = cates::all();
        $this->validate($request,[
            'title' => 'required',
            'thumb' => 'required',
            'cate_id' => 'required',
            'link' => 'required'
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề video !',
            'thumb.required' => 'Vui lòng nhập thêm ảnh !',
            'cate_id.required' => 'Vui lòng chọn danh mục!',
            'link.required' => 'Vui lòng nhập link video!',

        ] );
        // Kiểm tra xem video_id có tồn tại trong bảng video hay không
        $video = new videos;
        $video->title = $request->title;
        $title= $video->title;
        $thumb = $request->file('thumb'); // Lấy file ảnh từ file Upload
        if ($thumb) {
            $fileName = Str::slug($title) . '.jpg'; // Tên ảnh theo Slug Title
            $thumb->storeAs('public/images/videos', $fileName); // Lưu ảnh đã thêm vào đường dẫn này
            $video->thumb = $fileName; // Lưu tên file ảnh theo slug Title
        }
        $video->cate_id = $request->cate_id;
        $video->link = $request->link;
        $video->active = $request->active ? 1 : 0;
        $video->save();
        // Chuyển hướng về trang hiển thị danh sách video hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(videos $video)
    {
        $cates = cates::all();
        $videos = videos::find($video);
        return view('admin.video.edit',compact('videos','video','cates'),[
            'title' => 'Chỉnh sửa video'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, videos $video)
    {
        $cates = cates::all();
        $this->validate($request,[
            'title' => 'required',
            'link' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề video !',
            'link.required' => 'Vui lòng nhập mô tả!',
        ] );
        // Kiểm tra xem video_id có tồn tại trong bảng video hay không
        $video->title = $request->title;
        $title= $video->title;
        $thumb = $request->file('thumb'); // Lấy file ảnh từ file Upload
        if ($thumb) {
            $fileName = Str::slug($title) . '.jpg'; // Tên ảnh theo Slug Title
            $thumb->storeAs('public/images/videos', $fileName); // Lưu ảnh đã thêm vào đường dẫn này
            $video->thumb = $fileName; // Lưu tên file ảnh theo slug Title
        }
        $video->cate_id = $request->cate_id;
        $video->link = $request->link;
        $video->active = $request->active ? 1 : 0;
        $video->save();
        // Chuyển hướng về trang hiển thị danh sách video hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(videos $video)
    {
        $video->delete();
        // Chuyển hướng về trang danh sách video hoặc trang khác (tuỳ ý)
        return redirect()->route('videos.index')->with('success', 'video đã được xóa thành công.');
    }
}
