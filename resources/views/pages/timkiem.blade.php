@extends('layout.index')

@section('content')
<div class="container-fluid">
        <div class="row">

            @include('layout.menu')

            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Tìm kiếm : {{$tukhoa}}</b></h4>
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
                                
                            </tr>
                           @endforeach
                        </tbody>
                    </table>

                 <!-- Pagination -->
                 <div style="text-align: center;">
                  {{-- {{$tailieu->links()}} --}}
                  {{ $tailieu->appends(Request::all())->links() }}
                </div>        
                <!-- /.row -->

                    
                    
                   

                </div>
            </div> 

        </div>

    </div>
</div>
@endsection