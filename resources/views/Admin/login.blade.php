<!--Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Website TNS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{asset('login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- /css files -->
	
	<!-- online fonts -->
	<link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
	<!-- online fonts -->
	
	<body>
		<div class="container demo-1">
			<div class="content">
				
				<div id="large-header" class="large-header">
					<h1>Website ThangNguyenTNStore</h1>
					<div class="main-agileits">
						<!--form-stars-here-->
						<div class="form-w3-agile">
							<h2>Đăng nhập ngay</h2>
							<?php
								$message = Session::get('message');
								if($message){
									echo '<span class="text-alert" style="color: red">'.$message.'</span>';
									Session::put('message',null);
								}
							?>
							<form action="{{ route('signin') }}" method="post">
								@csrf
								<div class="form-sub-w3">
									<input type="text" name="username" placeholder="Tài Khoản " required="" />
									<div class="icon-w3">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password" placeholder="Mật Khẩu" required="" />
									<div class="icon-w3">
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
									</div>
								</div>
								<p class="p-bottom-w3ls">Bạn quên pass?<a class href="#"> Bấm vô</a></p>
								<p class="p-bottom-w3ls1">Bạn chưa có ?<a class href="#"> Tạo ngay</a></p>
								<div class="clear"></div>
								<div class="submit-w3l">
									<input type="submit" value="Đăng nhập">
								</div>
							</form>
							<div class="social w3layouts">
								<div class="heading">
									<h5>Hoặc đăng nhập với</h5>
									<div class="clear"></div>
								</div>
								<div class="icons">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!--//form-ends-here-->
					</div><!-- copyright -->
					<div class="copyright w3-agile">
						<p> © 2021 Clean Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
					</div>
					<!-- //copyright --> 
				</div>
			</div>
		</div>	
		
	</body>
	</html>