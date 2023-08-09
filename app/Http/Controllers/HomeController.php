<?php

namespace App\Http\Controllers;
use App\Models\banners;
use App\Models\cates;
use App\Models\locations;
use App\Models\slides;
use App\Models\posts;
use App\Http\Controllers\save;
use App\Models\videos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $slides = slides::all();
        $cates = cates::all();
        $posts = posts::all();
        $banners = banners::all();
        $locations = locations::all();
        $videos = videos::all();
        return view('home',compact('slides','cates','posts','locations','banners','videos'),[
            'title' => 'Trang chủ'
        ]);
    }

}
