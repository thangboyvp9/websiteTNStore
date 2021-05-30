@extends('layout')

@section('content')
<div class="wrap-breadcrumb">
    <div class="clearfix container">
        <div class="row main-header">							
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                <ol class="breadcrumb breadcrumb-arrows">
                    <li><a href="index.html" target="_self">Trang chủ</a></li>
                    <li><a href="/" target="_self">Sản phẩm</a></li>
                    <li class="active"><span>Chi tiết sản phẩm</span></li>
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
                        <h3 class="sb-title">Cửa hàng còn hàng:</h3>
                    </div>
                    <ul class="nav" id="menu-blog">
                        <li class="first">
                            <a href="https://cellphones.com.vn/dia-chi-cua-hang#36" title="Trang chủ"><span>21A Hàng Bài, P. Hàng Bài, Q. Hoàn Kiếm</span></a>
                        </li>
                        <li>
                            <a href="https://cellphones.com.vn/dia-chi-cua-hang#100" title="Giới thiệu"><span>252 Ngô Gia Tự, Phường Đức Giang, Quận Long Biên, Hà Nội</span></a>
                        </li>
                        <li>
                            <a href="https://cellphones.com.vn/dia-chi-cua-hang#32" title="Thực đơn"><span>278-280 Nguyễn Văn Cừ, P. Ngọc Lâm, Q. Long Biên</span></a>
                        </li>
                        <li class="current active">
                            <a href="https://cellphones.com.vn/dia-chi-cua-hang#53" title="Tin tức"><span>160 Nguyễn Khánh Toàn, P. Quan Hoa, Q .Cầu Giấy</span></a>
                        </li>
                        <!-- <li>
                            <a href="" title="Đặt hàng"><span>Ốp lưng điện thoại</span></a>
                        </li>
                        <li>
                            <a href="" title="Đặt hàng"><span>Giá đỡ điện thoại</span></a>
                        </li>
                        <li>
                            <a href="" title="Đặt hàng"><span>Đế, móc điện thoại</span></a>
                        </li> -->
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
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div id="wrapper-detail" class="product-page">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div id="surround">
                            <img src="{{asset('img'.'/'.$PhuKien->HinhAnh)}}" title="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="product-title">
                            <h1>{{ $PhuKien->TenSP}}</h1>
                        </div>
                        <div class="product-price" id="price-preview">
                            <span>{{ number_format($PhuKien->DonGia)}} đ</span>
                        </div>
                        <form id="add-item-form"   class="variants clearfix">				
                            <div class="select clearfix">
                                <ul>
                                    <h2 style="color:red;">{{ $PhuKien->MaSP}}</h2>
                                    <li>{{ $PhuKien->MoTa}}</li><br>
                                    <!-- <div class="selector-wrapper">
                                        <label for="product-select-option-0">Kích thước</label>
                                        <span class="custom-dropdown custom-dropdown--white">
                                            <select class="single-option-selector custom-dropdown__select custom-dropdown__select--white" data-option="option1" id="product-select-option-0">
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="S">S</option>
                                                <option value="XL">XL</option>
                                            </select>
                                        </span>
                                    </div> -->
                                    <div class="selector-wrapper">
                                        <label for="product-select-option-1">Màu sắc</label>
                                        <span class="custom-dropdown custom-dropdown--white">
                                            <select class="single-option-selector custom-dropdown__select custom-dropdown__select--white" data-option="option2" id="product-select-option-1">
                                                <option value="Đen">Đen</option>
                                                <option value="Đen">Trắng</option>
                                            </select>
                                        </span>
                                    </div>
                                    <!-- <select id="product-select" name="id" style="display:none">
                                        <option value="1009682057">L / Tím - 20,500₫</option>
                                        <option value="1009682058">M / Tím - 20,500₫</option>
                                        <option value="1009682059">S / Tím - 20,500₫</option>
                                        <option value="1009682060">XL / Tím - 20,500₫</option>
                                    </select> -->
                                </div>
                                <div class="select-wrapper ">
                                    <label>Số lượng</label>
                                    <input id="quantity" type="number" name="quantity" min="1" value="1" class="tc item-quantity">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <a href="{{ route('addcart', ['id' => $PhuKien->id]) }}">
                                            <button type="button" value="" id="add-to-cart" class="btn-detail btn-color-add btn-min-width btn-mgt addtocart-modal" name="add">
                                                Thêm vào giỏ        
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">								
                                        <a href="{{ route('checkout') }}">
                                            <button type="button" value=""   id="buy-now" class="btn-detail btn-color-buy btn-min-width btn-mgt">
                                                Mua ngay
                                            </button>
                                        </a>
                                    </div>	
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                            <div role="tabpanel" class="product-comment">
                                
                                <ul class="nav visible-lg visible-md" role="tablist">
                                    <li role="presentation" class="active"><a data-spy="scroll" data-target="#mota" href="#mota" aria-controls="mota" role="tab">Mô tả sản phẩm</a></li>
                                    <li role="presentation">
                                        <a data-spy="scroll" href="#binhluan" aria-controls="binhluan" role="tab">Bình luận</a>
                                    </li>
                                    <li role="presentation">
                                        <a data-spy="scroll" href="#like" aria-controls="like" role="tab">Sản phẩm khác</a>
                                    </li>
                                </ul>
                                <div id="mota">
                                    <div class="product-description-wrapper">
                                        <p><h3>Thiết kế nhỏ gọn, phù hợp với nhiều kích cỡ tai</h3>
                                            Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL có kích thước nhỏ gọn chỉ nặng 4.1 g không hề nặng tai khi sử dụng lâu. Tai nghe tặng kèm 3 nút đệm tai với kích thước khác nhau giúp bạn dễ dàng lựa chọn phù hợp với tai tránh lỏng lẻo, rơi rớt.</p>
                                            <p><h3>Âm thanh rõ ràng, sâu lắng</h3>
                                                Màng loa của tai nghe có kích thước 7.2 mm cho âm bass các thêm dày và sâu, bạn có thể tận hưởng các bản nhạc EDM, Pop, Rock,... một cách trọn vẹn không bị nửa vời.</p>
                                                <p><h3>Bắt trọn âm thanh với công nghệ khử tiếng ồn DSP</h3>
                                                    Tai nghe Bluetooth Xiaomi sử dụng công nghệ lọc âm, khử ồn DSP. Công nghệ này sẽ phân tích và loại bỏ các tín hiệu nhiễu giúp bạn thưởng thức âm nhạc tuyệt vời, tập trung vào cuộc đàm thoại hơn. Nghe gọi dễ dàng với micro được tích hợp trên tai nghe.</p>
                                                    <p><h3>Yên tâm sử dụng với khả năng chống nước IPX4</h3>
                                                        Trước đây khi đi hồ bơi hay những ngày ẩm thấp, mưa rào bạn sẽ không sử dụng tai nghe vì lo lắng nó sẽ bị dính nước gây hỏng hóc không thể sử dụng được nữa, thì giờ đây bạn có thể yên tâm sử dụng bởi chiếc tai nghe Xiaomi này được trang bị công nghệ chống nước IPX4 có khả năng bảo vệ tai nghe trước những tia nước.</p>
                                                        <p><h3>Nghe nhạc thả ga, sạc đầy pin nhanh chóng</h3>
                                                            Khi sử dụng 2 tai nghe cùng lúc để nghe nhạc hay đàm thoại thời gian dùng khoảng 4 giờ, còn khi bạn chỉ dùng 1 bên tai nghe thì thời gian sử dụng là 5 giờ. Hộp sạc thời lượng pin 12 tiếng, tức là có thể sạc cho tai nghe được 3 lần. Khi sử dụng hết pin bạn có thể sạc đầy lại cho tai nghe trong 1.5 giờ, còn thời gian sạc đầy cho hộp sạc là 2 giờ.</p>
                                                            <p><h3>Kết nối không dây nhanh chóng, tương thích với nhiều thiết bị nhờ công nghệ Bluetooth 5.0</h3>
                                                                Tai nghe Bluetooth True Wireless Xiaomi sử dụng kết nối Bluetooth 5.0 cho phạm vi kết nối ổn định lên đến 10 m, tương thích với tất cả các thiết bị sử dụng hệ điều hành Android, Windows, iOS,...</p>
                                                                Khi bạn lấy tai nghe ra khỏi hộp sạc thì nó sẽ tự kết nối với thiết bị đã được ghép nối trước đó, giúp tiết kiệm thời gian thao tác lại từ đầu. Ngược lại khi bạn để tai nghe vào lại hộp sạc thì tai nghe sẽ tự động tắt.</p>
                                                                
                                                                <hr>
                                                                <p><strong> Cạnh ngoài của tai nghe được tích hợp nút bấm vật lý giúp bạn thức hiện các thao tác điều chỉnh nhanh chóng </strong></p> 
                                                                <p> 
                                                                    
                                                                    
                                                                </p>
                                                                <ul>
                                                                    <li>- Nhấn 1 cái để nghe/ cúp máy khi có cuộc gọi.</li><br>
                                                                    <li>- Bấm giữ 1 giây để từ chối cuộc gọi đến.</li><br>
                                                                    <li>- Nhấn để dừng/ phát khi bạn đang nghe nhạc.</li><br>
                                                                    <li>- Nhấn đúp để bật trợ lý giọng nói.</li><br>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="binhluan">
                                                            <div class="title-bl">
                                                                <h2>Bình luận</h2>
                                                            </div>
                                                            <div class="product-comment-fb">
                                                                <div class="fb-comments" data-href="https://www.facebook.com/nguyenvanthangvip" data-width="" data-numposts="5"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 list-like">
                                            <div id="like">
                                                <div class="title-like">
                                                    <h2>Sản phẩm khác</h2>
                                                </div>
                                                <div class="row product-list">
                                                    <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                                        <div class="product-block product-resize fixheight" style="height: 262px;">
                                                            <div class="product-img image-resize view view-third">
                                                                <a href="">
                                                                    <img src="{{asset('img/ep-rapoo-ep28-den-ava-600x600.jpg')}}" alt="">
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
                                                            <div class="product-detail clearfix">
                                                                <h3 class="pro-name">
                                                                    <a href="">Tai nghe EP Rapoo EP28 Đen </a>
                                                                </h3>
                                                                <div class="pro-prices">
                                                                    <p class="pro-price">179,000 đ</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                                        <div class="product-block product-resize fixheight" style="height: 262px;">
                                                            <div class="product-img image-resize view view-third">
                                                                <a href="">
                                                                    <img src="{{asset('img/bluetooth-mozard-k8-ava-600x600.jpg')}}" alt="">
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
                                                            <div class="product-detail clearfix">
                                                                <h3 class="pro-name">
                                                                    <a href="">Tai nghe Bluetooth Mozard K8</a>
                                                                </h3>
                                                                <div class="pro-prices">
                                                                    <p class="pro-price">360,000 đ</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                                        <div class="product-block product-resize fixheight" style="height: 262px;">
                                                            <div class="product-img image-resize view view-third">
                                                                <a href="">
                                                                    <img src="{{asset('img/tai-nghechup-tai-gaming-rapoo-vh520c-den--8-600x600.jpg')}}" alt="">
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
                                                            <div class="product-detail clearfix">
                                                                <h3 class="pro-name">
                                                                    <a href="">Tai nghe chụp tai Gaming Rapoo VH520C Đen</a>
                                                                </h3>
                                                                <div class="pro-prices">
                                                                    <p class="pro-price">599,000 đ</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                                        <div class="product-block product-resize fixheight" style="height: 262px;">
                                                            <div class="product-img image-resize view view-third">
                                                                <a href="">
                                                                    <img src="{{asset('img/Bluetooth-Jabra-Talk.jpg')}}" alt="">
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
                                                            <div class="product-detail clearfix">
                                                                <h3 class="pro-name">
                                                                    <a href="">Tai nghe Bluetooth Jabra Talk 15 Đen</a>
                                                                </h3>
                                                                <div class="pro-prices">
                                                                    <p class="pro-price">890,000 đ</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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