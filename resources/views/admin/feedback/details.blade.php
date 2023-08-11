@extends('admin.main')
@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('feedbacks.update',['feedback' => $feedback]) }}">
            @method('PATCH')
            @csrf
            <div class="card-footer flex-center-between">
                <a href="{{route('feedbacks.index')}}" name="submit" class="btn font-weight-bold btn-warning">Trở lại</a>
                <button name="submit" type="submit" class="btn btn-success font-weight-bold float-right" style="margin-right: 25px;">Đánh dấu đã đọc
                    <input name="seen" type="checkbox" class="form-check-input" id="" style="width: 20px;margin-left: 20px;height: 20px;">
                </button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input disabled value="{{$feedback->name}}" class="form-control text-black">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input disabled value="{{$feedback->email}}"class="form-control text-black">
                </div>
                <div class="form-group mt-2">
                    <label for="">Phone</label>
                    <input disabled value="{{$feedback->phone}}" class="form-control text-black">
                </div>
                <div class="form-group mt-2">
                    <label for="">Address</label>
                    <input disabled value="{{$feedback->address}}" class="form-control text-black">
                </div>

                <div class="form-group mt-4">
                    <label for="">Contents</label>
                    {{--          Hiển thị TEXT thay vì HTML                      --}}
                    <div class="border border-width-2 p-4">
                        {!! $feedback->contents !!}
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
