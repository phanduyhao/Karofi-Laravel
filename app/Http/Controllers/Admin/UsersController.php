<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'),[
            'title' => 'Quản lý tài khoản'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user);
        return view('admin.user.edit',compact('users','user'),[
            'title' => 'Chỉnh sửa tài khoản'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Lấy thông tin từ form chỉnh sửa
        $user->name = $request->name;
        $user->email = $request->email;
        $password = $request->pass;
        $user->password = bcrypt($password);
        $user->save();
        // Điều hướng về trang hiển thị thông tin người dùng sau khi cập nhật
        return redirect()->route('users.index')->with('success', 'Thông tin người dùng đã được cập nhật.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
    }
}
