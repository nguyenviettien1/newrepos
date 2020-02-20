@extends('admin.layout.index2')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê
                            <small>Người dùng</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <div> 
                    <?php
                        $countName=0;
                    ?>                   
                            @foreach($tailieu as $tl)                                                                              
                            <?php
                                $countName+=1;
                            ?>                           
                           @endforeach
                       
                    </div>
                    
                    <h4>Có tất cả 
                        <?php
                            $countUser=0;
                            $countUserCreate=0;
                        ?>
                        @foreach($user as $u)
                        <?php
                            $countUser+=1;
                        ?>
                        @endforeach
                        {{$countUser}}
                        thành viên
                    </h4>
                    <hr class="my-4">
                    
                    <h4>Số người tham gia đóng góp là:
                     @foreach($user as $u)
                        <?php
                            App\document_name::where('user_id',$u->id)->count();
                        ?>
                        @if(App\document_name::where('user_id',$u->id)->count()!=0)
                        <?php
                            $countUserCreate+=1;
                        ?>
                        @endif
                    @endforeach
                   {{$countUserCreate}}
                   
                    </h4>
                    <hr class="my-4">
                    <table class="table">
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>Số lượng tài liệu đóng góp</th>
                                <th>Số tài liệu được phê duyệt</th>
                                <th>Phần trăm đóng góp</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($user as $u)
                        <tr>                            
                            <td>
                                {{$u->name}}
                            </td>
                             <td>
                                <?php
                                    echo App\document_name::where('user_id', $u->id)->count();
                                ?>
                             </td>
                             <td>
                                <?php
                                    echo App\document_name::where('user_id', $u->id)->where('Status',0)->count();
                                ?>
                             </td>
                             <td>
                                <?php
                                    echo App\document_name::where('user_id', $u->id)->count()/($countName*0.01). " % ";
                                ?>
                             </td>                                                        
                           
                            
                        </tr>
                        @endforeach
                   
                        </tbody>
                    </table>
                    <hr class="my-4">
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#page-wrapper -->
@endsection

