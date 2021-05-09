<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TNstore - Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset('assets/admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <style>.cke{visibility:hidden;}</style>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    ThangNguyenStore
                </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <form action="/Admin/Base/ChangeCulture" method="post"><input id="returnUrl" name="returnUrl" type="hidden" value="/Admin/Home"><select id="ddlCulture" name="ddlCulture" onchange="this.form.submit();"><option selected="selected" value="vi">Tiếng Việt</option>
                        <option value="en">Tiếng Anh</option>
                    </select></form>        </li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend/assets/admin.</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend/assets/admin.</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend/assets/admin.</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search.">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href=""><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Hệ thống<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="GroupUser.html">Nhóm người dùng</a>
                                    </li>
                                    <li>
                                        <a href="User.html">User</a>
                                    </li>
                                    <li>
                                        <a href="BinhLuan.html">Bình luận</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-comment fa-fw"></i> Tin tức<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="TinTuc.html">Danh mục</a>
                                    </li>
                                    <li>
                                        <a href="TinTuc.html">Tin tức</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bell fa-fw"></i>Danh mục<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="{{ route('LoaiPK.index') }}">Loại sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('PhuKien.index') }}">Sản phẩm</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-money fa-fw"></i> Hóa đơn nhập<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="HoaDonNhap.html">Danh mục</a>
                                    </li>
                                    <li>
                                        <a href="ChiTietHoaDon">Chi tiết hóa đơn</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-money fa-fw"></i> Đơn đặt hàng<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="DonDatHang.html">Danh mục</a>
                                    </li>
                                    <li>
                                        <a href="ChiTietDonHang">Chi tiết đơn hàng</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=""><i class="fa fa-bell fa-fw"></i> Khách hàng<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="#">Danh mục</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('KhachHang.index') }}">Thông tin khách hàng</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bell fa-fw"></i> Nhà cung cấp<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="#">Danh mục</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('NhaCungCap.index') }}">Thông tin nhà cung cấp</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý chung<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="/Admin/About/Index">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="/Admin/Footer/Index">Foooter</a>
                                    </li>
                                    <li>
                                        <a href="/Admin/Footer/Index">Menu</a>
                                    </li>
                                    <li>
                                        <a href="/Admin/Footer/Index">Slide</a>
                                    </li>
                                    <li>
                                        <a href="/Admin/Footer/Index">Phản hồi</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <!-- Page Content -->
            @yield('admin_content')
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="/assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/Scripts/jquery.unobtrusive-ajax.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- Metis Menu Plugin JavaScript -->
        <script src="/assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <script src="/assets/admin/js/plugins/ckfinder/ckfinder.js"></script>
        <script src="/assets/admin/js/plugins/ckeditor/ckeditor.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/assets/admin/dist/js/sb-admin-2.js"></script>
        
      
        
    </body>
    </html>