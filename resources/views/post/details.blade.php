@extends('layout.layout')
@section('content')
   <div class="post-content">
       <div class="container mx-auto">
           <h1 class="text-center">{{$post->title}}</h1>
           <div>
               {!! $post->contents !!}
           </div>
       </div>
   </div>
@endsection
