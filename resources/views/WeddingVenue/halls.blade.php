@extends('MasterPage.master')
@section('content')



<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Halls</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">{{$hall->hall_name}}</li>
						
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="model-body" style="margin-bottom: 80px; background-color:rgb(244, 242, 242) ;">
		<div class="row" >
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="modal-image">
					<img class="img-responsive" id="hhh" src=" {{asset('public/adminImage/'.$hall->image)}}" alt="product-img" />
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="product-short-details">
					<h2 class="product-title" style="color:#feacc6 ;">{{$hall->hall_name}}</h2><hr/>
					<p class="product-short-description">
						{{$hall->hall_description}}
					</p>
					<p>Hours: {{$hall->hours}} </p>
				<p>Address: {{$hall->hall_address}} <small><a href=`{{$hall->location}}` style="color:#feacc6 ;">Go to Google Map</a></small></p>
				<p>Mobile : 0{{$hall->hall_mobile}}</p>
				</div>
			</div>
		</div>
	</div>

		<div class="row">
			@foreach ($subhalls as $subhall)
				
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						
						<img class="img-responsive" src=" {{asset('public/adminImage/'.$subhall->image1)}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<a href="{{route('singlehall',$subhall)}}">	<i class="tf-ion-ios-search-strong" style="color: white;"></i></a>
								</li>
								
								
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">{{$subhall->subhall_name}}</a></h4>
						{{-- <p class="price">Womens/Mens</p> --}}
					</div>
				</div>
			</div>
			@endforeach

			
		
	
</div></div></section>



@endsection