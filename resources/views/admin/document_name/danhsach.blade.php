@extends('admin.layout.index2')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài liệu
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Loại tài liệu</th>
                                <th>Tác giả</th>
                                <th>Tên tài liệu</th>
                                <th>Link</th>
                                <th>Địa chỉ mua</th>
                                <th>Ghi chú</th>
                                <th>Người tạo</th>
                                <th>Trạng thái</th>
                                <th><i class="fa fa-trash-o  fa-fw"></i>Delete</th>
                                <th><i class="fa fa-pencil fa-fw"></i>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tailieu as $tl)                            
                            <tr class="odd gradeX" align="left">
                                <td>{{$tl->id}}</td>
                                <?php
                                    $type_document = $tl->loaitailieu()->first();
                                ?>
                                <td>
                                {{$type_document->DocumentType}}
                                </td>
                                <td>{{$tl->Author}}</td>
                                <td>{{$tl->DocumentName}}</td>
                                <td>{{$tl->Link}}</td>
                                <td>{{$tl->Address}}</td>
                                <td>{{$tl->Note}}</td>  
                                <td>{{optional($tl->user)->name}}</td> 
                                <td>
                                    @if($tl->Status == 0)
                                    {{"Hiện"}}
                                    @else
                                    {{"Ẩn"}}
                                    @endif                        
                                </td>
                                <td class="center"><a href="admin/document_name/xoa/{{$tl->id}}"> Delete</a></td>
                                <td class="center"> <a href="admin/document_name/sua/{{$tl->id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
      
@endsection