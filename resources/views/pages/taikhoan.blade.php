@extends('layout.index')

@section('content')
<div class="container-fluid">
        <div class="row">

            @include('layout.menu')

            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Tài liệu của bạn</b></h4>
                            
                    </div>  
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Loại tài liệu</th>                                
                                <th>Tác giả</th>
                                <th>Tên tài liệu</th>
                                <th>Link</th>
                                <th>Địa chỉ mua</th>
                                <th>Note</th>      
                                <th>Trạng Thái</th>                         
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tailieu as $tl)
                            @if($tl->user->name ==Auth::user()->name)                            
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
                                <td>
                                @if($tl->Status == 0)
                                    {{"Đã duyệt"}}
                                @else
                                    {{"Đang chờ phê duyệt"}}
                                @endif  
                                </td>
                            </tr>
                            @endif
                           @endforeach
                        </tbody>
                    </table>
                    
                    
                </div>
            </div> 

        </div>

    </div>
</div>
@endsection