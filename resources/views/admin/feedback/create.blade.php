@extends('admin.main')
@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('feedbacks.store') }}" >
            @csrf
            <div class="card-footer flex-center-between">
                <a href="{{route('feedbacks.index')}}" name="submit" type="submit" class="btn font-weight-bold btn-warning">Trở lại</a>
                <button name="submit" type="submit" class="btn btn-success font-weight-bold float-right">Thêm mới</button>
            </div>
            <div class="card-body">
                @include('admin.error')
                <div class="form-group">
                    <label for="">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="feedbackgory Title ">
                </div>
                <div class="form-group">
                    <label for="">Alias</label>
                    <input name="alias" type="text" class="form-control" placeholder="feedbackgory Alias " id="alias">
                </div>
                <div class="form-group">
                    <label for="">Short Desc</label>
                    <input name="desc" type="text" placeholder="feedbackgory Description "  class="form-control" id="desc">
                </div>
                <div class="form-group">
                    <label for="">Parent Id</label>
                    <select name="parent_id" class="form-control" id="parent_id">
                        <option value="">Chọn danh mục cha</option>
                        @foreach($feedbacks as $feedback)
                            <option value="{{ $feedback->id }}">{{ $feedback->id }}-{{ $feedback->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input name="active" type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="">Active</label>
                </div>
            </div>
            <!-- /.card-body -->
            @csrf
        </form>
    </div>

@endsection
