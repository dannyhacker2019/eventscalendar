<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to Upskill</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p>Welcome to Upskill</p>
						</div>
						<div class="col-xs-6 col-md-push-2 text-right">
							<p>
								<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="linkedin.com"><i class="icon-linkedin"></i></a></li>
									<li><a href="dribble.com><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="{{ route('frontend.home')}}">Upskill</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="{{ route('frontend.home')}}">Home</a></li>
								<li class="has-dropdown">
									<a href="{{ route('frontend.course')}}">Courses</a>
									<ul class="dropdown">
										<li><a href="courses-single.html">Courses Single</a></li>
										<li><a href="#">Mobile Apps</a></li>
										<li><a href="#">Website</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">WordPress</a></li>
									</ul>
								</li>
								<li><a href="{{ route('frontend.about')}}">About</a></li>
								<li><a href="">Events</a></li>
								<li><a href="{{ route('frontend.news')}}">News</a></li>
								<li><a href="{{ route('frontend.contact')}}">Contact</a></li>
								<li><a href="{{ route('user.register')}}">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
@yield('content')