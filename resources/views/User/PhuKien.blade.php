@extends('layout')

@section('content')
<div class="wrap-breadcrumb">
    <div class="clearfix container">
        <div class="row main-header">							
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                <ol class="breadcrumb breadcrumb-arrows">
                    <li><a href="{{asset('/')}}" target="_self">Trang chủ</a></li>
                    <li><a href="/" target="_self">Danh mục</a></li>
                    <li class="active"><span>Tất cả sản phẩm</span></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="container content">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12 leftsidebar-col">
            <div class="group_sidebar">
                <div class="list-group navbar-inner">
                    <div class="mega-left-title btn-navbar title-hidden-sm">
                        <h3 class="sb-title">Danh mục</h3>
                    </div>
                    <ul class="nav" id="menu-blog">
                        <li class="first">
                            <a href="" title="Trang chủ"><span>Tai nghe</span></a>
                        </li>
                        <li>
                            <a href="" title="Giới thiệu"><span>Pin sạc dự phòng</span></a>
                        </li>
                        <li>
                            <a href="" title="Thực đơn"><span>Sạc, cáp</span></a>
                        </li>
                        <li class="current active">
                            <a href="" title="Tin tức"><span>Miếng dán màn hình</span></a>
                        </li>
                        <li>
                            <a href="" title="Đặt hàng"><span>Ốp lưng điện thoại</span></a>
                        </li>
                        <li>
                            <a href="" title="Đặt hàng"><span>Giá đỡ điện thoại</span></a>
                        </li>
                        <li>
                            <a href="" title="Đặt hàng"><span>Đế, móc điện thoại</span></a>
                        </li>
                    </ul>
                </div>
                <div class="list-group_l banner-left hidden-sm hidden-xs">
                    <a href=""><img src="img/quangcao4.png" alt=""></a>
                </div>
                <div class="list-group_2 navbar-product">
                    <div class="mega-left-title btn-navbar title-hidden-sm">
                        <h3 class="product-title">Sản phẩm nổi bật</h3>
                    </div>
                    <div class="article seller-item">
                        <div class="sellers-img">
                            <a href="" class="products-block-image content_img clearfix">
                                <img src="{{asset('img/tai-nghechup-tai-gaming-rapoo-vh520c-den--8-600x600.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-content has-sellers-img ">
                            <a href="">Tai nghe chụp tai Gaming Rapoo VH520C Đen</a><br>
                            <span class="price">590.000đ</span>
                        </div>
                    </div>
                    <div class="article seller-item">
                        <div class="sellers-img">
                            <a href="" class="products-block-image content_img clearfix">
                                <img src="{{asset('img/op-lung-galaxy-s21-ultra-nhua-deo-sliipa-jm-nude-1-600x600.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-content has-sellers-img ">
                            <a href="">Ốp lưng Galaxy S21 Ultra Nhựa dẻo Sliipa JM Nude</a><br>
                            <span class="price">35.000đ</span>
                        </div>
                    </div>
                    <div class="article seller-item">
                        <div class="sellers-img">
                            <a href="" class="products-block-image content_img clearfix">
                                <img src="{{asset('img/10000mah-ava-la-y65-con-trau-vang.jpg.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-content has-sellers-img ">
                            <a href="">Pin sạc dự phòng 10.000mAh AVA LA Y65 Con Trâu Vàng</a><br>
                            <span class="price">320.000đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="main-content">
                    <div class="col-md-12 hidden-sm hidden-xs">
                        <div class="sort-collection">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 title">
                                    <h1>Tất cả sản phẩm</h1>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sort">
                                    <div class="browse-tags">
                                        <span>Sắp xếp theo:</span>
                                        <span class="custom-dropdown custom-dropdown--white">
                                            <select class="sort-by custom-dropdown__select custom-dropdown__select--white">
                                                <option value="price-ascending">Giá: Tăng dần</option>
                                                <option value="price-descending">Giá: Giảm dần</option>
                                                <option value="title-ascending">Tên: A-Z</option>
                                                <option value="title-descending">Tên: Z-A</option>
                                                <option value="created-ascending">Cũ nhất</option>
                                                <option value="created-descending">Mới nhất</option>
                                                <option value="best-selling">Bán chạy nhất</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 content-product-list">
                        <div class="row product-list">
                            @foreach($PhuKiens as $PK)
                            <div class="col-md-4 col-sm-6 col-xs-12 pro-loop">
                                <div class="product-img">
                                    <a href="{{ route('CTPhuKien').'/'.$PK->id }}"><img src="{{asset('img'.'/'.$PK->HinhAnh)}}" alt=""></a>
                                    <div class="actionss">
                                        <div class="btn-cart-products">
                                            <a href="">
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="view-details">
                                            <a href="/products/bap-bo-uc-gia-tay" class="view-detail"> 
                                                <span><i class="fa fa-clone"> </i></span>
                                            </a>
                                        </div>
                                        <div class="btn-quickview-products">
                                            <a class="quickview" data-handle="/products/bap-bo-uc-gia-tay">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="{{ route('CTPhuKien').'/'.$PK->id }}">{{$PK-> TenSP}}</a></p>
                                <p><span>{{ number_format($PK->DonGia) }} đ</span></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        {{ $PhuKiens->links() }}
                    </div> 
                    <!-- <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div id="pagination" class="mt-5">
                            <span class="page-node current">1</span>
                            <a href="" class="page-node">2</a>
                            <a href="" class="page-node">3</a>
                            <a href="" class="TrangSau">
                                <span> 
                                    Trang sau
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- SCROLL TO TOP -->
    <div class="Scroll">
        <a href="#top" id="scrollToTop" title="Lên trên" style="display: block;"  onclick="scrollToTop();return false">
            <i class="fas fa-arrow-alt-circle-up"></i>
        </a>
    </div>
</section>

<div class="clear-fix"></div>
@endsection