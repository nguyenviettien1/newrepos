@extends('admin.layout.index2')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thông báo
                            <small>Danh sách tài liệu người dùng muốn chia sẻ</small>
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
                                
                                <th>Ngày tạo</th>
                                <th>Delete</th>
                                <th>Phê duyệt</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($tailieu as $tl)
                            @if($tl->Status==1)                            
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
                                
                                <td>{{$tl->created_at}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/document_name/xoa/{{$tl->id}}"> Xóa</a></td>
                                <td> <a href="admin/pheduyet/{{$tl->id}}"><button>Đồng ý</button></a></td>
                            </tr>
                            @endif
                           @endforeach
                        </tbody>
                    </table>
                    <a href="admin/thongbaomoi" class="btn btn-success" id="accept-all">Xác nhận tất cả</a>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection


