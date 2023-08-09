<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\locations;
use Illuminate\Support\Str;

class locationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = locations::all();
        return view('admin.location.index',compact('locations'),[
            'title' => 'Quản lý địa chỉ'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = locations::all();
        return view('admin.location.create',compact('locations'),[
            'title' => 'Thêm mới địa chỉ'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_location' => 'required', // Kiểm tra đã nhập Email chưa, có đúng định dạng Email không ?
        ],[
            'name_location.required' => 'Vui lòng nhập địa chỉ !',
        ] );
        // Kiểm tra xem location_id có tồn tại trong bảng location hay không
        $location = new locations;
        $location->name_location = $request->name_location;
        $location->save();
        // Chuyển hướng về trang hiển thị danh sách location hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('locations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(locations $locations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(locations $location)
    {
        $locations = locations::find($location);
        return view('admin.location.edit',compact('locations','location'),[
            'title' => 'Chỉnh sửa địa chỉ'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, locations $location)
    {
        $this->validate($request,[
            'name_location' => 'required', // Kiểm tra đã nhập Email chưa, có đúng định dạng Email không ?
        ],[
            'name_location.required' => 'Vui lòng nhập địa chỉ !',
        ] );
        // Kiểm tra xem location_id có tồn tại trong bảng location hay không
        $location->name_location = $request->name_location;
        $location->save();
        // Chuyển hướng về trang hiển thị danh sách location hoặc trang khác tùy theo yêu cầu của bạn
        return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(locations $location)
    {
        $location->delete();
        // Chuyển hướng về trang danh sách location hoặc trang khác (tuỳ ý)
        return redirect()->route('locations.index')->with('success', 'địa chỉ đã được xóa thành công.');
    }
}
