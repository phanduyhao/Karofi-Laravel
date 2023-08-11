@extends('admin.main')
@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('comments.update',['comment' => $comment]) }}">
            @method('PATCH')
            @csrf
            <div class="card-footer flex-center-between">
                <a href="{{route('comments.index')}}" name="submit" class="btn font-weight-bold btn-warning">Trở lại</a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input disabled value="{{$comment->user_name}}" class="form-control text-black">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input disabled value="{{$comment->user_email}}"class="form-control text-black">
                </div>
                <div class="form-group mt-4">
                    <label for="">Contents</label>
                    {{--          Hiển thị TEXT thay vì HTML                      --}}
                    <div class="border border-width-2 p-4">
                        {!! $comment->comment_content !!}
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
