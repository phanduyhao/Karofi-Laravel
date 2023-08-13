@extends('admin.main')
@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('users.update',['user' => $user]) }}" >
            @method('PATCH')
            @csrf
            <div class="card-footer flex-center-between">
                <a href="{{route('users.index')}}" name="submit" type="submit" class="btn font-weight-bold btn-warning">Trở lại</a>
                <button name="submit" type="submit" class="btn btn-success font-weight-bold float-right">Cập nhật</button>
            </div>
            <div class="card-body">
                @include('admin.error')
                <div class="form-group">
                    <label for="">Title</label>
                    <input value="{{$user->name}}" name="name" type="text" class="form-control" id="title" placeholder="User Name ">
                </div>
                <div class="form-group">
                    <label for="">Alias</label>
                    <input value="{{$user->email}}" name="email" type="email" class="form-control" placeholder="User Email ">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input value="{{$user->password}}" name="pass" type="password" placeholder="User password "  class="form-control">
                </div>
            </div>
        </form>
    </div>
@endsection
