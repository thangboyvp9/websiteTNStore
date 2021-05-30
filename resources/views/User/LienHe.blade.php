@extends('layout')
@section('content')
<div class="wrap-breadcrumb">
        <div class="clearfix container">
            <div class="row main-header">							
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li><a href="index.html" target="_self">Trang chủ</a></li>
                        <li class="active"><span>Liên Hệ</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="container content">
        <div class="row">
            <div class="col-md-12 col-xs-12" id="layout-page">
                <span class="header-contact header-page clearfix">
                    <h1>Liên hệ</h1>
                </span>
                <div class="content-contact content-page">
                    <div class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.761510080418!2d105.85751131492907!3d21.002194994060602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac09402e1fbb%3A0x8a38277c20d3c751!2zQ-G7rWEgSMOgbmcgRnJlc2ggRm9vZA!5e0!3m2!1svi!2s!4v1601650765905!5m2!1svi!2s" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12 contactFormWrapper" id="col-left ">
                            <h3>Viết nhận xét</h3>
                            <hr class="line-left">
                            <p>
                                Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .
                            </p>
                            <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
                                <input name="form_type" type="hidden" value="contact">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="form-group">
                                    <label for="contactFormName" class="sr-only">Tên</label>
                                    <input required="" type="text" id="contactFormName" class="form-control input-lg" name="contact[name]" placeholder="Tên của bạn" autocapitalize="words" value="">
                                </div>
                                <div class="form-group">
                                    <label for="contactFormEmail" class="sr-only">Email</label>
                                    <input required="" type="email" name="contact[email]" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                                </div>
                                <div class="form-group">
                                    <label for="contactFormMessage" class="sr-only">Nội dung</label>
                                    <textarea required="" rows="6" name="contact[body]" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg btn-rb" value="Gửi liên hệ">
                            </form>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 " id="col-right">
                            <h3>Chúng tôi ở đây</h3>
                            <hr class="line-right">
                            <h3 class="name-company">Fresh Food</h3>
                            <p>	Giải pháp bán hàng toàn diện từ website đến cửa hàng	</p>
                            <ul class="info-address">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span> 101B, Ki Ốt C3, Quỳnh Lôi, Hai Bà Trưng, Hà Nội</span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span> nguyencuson28102000@gmail.com</span>
                                </li>
                                
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span>0963104800</span>
                                </li>
                            </ul>
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