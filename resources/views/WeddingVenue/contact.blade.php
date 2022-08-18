@extends('MasterPage.mast')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner pb-150 res-991-pb-60 ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Contact Us</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-2.html">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span> Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <section class="ttm-row pt-0 pb-0 res-991-pt-0 clearfix">
            <div class="container">

            </div>
        </section>


        <!---contact-us-section-->
        <section class="ttm-row contact-us-section bg-layer-equal-height clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="ttm-col-bgcolor-yes ttm-bg">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content">
                                        <!-- section title -->
                                        <div class="section-title without-seperator">
                                            <div class="title-header">
                                                <h5>Wedding Attend</h5>
                                                <h2 class="title">It’s Your Turn</h2>
                                            </div>
                                        </div><!-- section title end -->
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                    <i class="ti ti-location-pin"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Location</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Irbid, Jordan<br>4578 Beverly Rd</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end -->
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                    <i class="ti ti-files"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Call Or Email</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>+ (962) 778091889<br>wedco@mail.com</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end -->
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                    <i class="ti ti-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Office Hours</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Mon – Sat: 9.00am to 7.00pm<br>Sunday: Closed</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="border pt-35 pr-30 pb-40 pl-30">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                    <h5>Do You Have Any Questions?</h5>
                                    <form class="contactform wrap-form pt-5 clearfix" id="contact-form" method="post"
                                        role="form" action="{{ route('contact.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Your Name </label>
                                                <span class="text-input"><input name="name" type="text" value=""
                                                        placeholder="name" required="required"></span>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Your Email</label>
                                                <span class="text-input"><input name="email" type="email" value=""
                                                        placeholder="example@mail.com" required="required"></span>

                                            </div>

                                        </div>

                                        <label>Your Message </label>
                                        <span class="text-input">
                                            <textarea name="message" rows="4" placeholder="Message..." required="required"></textarea>
                                        </span>

                                        <input type="submit"
                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100"
                                            value="Send A Message">
                                    </form>
                                </div>
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
            </div>
        </section>
        <!--contact-us-section end-->


        <!--google_map-->
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map"></div>
            </div>
        </div>
        <!--google_map end-->


    </div>
    <!--site-main end-->
@endsection
