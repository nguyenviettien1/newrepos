@extends('admin.layout.index2')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Thêm mới</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}
                            <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/user/them" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter User Name" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input type="password" class="form-control" name="passwordAgain" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Phân quyền (Level)</label>
                                <label class="radio-inline">
                                    <input name="level" value="0" checked="" type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="level" value="1" type="radio">Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection