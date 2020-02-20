<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin/document_type/danhsach">Web chia sẻ tài liệu</a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="trangchu">Trang chủ</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-header -->
    
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li>
                    <a href="admin/thongbaomoi">Phê duyệt</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    @if(Auth::check())
                      <li class="divider"></li>
                      <li><i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}</li>
                      <li class="divider"></li>
                      <li><a href="admin/user/sua/{{Auth::user()->id}}">Sửa tài khoản</a></li>
                      <li class="divider"></li>
                      <li><a href="admin/logout">Đăng xuất</a></li>
                    @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            @include('admin.layout.menu')
            <!-- /.navbar-static-side -->
        </nav>
