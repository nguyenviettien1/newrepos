@extends('layout.index')

@section('content')
<div class="container-fluid">
        <div class="row">

            @include('layout.menu')

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Thống kê của bạn</b></h4>                        
                    </div>  
                   
                    
                    <h4> Số bài đăng chia sẻ của bạn: 
                    <?php
                        $count=0;
                    ?>
                   
                            @foreach($tailieu as $tl)
                            
                            @if($tl->user->name ==Auth::user()->name)                            
                            <?php
                                $count=$count+1;
                            ?>
                            @endif
                           @endforeach
                       {{$count}}
                    </h4>
                    <hr class="my-4"> 
                    <h4> Số bài đăng chia sẻ của bạn đã được phê duyệt: 
                    <?php
                        $countStatus=0;
                    ?>
                   
                            @foreach($tailieu as $tl)
                            
                            @if($tl->user->name ==Auth::user()->name)
                                @if($tl->Status==0)                            
                                    <?php
                                        $countStatus=$countStatus+1;
                                    ?>
                                @endif
                            @endif
                           @endforeach
                       {{$countStatus}}
                    </h4>
                    <p> Chờ đợi người quản trị phê duyệt</p>
                    <hr class="my-4">
                    <h4>
                    <?php
                        // echo "Số bài đăng chia sẻ của bạn đã được phê duyệt: ". $tl::where('user_id', $tl->user->id)->where('Status',0)->count();
                    ?>
                    </h4>
                    
                    <h4>Bạn có {{$countStatus}} bài đăng trong đó có: <br>                                        
                            @foreach($loaitailieu as $ltl)
                            <?php
                                if (App\document_name::where('user_id', $tl->User->id)->where('Status', 0)->where('id_DocumentType', $ltl->id)->count()!=0) {
                                    echo App\document_name::where('user_id', $tl->user->id)->where('Status', 0)
                                    ->where('id_DocumentType', $ltl->id)
                                    ->count() ." " . $ltl->DocumentType. " ---- ";
                                }
                            ?>
                            
                            @endforeach
                       
                    </h4>
                    <hr class="my-4">
                    <h4> Thống kê chung</h4>
                    <table class="table">
                        <tbody>
                            @foreach($loaitailieu as $ltl)
                            <tr>
                                <td> <h5>Số lượng {{$ltl->DocumentType}}</h5></td>
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
                                    <h5>{{$countDocumentType}}</h5>
                                </td>
                            </tr> 
                            @endforeach                           
                        </tbody>
                    </table>
                    <hr class="my-4">
                </div>
            </div> 

        </div>

    </div>
</div>
@endsection