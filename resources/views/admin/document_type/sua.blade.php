@extends('admin.layout.index2')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại tài liệu
                            <small>{{$loaitailieu->DocumentType}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                     <!-- Kiểm tra lỗi -->
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
                        <form action="admin/document_type/sua/{{$loaitailieu->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>       
                            <div class="form-group">
                                <label>Tên loại tài liệu</label>
                                <input class="form-control" name="TenLoaiTaiLieu" placeholder="Please Enter Document Type" value="{{$loaitailieu->DocumentType}}"/>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
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