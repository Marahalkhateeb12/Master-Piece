@extends('MasterPage.master')
@section('content')


	<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider5.png); ">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center">
						
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The simple way to find Wedding 
							<br> reception venues</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="halls">Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slide.jpg);  width: 100%;
		object-fit: cover;
		height: 100%;">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-left">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"></p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Helping you plan your 
							<br> special day</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="halls">Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item th-fullpage hero-area" style="background-image: url(https://th.bing.com/th/id/R.9ccf5bb3216a82be0effdf169b3f08c2?rik=PsZre%2fz8hCHlCg&riu=http%3a%2f%2fwww.atlaseventrental.com%2fwp-content%2fuploads%2f2014%2f10%2fGRA_3296.jpg&ehk=5JIixPt3qcsTOKPIduV7ZyefnpCy3J34OmeBH90tsQA%3d&risl=&pid=ImgRaw&r=0);  width: 100%;
		object-fit: cover;
		height: 100%;">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-left">
					
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Make your wedding unique and 
							<br> unforgettable with us</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="halls">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="product-category section">
		<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2 class="mt-40">The simple way to find wedding reception venues</h2>
			<p>Our website provides a wide variety of wedding venues that fit your vision and budget.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
			<a href="about" class="btn btn-main mt-20 ">Read More</a>
		</div>
		<div class="col-md-6">
			<img class="img-responsive" src="images/home/home3.webp">
		</div>
		
	</div></div>
</section>
<section class="product-category section" style="padding-top: 35px ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2 style="font-weight: bold ">Our Services</h2>
				</div>
			</div>
		   
		</div>
   
	<div class="row">

		<div class="col-md-6 col-lg-4 pb-5">
			<div class="h-100 py-5 services-icon-wap shadow">
				<div class="h1 text-center" style="color: gray"><i class="	glyphicon glyphicon-search"></i></div>
				<h2 class="h5 mt-4 text-center">Search Halls</h2>
				<h3 class="h5 mt-4 text-center">explore hh of Wedding Halls </h3>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 pb-5">
			<div class="h-100 py-5 services-icon-wap shadow">
				<div class="h1 text-center" style="color: gray"><i class="a	glyphicon glyphicon-edit" ></i></div>
				<h2 class="h5 mt-4 text-center">Book Hall</h2>
				<h3 class="h5 mt-4 text-center">Locate your Wedding Hall and Book it from home </h3>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 pb-5">
			<div class="h-100 py-5 services-icon-wap shadow">
				<div class="h1 text-center" style="color: gray"><i class="	glyphicon glyphicon-time"></i></div>
				{{-- <h2 class="h5 mt-4 text-center">Reserve</h2> --}}
				<h2 class="h5 mt-4 text-center">Economize</h2>
				
				<h4 class="h5 mt-4 text-center">Save your Time</h4>
			</div>
		</div>

	   
	</div> </div>
</section>
	<section class="product-category section" style="padding-top: 35px ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title text-center">
						<h2 style="font-weight: bold ">Our Halls</h2>
					</div>
				</div>
				@foreach ($halls as $hall)
					
				
				<div class="col-md-4">
					<div class="category-box">
						<a href="{{route('hall' , $hall)}}">
							<img src=" {{asset('public/adminImage/'.$hall->image);}}" alt={{$hall->hall_name}}/>
							<div class="content">
								<h3>{{$hall->hall_name}}</h3>
								
							</div>
						</a>
					</div>
					
				</div>
				@endforeach
			
			
			</div>
		</div>
	</section>


    <!-- Start Section -->
	

	<section class="products section bg-gray" style="padding-top: 35px ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title text-center">
						<h2 style="font-weight: bold ">Latest Halls</h2>
					</div>
				</div>
			</div>
			<div class="row">
				
@foreach ($subHalls as $subHall)
	

				<div class="col-md-3">
					<div class="product-item">
						<div class="product-thumb">
							<img class="img-responsive" src={{asset('public/adminImage/'.$subHall->image1);}} alt="product-img" />
							<div class="preview-meta">
								<ul>
									<li>
										<span data-toggle="modal" data-target="#product-modal">
											<a href="hall-single">	<i class="glyphicon glyphicon-eye-open"></i></a>
										</span>
									</li>
									
									
								</ul>
							</div>
						</div>
						<div class="product-content">
							<h4><a href="hall-single">{{$hall->hall_name}}</a></h4>
							<p class="price">{{$subHall->subhall_name}}</p>
						</div>
					</div>
				</div>
				@endforeach
			
				
				<button
				type="button"
				class="btn btn-danger btn-floating btn-lg"
				id="btn-back-to-top"
				style="border-radius: 50%;"
				>
		  <i class="glyphicon glyphicon-chevron-up" ></i>
		</button>
			
			</div>
		</div>
	</section>


	<!--
Start Call To Action
==================================== -->
	<section class="call-to-action bg-gray section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title">
						<h2 style="font-weight: bold ">SUBSCRIBE TO NEWSLETTER</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam
							impedit ut sequi. Minus facilis vitae excepturi sit laboriosam.</p>
					</div>
					<div class="col-lg-6 col-md-offset-3">
						<div class="input-group subscription-form">
							<input type="text" class="form-control" placeholder="Enter Your Email Address">
							<span class="input-group-btn">
								<button class="btn btn-main" type="button" style="margin-left: 10px;">Subscribe Now!</button>
							</span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->

				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	

@endsection
   


