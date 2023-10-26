<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	@livewireStyles
</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
	<div class="mercado-clone-wrap">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels"></div>
	</div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item">
									<!-- 
									<a title="Hotline: (+123) 456 789" href="#"><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
									-->
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<!-- 

								@if(Route::has('login'))
								@auth
								@if(Auth::user()->utype === 'ADM')
								<li class="menu-item menu-item-has-children parent">
									<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency">
										<li class="menu-item">
											<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
										</li>
										<li class="menu-item">
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										</li>
										<form id="logout-form" method="POST" action="{{ route('logout') }}">
											@csrf
										</form>
									</ul>
								</li>
								@else
								<li class="menu-item menu-item-has-children parent">
									<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency">
										<li class="menu-item">
											<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
										</li>
										<li class="menu-item">
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										</li>
										<form id="logout-form" method="POST" action="{{ route('logout') }}">
											@csrf
										</form>
									</ul>
								</li>
								@endif
								@else
								<li class="menu-item"><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
								<li class="menu-item"><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
								@endif
								@endif
								-->
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">
						<div class="container">
							<a href="{{ url('/') }}" class="logo"><img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado" class="logo"></a>
						</div>
						<!-- 
									
						<div class="wrap-logo-top left-section">
							<a href="{{ url('/') }}" class="link-to-home" style="align-content: center;"><img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
						</div>
-->


						<div class="wrap-icon right-section">



							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Menú Principal">
								<li class="menu-item home-icon">
									<a href="{{ url('/') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/about-us') }}" class="link-term mercado-item-title">Acerca de Nosotros</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/shop') }}" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/cart') }}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/checkout') }}" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/contact-us') }}" class="link-term mercado-item-title">Contacto</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{ $slot }}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Todos los servicios</h4>
								<p class="fc-desc">tranquilidad y cercanía</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Equilibrio perfecto</h4>
								<p class="fc-desc">entre ciudad y campo</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Venta Directa</h4>
								<p class="fc-desc">trato con el desarrolador</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Seguridad</h4>
								<p class="fc-desc">barrio para vivir en familia</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contacto</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Bousquet Isidoro, San Martín, Mendoza</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">0261 774-9070</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">contacto@barriobousquet.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Recibir Noticias del Barrio</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Ingresar e-mail">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
								<div class="wrap-footer-item">
									<h3 class="item-header">Redes Sociales</h3>
									<div class="item-content">
										<div class="wrap-list-item social-network">
											<ul>
												<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
												<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3 class="item-header"></h3>



						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<!--End function info
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Brands</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								-->
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Información</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Returns</a></li>
												<li class="menu-item"><a href="#" class="link-term">Mapa del Sitio</a></li>
												<li class="menu-item"><a href="#" class="link-term">Specials</a></li>
												<li class="menu-item"><a href="#" class="link-term">Order History</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

						</div>



					</div>
				</div>


			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2021 NAB. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="{{ url('/about-us') }}" class="link-term">Acerca de Nosotros</a></li>
								<li class="menu-item"><a href="{{ url('/privacy-policy') }}" class="link-term">Política de Privacidad</a></li>
								<li class="menu-item"><a href="{{ url('/terms-conditions') }}" class="link-term">Términos y Condiciones</a></li>
								<li class="menu-item"><a href="{{ url('/return-policy') }}" class="link-term">Return Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	@livewireScripts
</body>

</html>