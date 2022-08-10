@extends('MasterPage.master')
@section('content')




	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h1 class="page-name">Booking</h1>
						<ol class="breadcrumb">
							<li><a href="indexx">Home</a></li>
							<li class="active">Booking</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="page-wrapper">
		<div class="checkout shopping">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="block billing-details">
							<h4 class="widget-title">Your Details</h4>
							<form class="checkout-form">
								<label for="full_name" class="co">Full Name</label>
								<div class="form-group">
									<input type="text" class="form-control" id="full_name" placeholder="Name" required>
								</div>
								<label for="user_address" class="co">Address</label>
								<div class="form-group">

									<input type="text" class="form-control" id="user_address" placeholder="Address" required>
								</div>
								<label for="email" class="co">Email</label>
								<div class="form-group">

									<input type="email" class="form-control" id="email" placeholder="Email" required>
								</div>
								<label for="mobile" class="co">Mobile Number </label>
								<div class="form-group">
									<input type="number" class="form-control" id="mobile" placeholder="Mobile Number" required>
								</div>
								<a href="confirmation" class="btn btn-main mt-20">Book</a>
							</form>
						</div>

					</div>
					<div class="col-md-4">
						<div class="product-checkout-details">
							<div class="block">
								<h4 class="widget-title">Booking Summary</h4>
								<div class="media product-card">
									<a class="pull-left" href="hall-single">
										<img class="media-object" src="images/halls/Hayat/2.jpg" alt="Image" />
									</a>
									<div class="media-body">
										<h4 class="media-heading"><a href="hall-single">Hayat Irbid Halls
												</a></h4>
										<p class="price">Aldahabia</p>
										<p class="price">30-6-2022 ///  8:00-10:00</p>
										
										
									</div>
								</div>
								<!-- <div class="discount-code">
									<p>Have a discount ? <a data-toggle="modal" data-target="#coupon-modal"
											href="#!">enter it here</a></p>
								</div>
								<ul class="summary-prices">
									<li>
										<span>Subtotal:</span>
										<span class="price">$190</span>
									</li>
									<li>
										<span>Shipping:</span>
										<span>Free</span>
									</li>
								</ul> -->
								<div class="summary-total">
									<span>Total</span>
									<span>1000 JOD</span>
									
								</div>
								<!-- <div class="verified-icon">
									<img src="images/shop/verified.png">
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<!-- <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Enter Coupon Code">
						</div>
						<button type="submit" class="btn btn-main">Apply Coupon</button>
					</form>
				</div>
			</div>
		</div>
	</div> -->

	@endsection