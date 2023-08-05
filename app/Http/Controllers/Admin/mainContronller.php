<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cates;
use Illuminate\Support\Str;

class mainContronller extends Controller
{
    public function index(){
        return view('admin.home',[
            'title' => 'Trang quản trị'
        ]);
    }
}
