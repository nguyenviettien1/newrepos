@extends('layout.index')

@section('content')
<div class="container-fluid">
        <div class="row">

            @include('layout.menu')

            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>{{$loaitailieu2->DocumentType}}</b></h4>
                            
                    </div>  
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>                                
                                <th>Tác giả</th>
                                <th>Tên tài liệu</th>
                                <th>Link</th>
                                <th>Địa chỉ mua</th>
                                <th>Note</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tailieu as $tl)
                            @if($tl->Status==0)                            
                            <tr class="odd gradeX" align="left">
                                <td>{{$tl->id}}</td>
                                
                                <td>{{$tl->Author}}</td>
                                <td>{{$tl->DocumentName}}</td>
                                <td>{{$tl->Link}}</td>
                                <td>{{$tl->Address}}</td>
                                <td>{{$tl->Note}}</td>                                
                                
                            </tr>
                            @endif
                           @endforeach
                        </tbody>
                    </table>
                    {!!$tailieu->links()!!}
                    @if(Auth::check())
                    <a href="themtailieu" class="btn btn-success">Thêm tài liệu</a>
                    @endif
                </div>
            </div> 

        </div>

    </div>
</div>
@endsection