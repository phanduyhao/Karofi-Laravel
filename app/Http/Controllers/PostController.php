<?php

namespace App\Http\Controllers;
use App\Models\cates;
use App\Models\locations;
use App\Models\posts;
use App\Http\Controllers\save;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function details($alias,$id){
        $post = posts::findOrFail($id);
        $title = $post->Title;
        return view('post.details',compact('post'),[
            'title'=>$title
        ]);
    }
}
