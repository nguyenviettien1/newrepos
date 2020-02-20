@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container-fluid">



<div class="row main-left">
    @include('layout.menu')

    <div class="col-md-10">
        <div class="panel panel-default">            
            <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                <h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
            </div>

            <div class="panel-body">
                <!-- item -->
                <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
                
                <div class="break"></div>
                   <h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                <p>34 Ngõ Tân Thịnh - Đại La - Hai Bà Trưng - Hà Nội </p>

                <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                <p>viettien98htttbn@gmail.com </p>

                <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                <p>0394590033 </p>



                <br><br>
                <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                <div class="break"></div><br>
                
                    <div id="map" style="width:500px;height:500px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6888436890704!2d105.84344031361604!3d21.005106393964237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad5569f4fbf1%3A0x5bf30cadcd91e2c3!2zxJDhuqBJIEjhu4xDIELDgUNIIEtIT0EgQ-G7lE5HIFRS4bqmTiDEkOG6oEkgTkdIxKhB!5e0!3m2!1svi!2s!4v1578037447869!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                

            </div>
        </div>
    </div>
</div>
<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection