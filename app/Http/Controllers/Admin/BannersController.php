<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cates;
use Illuminate\Http\Request;
use App\Models\banners;
use Illuminate\Support\Str;

class bannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cates = cates::all();
        $banners = banners::all();
        return view('admin.banner.index',compact('banners','cates'),[
            'title' => 'Quản lý banner'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cates = cates::all();
        $banners = banners::all();
        return view('admin.banner.create',compact('banners','cates'),[
            'title' => 'Thêm mới banner'
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
            'desc' => 'required',
            'cate_id' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề banner !',
            'thumb.required' => 'Vui lòng nhập thêm ảnh !',
            'desc.required' => 'Vui lòng nhập mô tả!',
            'cate_id.required' => 'Vui lòng chọn danh mục!',
        ] );
        // Kiểm tra xem banner_id có tồn tại trong bảng banner hay không
        $banner = new banners;
        $banner->title = $request->title;
        $title= $banner->title;
        $thumb = $request->file('thumb'); // Lấy file ảnh từ file Upload
        if ($thumb) {
            $fileName = Str::slug($title) . '.jpg'; // Tên ảnh theo Slug Title
            $thumb->storeAs('public/images/banners', $fileName); // Lưu ảnh đã thêm vào đường dẫn này
            $banner->thumb = $fileName; // Lưu tên file ảnh theo slug Title
        }
        $banner->cate_id = $request->cate_id;
        $banner->desc = $request->desc;
        $banner->active = $request->active ? 1 : 0;
        $banner->save();
        // Chuyển hướng về trang hiển thị danh sách banner hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('banners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banners $banner)
    {
        $cates = cates::all();
        $banners = banners::find($banner);
        return view('admin.banner.edit',compact('banners','banner','cates'),[
            'title' => 'Chỉnh sửa banner'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banners $banner)
    {
        $cates = cates::all();
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề banner !',
            'desc.required' => 'Vui lòng nhập mô tả!',
        ] );
        // Kiểm tra xem banner_id có tồn tại trong bảng banner hay không
        $banner->title = $request->title;
        $title= $banner->title;
        $thumb = $request->file('thumb'); // Lấy file ảnh từ file Upload
        if ($thumb) {
            $fileName = Str::slug($title) . '.jpg'; // Tên ảnh theo Slug Title
            $thumb->storeAs('public/images/banners', $fileName); // Lưu ảnh đã thêm vào đường dẫn này
            $banner->thumb = $fileName; // Lưu tên file ảnh theo slug Title
        }
        $banner->cate_id = $request->cate_id;
        $banner->desc = $request->desc;
        $banner->active = $request->active ? 1 : 0;
        $banner->save();
        // Chuyển hướng về trang hiển thị danh sách banner hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banners $banner)
    {
        $banner->delete();
        // Chuyển hướng về trang danh sách banner hoặc trang khác (tuỳ ý)
        return redirect()->route('banners.index')->with('success', 'banner đã được xóa thành công.');
    }
}
