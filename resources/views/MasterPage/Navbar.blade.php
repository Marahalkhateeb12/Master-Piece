<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Wedding Venue</title>
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Constra HTML Template v1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />

	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="{{asset('plugins/themefisher-font/style.css')}}">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Animate css -->
	<link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">

	<!-- Main Stylesheet -->
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
		</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="body">

	<!-- Start Top Header Bar -->
	<section class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12 col-sm-4">
					<div class="contact-number">
						<i class="tf-ion-ios-email"></i>
						<span>weddingvenue@gmail.com</span>
					</div>
				</div>

				<div class="col-md-3 col-xs-12 col-sm-4">
					<div class="contact-number">
						<i class="tf-ion-ios-telephone"></i>
						<span>0962- 778888888</span>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-4">
					<div class="contact-number">
						<i class="tf-ion-ios-location"></i>
						<span>Irbid, Jordan</span>
					</div>
				</div>

				<div class="col-md-3 col-xs-12 col-sm-4">
					<ul class="top-menu text-right list-inline">
						<!-- Search -->
						<li class="dropdown search dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
									class="tf-ion-ios-search-strong"></i> Search</a>
							<ul class="dropdown-menu search-dropdown">
								<li>
									<form action="post"><input type="search" class="form-control"
											placeholder="Search..."></form>
								</li>
							</ul>
						</li><!-- / Search -->

						<!-- Languages -->
						<li class="commonSelect">
							<select class="form-control">
								<option>English</option>
								<option>Arabic</option>
							</select>
						</li><!-- / Languages -->

					</ul><!-- / .nav .navbar-nav .navbar-right -->
				</div>
			</div>
		</div>
	</section><!-- End Top Header Bar -->


	<!-- Main Menu Section -->
	<section class="menu">
		<nav class="navbar navigation">
			<div class="container">
				<div class="navbar-header">
					<h2 class="menu-title">Main Menu</h2>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false" aria-controls="navbar" >
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div><!-- / .navbar-header -->
				<div class="col-md-4 col-xs-12 col-sm-4">

					<div class="logo text-center">
						<a href="/">

						<img src="{{asset('images/logo.png')}}" width="200px" height="50px">
						</a>
					</div>
				</div>
				<!-- Navbar Links -->
				<div id="navbar" class="navbar-collapse collapse text-center">
					<ul class="nav navbar-nav">

						<!-- Home -->
						<li class="dropdown " style="font-weight: bold">
							<a href="/">Home</a>
						</li><!-- / Home -->


						<!-- Elements -->
						<li class="dropdown dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-delay="350" role="button" aria-haspopup="true" aria-expanded="false" style="font-weight: bold">Halls <span
									class="tf-ion-ios-arrow-down"></span></a>
							<div class="dropdown-menu">
								<div class="row">

									<!-- Basic -->
									<div class="col-lg-12 col-md-6 mb-sm-3">
										<ul>
											@foreach ($halls as $hal)
												
											
											<li style="font-weight: bold"><a href="{{route('hall' , $hal)}}">{{$hal->hall_name}}</a></li>
											@endforeach
											

										</ul>
									</div>



								</div><!-- / .row -->
							</div><!-- / .dropdown-menu -->
						</li><!-- / Elements -->
						<!-- About -->
						<li class="dropdown " style="font-weight: bold">
							<a href="/about">About Us</a>
						</li><!-- / About -->
						<!-- Contact -->
						<li class="dropdown " style="font-weight: bold">
							<a href="/contact">Contact Us</a>
						</li>
						<!-- / Contact -->
						<li>
						<div class="col-md-4 col-xs-12 col-sm-4">

							<div class="logo text-center">
								<button class="btn btn-main" type="button" style="margin-left: 100px; margin-top: 14px; background-color: #feacc6; color: white;" ><a style="color:white; text-decoration: none" href='/book'>Book Now</a></button>
							</div>
						</div>
					</li>
					
					</ul><!-- / .nav .navbar-nav -->
					
			
					
				</div>
			
				<!--/.navbar-collapse -->
			</div><!-- / .container -->
		</nav>	</section>