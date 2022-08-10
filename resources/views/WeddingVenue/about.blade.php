@extends('MasterPage.master')
@section('content')


	<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/about/ab.jfif); ">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center">

						<h1>Our Story</h1>


					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="about section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive" src="images/about/home3.webp">
				</div>
				<div class="col-md-6">
					<h2 class="mt-40">The simple way to find wedding reception venues</h2>
					<p>Our website provides a wide variety of wedding venues that fit your vision and budget.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem,
						ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem
						dicta amet?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem,
						ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem
						dicta amet?</p>
					<a href="WeddiingVenue.halls" class="btn btn-main mt-20">Book Now</a>
				</div>
			
		</div>
	</section>

	<div class="container">


		<br />

		<div class="panel-group" id="accordion">
			<div class="faqHeader">General questions</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
							href="#collapseOne">What Is On A Wedding Venue Website?</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body">
						A wedding Venue website is really a hub for all the information about your wedding day. You will
						need to share important information with your guests such as dates and locations, travel and
						hotel options, registry information along with RSVP options as well. Many wedding websites will
						allow you to add as much information as you want or you can decide to have a very streamlined
						look.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
							href="#collapseTen">Is A Wedding Website Necessary?</a>
					</h4>
				</div>
				<div id="collapseTen" class="panel-collapse collapse">
					<div class="panel-body">
						Nothing is 100% necessary when it comes to planning a wedding but having a website is something
						that can make life easier for both the couple and the guests. With so many options available and
						a large number of companies offering both free and upgraded websites, there really is no reason
						not to create one. The pros of having a website are the ability to communicate important
						information with your guests and to keep track of registry and RSVP information.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
							href="#collapseEleven">How Do You Direct Guests To Your Wedding Website?</a>
					</h4>
				</div>
				<div id="collapseEleven" class="panel-collapse collapse">
					<div class="panel-body">
						There are several different ways you can direct guests to your website. The most popular way
						seems to be including the website information with your Save The Date card. Besides enclosing
						the information with your Save The Date you can also send out the website
						URL in an email to guests and add ict to your social media profiles.
					</div>
				</div>
			</div>

		
		</div>
	</div>

	<style>
		.panel-title{
			color: #feacc6;
		}
		.panel-body{
			color:gray;

		}

		.faqHeader {
			font-size: 27px;
			margin: 20px;
		}

		.panel-heading [data-toggle="collapse"]:after {
			font-family: 'Glyphicons Halflings';
			content: "e072";
			/* "play" icon */
			float: right;
			color:#feacc6;
			font-size: 18px;
			line-height: 22px;
			/* rotate "play" icon from > (right arrow) to down arrow */
			-webkit-transform: rotate(-90deg);
			-moz-transform: rotate(-90deg);
			-ms-transform: rotate(-90deg);
			-o-transform: rotate(-90deg);
			transform: rotate(-90deg);
		}

		.panel-heading [data-toggle="collapse"].collapsed:after {
			/* rotate "play" icon from > (right arrow) to ^ (up arrow) */
			-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			-o-transform: rotate(90deg);
			transform: rotate(90deg);
			color: #492323;
		}
	</style>

	<section class="team-members ">
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Team Members</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="team-member text-center">
						<img class="img-circle" src="images/team/team-1.jpg">
						<h4>Jonathon Andrew</h4>
						<p>Founder</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-member text-center">
						<img class="img-circle" src="images/team/team-2.jpg">
						<h4>Adipisci Velit</h4>
						<p>Developer</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-member text-center">
						<img class="img-circle" src="images/team/team-3.jpg">
						<h4>John Fexit</h4>
						<p>Shop Manager</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-member text-center">
						<img class="img-circle" src="images/team/team-1.jpg">
						<h4>John Fexit</h4>
						<p>Shop Manager</p>
					</div>
				</div>
			</div>
		</div>
	</section>





	@endsection