
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
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
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
							<li><a href="{{ route('frontend.home')}}">Events</a></li>
							<li><a href="{{ route('frontend.news')}}">News</a></li>
							<li><a href="{{ route('frontend.contact')}}">Contact</a></li>
							<li><a href="{{ route('user.register')}}">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>