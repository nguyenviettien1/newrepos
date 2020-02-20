@extends('layout.index')

@section('content')
<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="images/carousel1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="images/carousel2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="images/carousel3.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>

    <hr class="my-4">
    <div class="container padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Công Nghệ Thông Tin</h1>
            </div>
            <!-- Horizontal Rule -->
            <hr>
            <div class="col-12">
                <p style="font-size:20px;"><b>Chào mừng các bạn đến với web chia sẻ tài liệu trực tuyến, đây là nơi mọi người có thể cùng nhau trao đổi kinh nghiệm cũng như những cuốn sách hay về công nghệ thông tin. Đây còn là nơi mọi người cùng nhau tạo và gắn kết đam mê với nghề lập trình viên.</b></p>
            </div>
        </div>
    </div>


    
<hr class="my-4">

<img class="show-image" src="images/icon1.jpg" alt="">
<img class="show-image" src="images/icon10.png" alt="" style="margin-left:8px">
<img class="show-image" src="images/icon2.png" alt="" height="300" width="400">
<img class="show-image" src="images/icon3.jpeg" alt="" height="300" width="400">
<img class="show-image" src="images/icon4.png" alt="" height="300" width="400">
<img class="show-image" src="images/icon13.jpg" alt="" height="300" width="400">
<hr class="my-4">
<div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"><b>Chuyên mục</b></h1>
            </div>
        </div>
</div>
<div class="container-fluid padding">
        <div class="row padding" style="background-color:#cff193">
            @foreach($loaitailieu as $ltl)
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                   
                    <div class="card-body">
                        <h3 class="card-title">{{$ltl->DocumentType}}</h3>
                        <p class="card-text">{{$ltl->Description}}</p>
                        <a href="xemtailieu/{{$ltl->id}}" class="btn btn-primary">Khám phá!</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <hr class="my-4">
 <!-- Carousel-second -->

    <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="images/aa.jpg" alt="">
                            <div class="carousel-caption">
                                <h1 class="display-2" style="color:#ccc;">Công nghệ thông tin</h1>
                                <h3 style="color:#ccc;">Bước nhảy vọt của tương lai</h3>
                              </div>   
                        </div>
                        <div class="item">
                            <img class="slide-image" src="images/bb.jpg" alt="">
                            <div class="carousel-caption">
                                <h1 class="display-2" style="color:#ccc;">Công nghệ 4.0</h1>
                                <h3 style="color:#ccc;">Vạn vật kết nối (Internet of things)</h3>
                              </div>  
                        </div>
                        <div class="item">
                            <img class="slide-image" src="images/cc.jpg" alt="">
                            <div class="carousel-caption">
                                <h1 class="display-2" style="color:#ccc;">Lập trình ở muôn nơi</h1>
                                <h3 style="color:#ccc;">Chúng ta là những lập trình viên năng động</h3>
                              </div>  
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-4"> 
<div class="container contact-bg">
    <div class="row">
        <div class="col-12">
          <div class="contact-con"> 
            <h2 style="color:blue;"> Nếu bạn muốn đóng góp với chúng tôi?</h2>
          <p> Hãy đăng ký tài khoản và gửi những yêu cầu của bạn, chúng tôi sẽ cố gắng phản hồi nhanh nhất có thể
              <br>Chia sẻ những điều bạn có góp phần làm cộng đồng trở nên phong phú đa dạng </p>
        
          <div><a href="lienhe" class="tel-number"> +(84)123 456 7890</a></div>
          <a href="lienhe" class="btn btn-success">Liên hệ</a>
    </div>
    </div>
  </div>
</div>
<hr class="my-4">
<img class="show-image" src="images/icon6.png" alt="" height="300" width="400">
<img class="show-image" src="images/icon9.jpg" alt="" height="300" width="400">
<img class="show-image" src="images/icon12.jpg" alt="" height="300" width="400">
<img class="show-image" src="images/icon8.png" alt="" height="300" width="400">
<hr class="my-4">
<div class="container">
  <div class="inside-container"> 
    <div class="row">
      <div class="col-12 our-header">
          <h2 style="color:blue;"> Tại sao bạn nên chọn website này?</h2>
          <hr class="my-4">
      </div> 
    </div>
    <div class="row row-pad">
      <div class=" col-sm-6 col-md-3  our-spec">
        
        <h3> Thân thiện</h3>
          <p>Nơi mà mọi người có thể cùng nhau chia sẻ những tài liệu lập trình hay.</p>
        <div class="rd-btn">
           
        </div>
      </div>
      <div class=" col-sm-6 col-md-3  our-spec">
        
          <h3>Lắng nghe</h3>
          <p>Mọi thông tin bạn chia sẻ sẽ được mọi người đón nhận và góp ý.</p>
        <div class="rd-btn">
          
        </div>
      </div>
      <div class="col-sm-6 col-md-3  our-spec">
       
        <h3 >Giúp đỡ</h3>
          <p>Những khó khăn trong công việc lập trình của bạn sẽ được mọi người sẻ chia. </p>
        <div class="rd-btn">
          
        </div>
      </div>
      <div class="col-sm-6 col-md-3  our-spec">
        
        <h3 > Miễn phí</h3>
        <p>Tài khoản đăng ký miễn phí, không chịu bất cứ chi phí phát sinh nào cả! </p>
        <div class="rd-btn">
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection