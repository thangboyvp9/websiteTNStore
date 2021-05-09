<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ TNStore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/SanPham.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/CTSanPham.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/GioHang.css')}}">
    <script src="./script/script.js"></script>
    <link rel="stylesheet" href="{{asset('./font/fontawesome-free-5.13.0/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script async type="text/javascript" src="https://panel.chatcompose.com/static/EN/global/export/js\main.dec259c7.js" user="SonNguyen"></script>  
    <div id="fb-root"></div>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="ohfNLmfW"></script></head>
<body>
    <header>
        <div class=" container header-top">
            <div class="row">
                <div class="col-sm-4 header-logo">
                    <img src="{{asset('img/logo1.png')}}" alt="">
                </div>
                <div class="col-sm-8 header-info">
                    <div class="header-cart">
                        <a href="{{route('cart.index')}}">
                            <span class="icon-start">
                                <img src="{{asset('img/icon-cart.png')}}" alt="">
                            </span>
                            <span class="cart-number" >{{ Cart::count() }}</span>
                        </a>
                        
                        <!-- <div class="cart-view clearfix">
                            <table id="clone-item-cart" class="table-clone-cart">
                                <tbody>
                                    <tr class="item_2 hidden">
                                        <td class="img">
                                            <a href="" title=""><img src="" alt=""></a>
                                        </td>
                                        <td>
                                            <a class="pro-title-view" href="" title=""></a>
                                            <span class="variant"></span>	
                                            <span class="pro-quantity-view"></span>
                                            <span class="pro-price-view"></span>
                                            <span class="remove_link remove-cart"></span>				
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                            <table id="cart-view">
                                
                                <tbody>
                                    <tr>
                                        <td>Hiện chưa có sản phẩm</td>								
                                    </tr>
                                </tbody>
                            </table>
                            <span class="line"></span>
                            <table class="table-total">
                                <tbody>
                                    <tr>
                                        <td class="text-left">TỔNG TIỀN:</td>
                                        <td class="text-right" id="total-view-cart">0₫</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/cart" class="linktocart">Xem giỏ hàng</a></td>
                                        <td><a href="/checkout" class="linktocheckout">Thanh toán</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="header-subnav">
                        <ul>
                            <li><i class="fas fa-phone-alt"></i> 1900.636.099</li>
                            <li><a href="SignUp.html">ĐĂNG KÝ</a></li>
                            <li><a href="{{ route('/login/index') }}">ĐĂNG NHẬP</a></li>
                        </ul>
                        <p>Miễn phí vận chuyển <span>ĐƠN HÀNG TRÊN 900K</span> </p>    
                    </div>
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ebebeb; width: 100%;"></div>
        @include('layouts.menutop')
    </header>
    
    @yield('content')
    
    <!-- PHẦN FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <section class="col-sm-6 col-md-3 col-xs-12 clear-sm column-item">
                    <h3>Thời gian</h3>
                    <hr>
                    <div class="footer-block-content">
                        <ul>
                            <li>
                                <span class="day">Thứ 2</span>
                                <span class="hour">8:00 - 21:00</span>
                            </li>
                            <li>
                                <span class="day">Thứ 3</span>
                                <span class="hour">8:00 - 21:00</span>
                            </li>
                            <li>
                                <span class="day">Thứ 4</span>
                                <span class="hour">8:00 - 21:00</span>
                            </li>
                            <li>
                                <span class="day">Thứ 5</span>
                                <span class="hour">8:00 - 21:00</span>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="col-sm-6 col-md-2 col-xs-12 clear-sm column-item">
                    <h3>Thông tin</h3>
                    <hr>
                    <ul class="inner">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="SanPham.html">Sản phẩm</a></li>
                        <li><a href="GioiThieu.html">Giới thiệu</a></li>
                        <li><a href="TinTuc.html">Tin tức</a></li>
                        <li><a href="LienHe.html">Liên hệ</a></li>		
                    </ul>
                </section>
                <section class="col-sm-6 col-md-4 col-xs-12 clear-sm column-item">
                    <h3>Liên hệ</h3>
                    <hr>
                    <div class="footer-block">
                        <ul>
                            <li>
                                <i class="fas fa-home"></i>101B, Ki Ốt C3, Quỳnh Lôi, Hai Bà Trưng, Hà Nội
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i> 
                                Nguyenvanthanghn44@gmail.com                           
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i> 
                                0337513433
                            </li>
                        </ul>
                    </div>
                    <div id="widget-social" class="social-icons">
                        <ul class="list-inline">
                            <li class="li-social facebook-social">
                                <a target="_blank" href="#" class="social-wrapper facebook" title="Facebook">
                                    <span class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="li-social youtube-social">
                                <a target="_blank" href="#" class="social-wrapper youtube" title="Youtube">
                                    <span class="social-icon">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="li-social google-social">
                                <a target="_blank" href="#" class="social-wrapper google-plus" title="Google">
                                    <span class="social-icon">
                                        <i class="fab fa-google-plus-g"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="li-social twitter-social">
                                <a target="_blank"  href="#" class="social-wrapper twitter" title="Twitter">
                                    <span class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="li-social instagram-social">
                                <a target="_blank"  href="#" class="social-wrapper instagram" title="Instagram">
                                    <span class="social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="li-social message-social">
                                <a target="_blank"  href="#" class="social-wrapper message" title="Message">
                                    <span class="social-icon">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="col-sm-6 col-md-3 col-xs-12 clear-sm column-item">
                    <h3>Gửi liên hệ</h3>
                    <hr>
                    <div class="footer-block">
                        <form name="formLienHe">
                            <div class="form-wraper">
                                <ul class="form-list">
                                    <li class="feilds">
                                        <div class="feild">
                                            <div class="input-box">
                                                <input type="text" name="txtTen" id="txtTen" placeholder="Tên Của Bạn...">
                                            </div>
                                        </div>
                                        <div class="feild">
                                            <div class="input-box">
                                                <input type="email" name="contact[email]" id="email" placeholder="Email của bạn...">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wide feild">
                                        <div class="input-box">
                                            <textarea name="contact[body]" class="BinhLuan" id="txtBinhLuan" cols="10" rows="7" placeholder="Viết bình luận..."></textarea>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="buttons-set">
                                <button type="submit" title="Send" class="button" onclick="KiemTra()">
                                    <span>Gửi</span>
                                </button>
                                <button type="reset" class="button" value="Reset">
                                    <span>Hủy</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="clear-fix"></div>
        <div class="footer__Copyright">
            <span >Copyright by &copy; 2021 NguyenVanThang</span><br>
            <span>Nguyenvanthanghn44@gmail.com</span>
        </div>
    </footer>
</body>
</html>