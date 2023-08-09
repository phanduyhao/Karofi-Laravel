@extends('admin.main')
@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('locations.update',['location' => $location]) }}" >
            @method('PATCH')
            @csrf
            <div class="card-footer flex-center-between">
                <a href="{{route('locations.index')}}" name="submit" type="submit" class="btn font-weight-bold btn-warning">Trở lại</a>
                <button name="submit" type="submit" class="btn btn-success font-weight-bold float-right">Cập nhật</button>
            </div>
            <div class="card-body">
                @include('admin.error')
                <div class="form-group">
                    <label for="">Title</label>
                    <input value="{{$location->name_location}}" name="name_location" type="text" class="form-control" id="name_location" placeholder="Location Title ">
                </div>
            </div>
        </form>
    </div>
@endsection
