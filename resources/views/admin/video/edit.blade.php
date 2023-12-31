@extends('admin.main')
@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('videos.update',['video' => $video]) }}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card-footer flex-center-between">
                <a href="{{route('videos.index')}}" name="submit" type="submit" class="btn font-weight-bold btn-warning">Trở lại</a>
                <button name="submit" type="submit" class="btn btn-success font-weight-bold float-right">Cập nhật</button>
            </div>
            <div class="card-body">
                @include('admin.error')
                <div class="form-group">
                    <label for="">Title</label>
                    <input value="{{$video->title}}" name="title" type="text" class="form-control" id="title" placeholder="video Title ">
                </div>
                <div id="image-gallery">
                    <input type="file" name="thumb" id="file-input" multiple onchange="previewImages(event)">
                    <div id="image-preview"></div>
                </div>
                <div class="form-group">
                    <label for="">link</label>
                    <input value="{{$video->link}}" name="link" type="text" placeholder="video link "  class="form-control" id="link">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="cate_id" class="form-control" id="cate_id">
                        @foreach($cates as $cate)
                            @if($cate->id == $video->cate_id)
                                <option value="{{ $cate->id }}">{{ $cate->title }}</option>
                            @endif
                        @endforeach
                        @foreach($cates as $cate)
                            @if($cate->id != $video->cate_id)
                                <option value="{{ $cate->id }}">{{ $cate->title }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    @if($video->active == 1)
                        <input checked name="active" type="checkbox" class="form-check-input" id="">
                    @else
                        <input name="active" type="checkbox" class="form-check-input" id="">
                    @endif
                    <label class="form-check-label" for="">Active</label>
                </div>
            </div>
        </form>
    </div>
@endsection
