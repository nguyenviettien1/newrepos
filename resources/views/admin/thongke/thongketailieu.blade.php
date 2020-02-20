@extends('admin.layout.index2')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê
                            <small>Tài liệu Công nghệ thông tin</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <h4>Tổng số tài liệu được chia sẻ: 
                    <?php
                        $countName=0;
                    ?>                   
                            @foreach($tailieu as $tl)                                                                              
                            <?php
                                $countName+=1;
                            ?>                           
                           @endforeach
                       {{$countName}}
                    </h4>
                    <hr class="my-4"> 
                    <h4>Tổng số tài liệu được phê duyệt: 
                    <?php
                        $countAccept=0;
                    ?>                   
                            @foreach($tailieu as $tl)
                            @if($tl->Status==0)                                                                              
                            <?php
                                $countAccept+=1;
                            ?>
                            @endif                           
                           @endforeach
                       {{$countAccept}}
                    </h4>
                    <p>Chiếm: {{$countAccept*100/$countName}} %</p>
                    <hr class="my-4">
                    <h4>Có 
                    <?php
                        $countNoAccept=0;
                    ?>                   
                            @foreach($tailieu as $tl)
                            @if($tl->Status==1)                                                                              
                            <?php
                                $countNoAccept+=1;
                            ?>
                            @endif                           
                           @endforeach
                       {{$countNoAccept}} tài liệu là chưa được phê duyệt
                    </h4>
                    <h4>Lí do:</h4>
                    <p>Số lượng tài liệu không phù hợp (Thông tin sai lệch, Địa chỉ không tồn tại,...): 0</p>
                    <p>Số tài liệu do người quản trị chưa phê duyệt: {{$countNoAccept}}</p>
                    <hr class="my-4">
                    <table class="table">
                        <tbody>
                            @foreach($loaitailieu as $ltl)
                            <tr>
                                <td> Số lượng {{$ltl->DocumentType}}</td>
                                <td>
                                    <?php
                                        $countDocumentType=0;
                                    ?>
                                    @foreach($tailieu as $tl)
                                        @if($tl->id_DocumentType==$ltl->id)
                                            <?php
                                                $countDocumentType+=1;
                                            ?>  
                                        @endif
                                    @endforeach
                                    {{$countDocumentType}}
                                </td>
                            </tr> 
                            @endforeach                           
                        </tbody>
                    </table>
                    <hr class="my-4"> 
                        
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection