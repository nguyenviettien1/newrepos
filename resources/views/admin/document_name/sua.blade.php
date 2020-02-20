@extends('admin.layout.index2')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài Liệu
                            <small>{{$tailieu->DocumentName}}</small>
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
                        <form action="admin/document_name/sua/{{$tailieu->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>       
                            <div class="form-group">
                            <label>Loại tài liệu</label>
                                <select class="form-control" name="TenLoaiTaiLieu">
                                @foreach($loaitailieu as $ltl)
                                    <option
                                    @if($tailieu->id_DocumentType == $ltl->id )
                                        {{"selected"}}
                                    @endif
                                    value="{{$ltl->id}}">{{$ltl->DocumentType}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên tài liệu</label>
                                <input class="form-control" name="TenTaiLieu" placeholder="Please Enter Document Name" value="{{$tailieu->DocumentName}}"/>
                            </div>
                            <div class="form-group">
                                <label>Tác giả</label>
                                <input class="form-control" name="TenTacGia" placeholder="Please Enter Author Name" value="{{$tailieu->Author}}"/>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="Link" placeholder="Please Enter Link" value="{{$tailieu->Link}}"/>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ mua</label>
                                <input class="form-control" name="DiaChiMua" placeholder="Please Enter Address" value="{{$tailieu->Address}}"/>
                            </div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <input class="form-control" name="GhiChu" placeholder="Please Enter Note" value="{{$tailieu->Note}}"/>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <label class="radio-inline">
                                    <input name="Status" value="0" checked="" type="radio">Hiện
                                </label>
                                <label class="radio-inline">
                                    <input name="Status" value="1" type="radio">Ẩn
                                </label>
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