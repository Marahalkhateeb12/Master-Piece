@extends('MasterPage.master')
@section('content')



	<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/about/c.jpg); ">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center">

						<h1>Contact US</h1>


					</div>
				</div>
			</div>
		</div>
	</div>


<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="{{route('contact.store')}}" role="form">
						@csrf
						<div class="form-group">
							<label for="name" class="co">Name</label><br>
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
						</div>
						
						<div class="form-group">
							<label for="email" class="co">Email</label><br>
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
						</div>
						
						
						
						<div class="form-group">
							<label for="message" class="co">Message</label><br>
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Send" >
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map">
						<div id="map"></div>
					</div>
				
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="https://www.facebook.com/themefisher"><i class="tf-ion-social-facebook" style="color: gray;"></i></a></li>
							<li><a href="https://www.twitter.com/themefisher"><i class="tf-ion-social-instagram" style="color: gray;"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-whatsapp" style="color: gray;"></i></a></li>
							
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
	

  





@endsection