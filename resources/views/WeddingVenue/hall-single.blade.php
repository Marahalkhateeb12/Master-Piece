@extends('MasterPage.mast')
@section('content')
<style>
    .mySlides {display:none;}
    </style>
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">{{ $subhall->subhall_name }}</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-2.html">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span>Halls > {{ $subhall->subhall_name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white overflow-hidden clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <div class="ttm-single-product-details">
                            <div class="ttm-single-product-info clearfix">
                                <div class="product-gallery images">
                                    <div class="w3-content w3-display-container">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image1)}}" style="width:100%">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image2)}}" style="width:100%">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image3)}}" style="width:100%">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image4)}}" style="width:100%">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image5)}}" style="width:100%">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image6)}}" style="width:100%">
                                        <img class="mySlides" src="{{asset('public/adminImage/'.$subhall->image7)}}" style="width:100%">
                                      
                                        <button class="w3-button w3-black w3-display-left" style="background-color: #eef5f7" onclick="plusDivs(-1)">&#10094;</button>
                                        <button class="w3-button w3-black w3-display-right" style="background-color: #eef5f7"  onclick="plusDivs(1)">&#10095;</button>
                                      </div>
                                </div>
                                <div class="summary entry-summary">
                                    <h3 class="singel_product_title">{{ $subhall->subhall_name }}</h3>

                                    <p class="price">
                                        <span class="Price-amount amount">
                                            <span class="Price-currencySymbol">
                                            </span>
                                    </p>
                                    <div class="product-details__short-description">
                                        <p>{{ $subhall->subhall_description }}.</p>
                                    </div>
                                    {{-- <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                    <div class="quantity"><label class="screen-reader-text">Quantity</label>
                                        <input type="number" id="quantity" class="form-control qty text border" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
                                    </div>
                                    <button id="go" name="add-to-cart" type="submit" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-dark" title="Submit now">Add to cart</button>
                                </form> --}}
                                    <div class="product_meta">
                                        <div class="sku_wrapper">
                                            <span>Men's Hall Capacity: </span>
                                            <a href="#" rel="tag">{{ $subhall->number_of_people_M }} Person</a>
                                        </div>
                                        <span class="posted_in">Women's Hall Capacity:
                                            <a href="#">{{ $subhall->number_of_people_W }} Person</a>
                                        </span>
                                        <span class="posted_in">Size:
                                            <a href="#">{{ $subhall->area }} m^2</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">Services</a></li>
                                    <li class="tab"><a href="#">Additional Services</a></li>
                                    <li class="tab"><a href="#">Book</a></li>
                                </ul>
                                <div class="content-tab ttm-bgcolor-white">
                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <h2>Services</h2>
                                        @foreach ($baseService as $base)
                                            <div class="col-sm-6">
                                                <div
                                                    class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                                    <div class="featured-icon">
                                                        <div
                                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                            <i class="ti ti-medall"></i>
                                                        </div>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h6>{{ $base->Service_name }}</h6>
                                                        </div>
                                                        {{-- <div class="featured-desc">
                                                    <p>Quickly productivate just in
                                                        time strategic theme.</p>
                                                </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Additional information</h2>
                                        @foreach ($addServices as $add)
                                            <div class="col-sm-6">
                                                <div
                                                    class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                                    <div class="featured-icon">
                                                        <div
                                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                            <i class="ti-bookmark-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h6>{{ $add->service_description }}</h6>
                                                        </div>
                                                        <div class="featured-desc">
                                                            <p>Price :
                                                                {{ $add->service_price }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">Book Now</h2>

                                            </div>
                                            <div id="review_form_wrapper">
                                                <div class="comment-respond">

                                                    <form action="{{route('checkAndBook',[$subhall,1,2])}}" method="post" id="commentform"
                                                        class="comment-form">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Date</label>
                                                                    <input name="date" type="date" min="2022-09-01"
                                                                        max="2022-09-30" width="30px" placeholder=""
                                                                        required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Time</label><br>
                                                                    <select class="form-select" name="time">
                                                                        <option selected>Choose Time...</option>
                                                                        <option value="4:00-6:00">4:00-6:00</option>
                                                                        <option value="6:00-8:00">6:00-8:00</option>
                                                                        <option value="8:00-10:00">8:00-10:00</option>
                                                                        <option value="10:00-12:00">10:00-12:00</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group text-left mt-30">
                                                                    <button type="submit" id="submit"
                                                                        class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-dark"
                                                                        value="">
                                                                        Check 
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right widget_border">

                        <aside class="widget widget-categories">
                            <h3 class="widget-title">More Halls</h3>
                            <ul>
                                @foreach ($subhalls as $sub)
                                    <li><a href="{{ route('singlehall', $sub) }}">{{ $sub->subhall_name }}</a></li>
                                @endforeach

                            </ul>
                        </aside>


                    </div>
                </div><!-- row end -->
            </div>
        </div>

    </div>
    <!--site-main end-->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
        </script>
@endsection
