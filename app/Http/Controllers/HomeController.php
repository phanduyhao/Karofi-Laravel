<?php

namespace App\Http\Controllers;
use App\Models\cates;
use App\Models\slides;
use App\Http\Controllers\save;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $slides = slides::all();
        $cates = cates::all();
        return view('home',compact('slides','cates'),[
            'title' => 'Trang chủ'
        ]);
    }

}
