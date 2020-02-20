<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Web chia sẻ tài liệu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="admin_asset/dist/css/index.css" rel="stylesheet" />
</head>
<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            WEB CHIA SẺ TÀI LIỆU
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thông tin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Lời nói đầu</a>
                        <a class="dropdown-item" href="#">Bản quyền</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ủng hộ</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Báo cáo vi phạm</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="admin_asset/upload/images/carousel1.jpg" class="d-block w-100" />
            </div>
            <div class="carousel-item">

                <img src="admin_asset/upload/images/carousel2.jpg" class="d-block w-100" />
            </div>
            <div class="carousel-item">

                <img src="admin_asset/upload/images/carousel3.jpg" class="d-block w-100" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <hr class="my-4">
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Công Nghệ Thông Tin</h1>
            </div>
            <!-- Horizontal Rule -->
            <hr>
            <div class="col-12">
                <p>Chào mừng các bạn đến với web chia sẻ tài liệu trực tuyến, đây là nơi mọi người có thể cùng nhau trao đổi kinh nghiệm cũng như những cuốn sách hay về công nghệ thông tin. Đây còn là nơi mọi người cùng nhau tạo và gắn kết đam mê với nghề lập trình viên.</p>
            </div>
        </div>
    </div>


    <hr class="my-4">

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Chuyên mục</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon1.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu CNTT (Beginner)</h5>
                        <p class="card-text">Công nghệ thông tin (viết tắt là CNTT) là một nhánh ngành kỹ thuật sử dụng máy tính và phần mềm máy tính để chuyển đổi, lưu trữ, bảo vệ, xử lý, truyền tải và thu thập thông tin.</p>
                        <a href="#" class="btn btn-primary text1">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon2.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu ngôn ngữ C/C++</h5>
                        <p class="card-text">C là ngôn ngữ lập trình cấu trúc, nó cho phép tạo 1 ứng dụng gồm nhiều module chức năng (file), mỗi module chứa nhiều hàm chức năng, các hàm này có thể bị bao đóng trong module...</p>
                        <a href="#" class="btn btn-primary text2">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon3.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu ngôn ngữ Java</h5>
                        <p class="card-text">Java là một ngôn ngữ lập trình hướng đối tượng (OOP) và dựa trên các lớp (class). Khác với phần lớn ngôn ngữ lập trình thông thường, thay vì biên dịch mã nguồn thành mã máy hoặc...</p>
                        <a href="#" class="btn btn-primary text3">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon4.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu ngôn ngữ Python</h5>
                        <p class="card-text">Python là một ngôn ngữ lập trình bậc cao cho các mục đích lập trình đa năng, do Guido van Rossum tạo ra và lần đầu ra mắt vào năm 1991. Python được thiết kế với ưu điểm mạnh là...</p>
                        <a href="#" class="btn btn-primary text4">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon5.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu ngôn ngữ C#</h5>
                        <p class="card-text">C# là một ngôn ngữ lập trình hướng đối tượng được phát triển bởi Microsoft, là phần khởi đầu cho kế hoạch .NET của họ. Tên của ngôn ngữ bao gồm ký tự thăng theo Microsoft nhưng...</p>
                        <a href="#" class="btn btn-primary text5">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon6.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu ngôn ngữ Ruby</h5>
                        <p class="card-text">Ruby là một ngôn ngữ lập trình hướng đối tượng, có khả năng phản ứng. Theo tác giả, Ruby chịu ảnh hưởng bởi Perl, Smalltalk, Eiffel, Ada và Lisp. Ruby là ngôn ngữ thông dịch và...</p>
                        <a href="#" class="btn btn-primary text6">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon7.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu LT hướng đối tượng</h5>
                        <p class="card-text">Lập trình hướng đối tượng (tiếng Anh: Object-oriented programming, viết tắt: OOP) là một mẫu hình lập trình dựa trên khái niệm "công nghệ đối tượng", mà trong đó, đối tượng chứa...</p>
                        <a href="#" class="btn btn-primary text7">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon8.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu LT Web</h5>
                        <p class="card-text">Thiết kế web hay thiết kế website đơn giản là công việc tạo một trang web cho cá nhân, công ty, doanh nghiệp hoặc tổ chức.Sau khi xây dựng trang web xong thì có thể lập trình viên...</p>
                        <a href="#" class="btn btn-primary text8">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon9.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu LT vi điều khiển</h5>
                        <p class="card-text">Vi điều khiển là một máy tính được tích hợp trên một chip, nó thường được sử dụng để điều khiển các thiết bị điện tử.Vi điều khiển, thực chất, là một hệ thống bao gồm một vi xử lý...</p>
                        <a href="#" class="btn btn-primary text9">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon10.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu về xử lý ảnh</h5>
                        <p class="card-text">Xử lý ảnh là một phân ngành trong xử lý số tín hiệu với tín hiệu xử lý là ảnh. Đây là một phân ngành khoa học mới rất phát triển trong những năm gần đây. Xử lý ảnh gồm 4 lĩnh vực... </p>
                        <a href="#" class="btn btn-primary text10">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon11.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu về xử lý tiếng nói</h5>
                        <p class="card-text">Xử lý tiếng nói là sự nghiên cứu tiếng nói của con người dưới dạng tín hiệu, và các phương pháp xử lý những tín hiệu này. Tín hiệu tiếng nói thường được thể hiện dưới dạng số, tức là...</p>
                        <a href="#" class="btn btn-primary text11">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="admin_asset/upload/images/icon12.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu về trí tuệ nhân tạo</h5>
                        <p class="card-text">Trong khoa học máy tính, trí tuệ nhân tạo hay AI (tiếng Anh: Artificial Intelligence), đôi khi được gọi là trí thông minh nhân tạo, là trí thông minh được thể hiện bằng máy móc, trái...</p>
                        <a href="#" class="btn btn-primary text12">Khám phá!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 space-text">
                <div class="card">
                    <img src="/images/icon13.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Sách báo công nghệ</h5>
                        <p class="card-text">Cùng chung xu hướng phát triển của thế giới, lĩnh vực công nghệ Việt Nam cũng đã có những bước thăng tiến mạnh mẽ trong vòng vài năm trở lại đây. Công nghệ là một lĩnh vực vô cùng đa...</p>
                        <a href="#" class="btn btn-primary text13">Khám phá!</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr class="my-4">
    <div class="container-fluid padding footer-index">
        <div class="row padding">
            <div class="col-md-4">
                <h3><b>RESOURCES</b></h3>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Posts</td>
                                <td>Organizations</td>
                            </tr>
                            <tr>
                                <td>Questions</td>
                                <td>Tags</td>
                            </tr>
                            <tr>
                                <td>Video</td>
                                <td>Authors</td>
                            </tr>
                            <tr>
                                <td>Discussions</td>
                                <td>Recommend System</td>
                            </tr>
                            <tr>
                                <td>Tools</td>
                                <td>Machine Learning</td>
                            </tr>
                            <tr>

                                <td>System Status</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <h3><b>INFORMATION</b></h3>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Họ và tên: Nguyễn Viết Tiến</td>
                            </tr>
                            <tr>
                                <td>MSSV: 20164078</td>
                            </tr>
                            <tr>
                                <td>Lớp: CNTT1.01</td>
                            </tr>
                            <tr>
                                <td>Viện: Công Nghệ Thông Tin & Truyền Thông</td>
                            </tr>
                            <tr>
                                <td>Trường: Đại học Bách Khoa Hà Nội</td>   
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-md-4">
                <h3><b>MOBILE APP</b></h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mobi-app ch-play">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mobi-app app-store">

                        </div>

                    </div>
                    <div class="qr-code">

                    </div>
                </div>
                <h3><b>LINKS</b></h3>
                <div class="row">
                    <div class="col-12 social padding">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>