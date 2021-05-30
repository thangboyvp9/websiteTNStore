@extends('layout')
@section('content')
<div class="wrap-breadcrumb">
        <div class="clearfix container">
            <div class="row main-header">							
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li><a href="index.html" target="_self">Trang chủ</a></li>
                        <li class="active"><span>Tin Tức</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<section class="tin-tuc">
        <article class="left">
            <div class="Danh-muc">
                <div class="block-title">
                    <h4 class="title">Danh mục tin</h4>
                </div>
                <ul class="nav" id="menu-blog">
                    <li class="first">
                        <a href="index.html"><span>Trang chủ</span></a>
                    </li>
                    <li>
                        <a href="GioiThieu.html"><span>Giới thiệu</span></a>
                    </li>
                    <li>
                        <a href="ThucDon.html"><span>Sản phẩm</span></a>
                    </li>
                    <li class="current active">
                        <a href="TinTuc.html"><span>Tin tức công nghệ</span></a>
                    </li>
                    <li>
                        <a href="GioHang.html"><span>Đặt hàng</span></a>
                    </li>
                    <li>
                        <a href="LienHe.html"><span>Liên hệ</span></a>
                    </li>
                </ul>
            </div>
            
            <!-- BÀI VIẾT MỚI NHẤT -->
            <div class="Bai-viet">
                <div class="block-title">
                    <h4 class="title">Bài viết mới nhất</h4>
                </div>
                <div class="content-latest">
                    
                    <!-- Begin Danh mục blog -->
                    <div class="article seller-item">
                        <div class="sellers-img">
                            <a href="" class="product-block-img content-img clearfix">
                                <img src="img/Cổng-USB-C-có-thể-sẽ-thay-thế-cổng-HDMI-và-đây-là-lí-do-120x86.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5>
                                <a href="https://www.24h.com.vn/am-thuc/bun-thang-dinh-cao-am-thuc-ha-thanh-c460a1030730.html">Cổng USB-C có thể sẽ thay thế cổng HDMI và đây là lí do</a><br>
                                <span><i class="far fa-calendar-alt"></i> 21/01/2020</span>
                            </h5>
                        </div>
                    </div>
                    <div class="article seller-item">
                        <div class="sellers-img">
                            <a href="" class="product-block-img content-img clearfix">
                                <img src="img/tintucworkshop-Nobility6-20-120x86.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5>
                                <a href="">WORKSHOP: Trải Nghiệm Quý Tộc Cùng AEROCOOL Nobility</a><br>
                                <span><i class="far fa-calendar-alt"></i> 23/01/2020</span>
                            </h5>
                        </div>
                    </div>
                    <div class="article seller-item">
                        <div class="sellers-img">
                            <a href="" class="product-block-img content-img clearfix">
                                <img src="img/valorant-agents-players-350x250.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5>
                                <a href="">Soi cấu hình đề nghị và tối thiểu chơi Valorant: Nhẹ nhàng hơn bạn nghĩ !</a><br>
                                <span><i class="far fa-calendar-alt"></i> 15/03/2020</span>
                            </h5>
                        </div>
                    </div>
                    <!-- End Danh mục blog -->
                </div>
            </div>
        </article>
        <article class="right">
            <span class="header page">
                <h1>Tin công nghệ</h1>
            </span>
            <!-- Begin Nội dung blog -->
            <div class="news-content row">
                <div class="img-article">
                    <a href="https://news.hanoicomputer.vn/diem-benchmark-cua-rtx-3090-hon-rtx-2080-ti-den-30/"><img src="img/Điểm-benchmark-của-RTX-3090.png" alt="RTX" style="height: 200px;"></a>
                </div>
                <div class="content-artical">
                    <!-- Begin Nội dung bài viết -->
                    <h2 class="title-article">
                        <a href="https://news.hanoicomputer.vn/diem-benchmark-cua-rtx-3090-hon-rtx-2080-ti-den-30/">Điểm benchmark của RTX 3090 hơn RTX 2080 Ti đến 30%</a>
                    </h2>
                    <div class="body-content">
                        <ul class="date-post" style="padding-left: 0px;">
                            <li> 
                                <i class="far fa-clock"></i>
                                <p>  06/02/2020</p>
                            </li>
                        </ul>
                        <p>Không cần loằng ngoằng mà hãy xem ngay những con số. GPU bí ẩn đạt được số điểm 18.257 trong...</p>
                    </div >
                    <!-- End Nội dung bài viêt -->
                    <div class="XemTiep">
                        <a href="https://news.hanoicomputer.vn/diem-benchmark-cua-rtx-3090-hon-rtx-2080-ti-den-30/" style="font-style: italic; font-size: 13px; color: orange;">Xem tiếp >> </a>
                    </div>
                    <div class="postDetails">
                        <ul class="count-comment-blog" style="padding-left: 0px;">
                            <li>
                                <i class="far fa-newspaper"></i>
                                <a href="">Tin tức</a>
                            </li>
                            <li><a href="">Nguyễn Văn Thắng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news-content row">
                <div class="img-article">
                    <a href="https://news.hanoicomputer.vn/wwdc-2020-cho-doi-nhung-gi-tai-su-kien-quan-trong-nhat-cua-apple/"><img src="img/i-os-14-1592796064637.jpg" alt="ios14" style="height: 200px;"></a>
                </div>
                <div class="content-artical">
                    <!-- Begin Nội dung bài viết -->
                    <h2 class="title-article">
                        <a href="https://news.hanoicomputer.vn/wwdc-2020-cho-doi-nhung-gi-tai-su-kien-quan-trong-nhat-cua-apple/">WWDC 2020: Chờ đợi những gì tại sự kiện quan trọng nhất của Apple?</a>
                    </h2>
                    <div class="body-content">
                        <ul class="date-post" style="padding-left: 0px;">
                            <li> 
                                <i class="far fa-clock"></i>
                                <p>  06/02/2020</p>
                            </li>
                        </ul>
                        <p>0h rạng sáng mai (23/6), hội nghị WWDC 2020 của Apple sẽ chính thức diễn ra. Và đây sẽ là...</p>
                    </div >
                    <!-- End Nội dung bài viêt -->
                    <div class="XemTiep">
                        <a href="https://news.hanoicomputer.vn/wwdc-2020-cho-doi-nhung-gi-tai-su-kien-quan-trong-nhat-cua-apple/" style="font-style: italic; font-size: 13px; color: orange;">Xem tiếp >> </a>
                    </div>
                    <div class="postDetails">
                        <ul class="count-comment-blog" style="padding-left: 0px;">
                            <li>
                                <i class="far fa-newspaper"></i>
                                <a href="">Tin tức</a>
                            </li>
                            <li><a href="">Nguyễn Văn Thắng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news-content row">
                <div class="img-article">
                    <a href="https://news.hanoicomputer.vn/silverstone-gioi-thieu-milo-10-vo-case-mini-itx-thiet-ke-mo-dun/"><img src="img/Milo-10-Vỏ-case-Mini-ITX-thiết-kế-mô-đun-2 (1).jpg" alt="Acer" style="height: 200px;"></a>
                </div>
                <div class="content-artical">
                    <!-- Begin Nội dung bài viết -->
                    <h2 class="title-article">
                        <a href="https://news.hanoicomputer.vn/silverstone-gioi-thieu-milo-10-vo-case-mini-itx-thiet-ke-mo-dun/">SilverStone giới thiệu Milo 10 – Vỏ case Mini-ITX thiết kế mô-đun</a>
                    </h2>
                    <div class="body-content">
                        <ul class="date-post" style="padding-left: 0px;">
                            <li> 
                                <i class="far fa-clock"></i>
                                <p>  09/02/2020</p>
                            </li>
                        </ul>
                        <p>SilverStone giới thiệu Milo 10 là khung máy Mini-ITX siêu mô-đun, cho phép bạn không chỉ thay đổi linh kiện...</p>
                    </div >
                    <!-- End Nội dung bài viêt -->
                    <div class="XemTiep">
                        <a href="https://news.hanoicomputer.vn/silverstone-gioi-thieu-milo-10-vo-case-mini-itx-thiet-ke-mo-dun/" style="font-style: italic; font-size: 13px; color: orange;">Xem tiếp >> </a>
                    </div>
                    <div class="postDetails">
                        <ul class="count-comment-blog" style="padding-left: 0px;">
                            <li>
                                <i class="far fa-newspaper"></i>
                                <a href="">Tin tức</a>
                            </li>
                            <li><a href="">Nguyễn Văn Thắng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="pagination">
                <span class="page-node current">1</span>
                <a href="Tintức2.html" class="page-node">2</a>
                <a href="Tin tức.html" class="TrangSau">
                    <span> 
                        Xem Thêm
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </article>
    </section>
    <div class="clear-fix"></div>
    @endsection