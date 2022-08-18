@extends('MasterPage.mast')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Booking</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-2.html">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span> Booking</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row checkout-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">

                        <form name="checkout" method="post" class="checkout row" action="{{route('booking.store',$subhall)}}">
                            @csrf
                            <div class="col-lg-6">
                                <div class="billing-fields">
                                    <h3>Your Information</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Your Name&nbsp;<abbr class="required"
                                                        title="required"></abbr></label>
                                                <input type="text" class="input-tex" name="name" placeholder=""
                                                    value="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Your Email&nbsp;<abbr class="required"
                                                        title="required"></abbr></label>
                                                <input type="email" class="input-tex" name="email"
                                                    placeholder="example@mail.com" value="">
                                            </div>
                                        </div>

                                    </div>
                                    <p class="form-row">
                                        <label>Address&nbsp;</span></label>
                                        <input type="text" class="input-text " name="address" placeholder="Your Address"
                                            value="" required>
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Mobile Number&nbsp;<abbr class="required"
                                                        title="required"></abbr></label>
                                                <input type="number" class="input-tex" name="mobile"
                                                    placeholder="077-7777777" value="">
                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="additional-fields">
                                    <h3>Booking Summary</h3>
                                    <div class="additional-fields-wrapper">
                                        <div class="media product-card">
                                            <a class="pull-left" href="hall-single">
                                                <img class="media-object" src="{{asset('public/adminImage/'.$subhall->image1)}}" width="80px"
                                                    alt="Image" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading">Hayat Irbid Halls
                                                </h5>
                                                <p class="price">{{$subhall->subhall_name}}</p>
                                                <p class="price">{{$date}} /// {{$time}}</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit"
                                class="button ttm-btn ttm-btn-size-sm ttm-btn-style-fill ttm-btn-shape-rounded ttm-btn-color-dark pull-right"
                                name="checkout_place_order" id="place_order" value="Place order"
                                data-value="Place order">Book</button>

                    </div>
                </div>
                </form>
            </div>
    </div>
    </div>
    </section>

    </div>
    <!--site-main end-->
@endsection
