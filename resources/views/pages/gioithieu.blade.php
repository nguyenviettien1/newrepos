@extends('layout.index')
@section('content')
<div class="container-fluid">



<div class="row main-left">
    @include('layout.menu')

    <div class="col-md-10">
        <div class="panel panel-default">            
            <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                <h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
            </div>
            <img src="images/intro-img.jpg" class="intro-img" alt="..." />
        <h3>Hiện nay, ngành công nghệ thông tin là một trong những ngành học được chú trọng trong hệ thống đào tạo của trường Đại học Công nghệ thông tin cũng như các trường Đại học khác có đào tạo ngành học này. Nó được xem là ngành đào tạo mũi nhọn hướng đến sự phát triển của công nghệ và khoa học kỹ thuật trong thời đại số hóa ngày nay.</h3>

<h3>        Công nghệ thông tin là một ngành học được đào tạo để sử dụng máy tính và các phần mềm máy tính để phân phối và xử lý các dữ liệu thông tin, đồng thời dùng để trao đổi, lưu trữ và chuyển đổi các dữ liệu thông tin dưới nhiều hình thức khác nhau.</h3>
        </div>
    </div>
</div>
<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection