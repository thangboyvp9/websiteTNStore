@extends('layout')
@section('content')


<header>
<div class="header-banner">           
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('img/slide1.jpg')}}" alt="First slide" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/slide2.jpg')}}" alt="Second slide" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/slide3.jpg')}}" alt="Third slide" style="width:100%;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
</header>

<!-- PHẦN NỘI DUNG -->

<section class="content container">
        <div class="row">
            <div class="content_SanPham">
                <aside class="styled_header  use_icon ">
                    <h3>Sản phẩm nổi bật</h3>
                    <span class="icon"><img src="img/icon_featured.jpg" alt="Newest trends"></span>
                </aside>
                
                <article class="container info_SanPham">
                    <div class="row">
                    @foreach($PhuKien as $PhuKien)
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href="{{ route('CTPhuKien').'/'.$PhuKien->id }}">
                                    <img src="{{asset('img'.'/'.$PhuKien->HinhAnh)}}" alt="">
                                </a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="{{ route('addcart', ['id' => $PhuKien->id]) }}">
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
                            <p><a href="{{ route('CTPhuKien').'/'.$PhuKien->id }}">{{$PhuKien->TenSP}}</a></p>
                            <p><span>{{ number_format($PhuKien->DonGia) }} đ</span></p>
                        </div>
                        @endforeach
                        <!-- <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href="BapCaiTim.html">
                                    <img src="img/PhuKien/10000mah-ava-la-y65-con-trau-vang.jpg" alt="">
                                </a>
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
                            <p><a href="BapCaiTim.html">Pin sạc dự phòng 10.000mAh AVA LA Y65 Con Trâu Vàng</a></p>
                            <p><span>280.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href="">
                                    <img src="img/PhuKien/adaptersạctypecpd25wsamsungep-ta800nw.jpg" alt="">
                                </a>
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
                            <p><a href="">Adapter Sạc Type C PD 25W Samsung EP-TA800NW Trắng</a></p>
                            <p><span>490.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href="PhoBo.html">
                                    <img src="img/PhuKien/op-lung-oppo-a15-nhua-deo-nake-slim-jm-nude.jpg" alt="Bí Ngòi Xanh">
                                </a>
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
                            <p><a href="PhoBo.html">Ốp lưng OPPO A15 Nhựa dẻo Nake slim JM Nude</a></p>
                            <p><span>49.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href="">
                                    <img src="img/PhuKien/mieng-dan-full-man-hinh-ta-sht31-galaxy-s21-ultra.jpg" alt="">
                                </a>
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
                            <p><a href="ChaCa.html">Miếng dán full màn hình TA SHT31 Galaxy S21 Ultra</a></p>
                            <p><span>100.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href="BanhCuon.html"> <img src="img/PhuKien/bo-2-moc-dien-thoai-osmia-ck-crs10-meo-ca-heo-xanhava.jpg" alt="Cá ba sa"></a>
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
                            <p><a href="BanhCuon.html">Bộ 2 móc điện thoại OSMIA CK-CRS10 Mèo cá heo xanh</a></p>
                            <p><span>30.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href=""> <img src="img/PhuKien/gay-chup-anh-bluetooth-tripod-xmobile-k06-den-1.jpg" alt="Cá ba sa phi lê"></a>
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
                            <p><a href="">Gậy chụp ảnh Bluetooth Tripod Xmobile K06 Đen</a></p>
                            <p><span>150.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 San-Pham">
                            <div class="product-img">
                                <a href=""> <img src="img/PhuKien/de-dien-thoai-xe-hoi-osmia-ck-ch4-xam-1-600x600.jpg" alt="Cà chua Đà Lạt"></a>
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
                            <p><a href="">Đế điện thoại xe hơi OSMIA CK-CH4 Xám</a></p>
                            <p><span>60.000 đ</span></p>
                        </div> -->
                    </div>
                </article>
                <article class="XemThem">
                    <a href=""><button class="btn-outline-success btn-lg">Xem Thêm</button></a> 
                </article>
            </div>
            
            <div class="col-sm-12 quangcao">
                <img src="" alt="" style="width: 100%">
            </div>
            
            <!-- PHẦN SẢN PHẨM MỚI-->
            <div class="content_Moi">
                <aside class="styled_header  use_icon ">
                    <h3>Sản phẩm mới</h3>
                    <span class="icon"><img src="img/icon_sale.jpg" alt="Newest trends"></span>
                </aside>
                <article class="container info_Moi">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 Moi">
                            <div class="product-img">
                                <a href=""><img src="img/PhuKien/bo-2-moc-dien-thoai-osmia-ck-crs10-meo-ca-heo-xanhava.jpg" alt=""></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Bộ 2 móc điện thoại OSMIA CK-CRS10 Mèo cá heo xanh</a></p>
                            <p><span>30.000 đ</span></p>
                            
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 Moi">
                            <div class="product-img">
                                <a href=""> <img src="img/PhuKien/mieng-dan-full-man-hinh-ta-sht31-galaxy-s21-ultra.jpg" alt=""></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Miếng dán full màn hình TA SHT31 Galaxy S21 Ultra</a></p>
                            <p><span>20.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 Moi">
                            <div class="product-img">
                                <a href=""> <img src="img/PhuKien/de-dien-thoai-xe-hoi-osmia-ck-ch4-xam-1-600x600.jpg" alt=""></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Đế điện thoại xe hơi OSMIA CK-CH4 Xám</a></p>
                            <p><span>60.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 Moi">
                            <div class="product-img">
                                <a href=""> <img src="img/PhuKien/bluetooth-rapoo-s150-den.jpg" alt=""></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Tai nghe Bluetooth Rapoo S150 Đen</a></p>
                            <p><span>459.000 đ</span></p>
                        </div>
                    </div>
                </article>
                <article class="XemThem">
                    <a href=""><button class="btn-outline-success btn-lg">Xem Thêm</button></a> 
                </article>
            </div>
            
            <!-- PHẦN KHUYẾN MÃI -->
            <div class="content_KhuyenMai">
                <aside class="styled_header use_icon ">
                    <h3>Sản phẩm khuyến mãi</h3>
                    <span class="icon"><img src="img/icon_sale.jpg" alt="Newest trends"></span>
                </aside>
                <article class="container info_KhuyenMai">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 KhuyenMai">
                            <div class="product-sale">
                                <span><label class="sale-lb">- </label> 22%</span>
                            </div>
                            <div class="product-img">
                                <a href=""><img src="img/PhuKien/gay-chup-anh-bluetooth-tripod-xmobile-k06-den-1.jpg" alt="Ổi lê Đài Loan"></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="name"><a href="">Gậy chụp ảnh Bluetooth Tripod Xmobile K06 Đen</a></p> 
                            <p class="price"><span>30.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 KhuyenMai">
                            <div class="product-sale">
                                <span><label class="sale-lb">- </label> 15%</span>
                            </div>
                            <div class="product-img">
                                <a href="">
                                    <img src="img/PhuKien/op-lung-oppo-a15-nhua-deo-nake-slim-jm-nude.jpg" alt="">
                                </a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="name"><a href="">Ốp lưng OPPO A15 Nhựa dẻo Nake slim JM Nude</a></p>
                            <p class="price"><span>49.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 KhuyenMai">
                            <div class="product-sale">
                                <span><label class="sale-lb">- </label> 20%</span>
                            </div>
                            <div class="product-img">
                                <a href=""><img src="img/PhuKien/10000mah-ava-la-y65-con-trau-vang.jpg" alt=""></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="name"><a href="">Pin sạc dự phòng 10.000mAh AVA LA Y65 Con Trâu Vàng</a></p>
                            <p class="price"><span>280.000 đ</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 KhuyenMai">
                            <div class="product-sale">
                                <span><label class="sale-lb">- </label> 10%</span>
                            </div>
                            <div class="product-img">
                                <a href=""><img src="img/PhuKien/adaptersạctypecpd25wsamsungep-ta800nw.jpg" alt=""></a>
                                <div class="actionss">
                                    <div class="btn-cart-products">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="view-details">
                                        <a href="" class="view-detail"> 
                                            <span><i class="fa fa-clone"> </i></span>
                                        </a>
                                    </div>
                                    <div class="btn-quickview-products">
                                        <a class="quickview" data-handle="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="name"><a href="">Adapter Sạc Type C PD 25W Samsung EP-TA800NW Trắng</a></p>
                            <p class="price"><span>490.000 đ</span></p>
                        </div>
                    </div>
                </article>
                <article class="XemThem">
                    <a href=""><button class="btn-outline-success btn-lg">Xem Thêm</button></a> 
                </article>
            </div>
        </div>
      
       
            <div class="row">
                <div class="col-xs-12 col-sm-6 home-category-item-1">
                    <div class="block-home-category">
                        <a href=""><img src="{{asset('img/news.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 home-category-item-2">
                    <div class="block-home-category">
                        <a href=""><img src="{{asset('img/news1.png')}}" alt=""></a>
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