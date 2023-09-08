<?php

namespace App\Http\Controllers;
use App\Models\banners;
use App\Models\cates;
use App\Models\locations;
use App\Models\slides;
use App\Models\posts;
use App\Http\Controllers\save;
use App\Models\videos;
use App\Models\comments;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $slide = slides::where('active', 1)->where('title', 'Slide header')->get();
        $cates = cates::where('parent_id', null)->get();
        foreach ($cates as $cate) {
            $cate->children = cates::where('parent_id', $cate->id)->get();
            $cate->banners = banners::where('cate_id', $cate->id)->get();
            foreach ($cate->children as $child) {
                $child->posts = posts::where('cate_id', $child->id)->where('active',1)->get();
                $child->videos = videos::where('cate_id', $child->id)->where('active',1)->get();
            }
        }
        $locations = locations::all();
        $comments = comments::all();
        return view('home',compact('slide','cates','locations','comments'),[
            'title' => 'Trang chủ'
        ]);
    }

}
