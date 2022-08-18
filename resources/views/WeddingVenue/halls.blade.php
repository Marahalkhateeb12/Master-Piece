@extends('MasterPage.mast')
@section('content')


<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">{{$hall->hall_name}}</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html">Home</a>
                        </span>
                        <span class="ttm-bread-sep">&gt;</span>
                        <span>{{$hall->hall_name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
    <!--site-main start-->
    <div class="site-main">

        <!--about-section_1-->
        <section class="ttm-row about-section_1 clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <!--ttm_single_image-wrapper-->
                        <div class="ttm_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('public/adminImage/'.$hall->image)}}" title="single-img-two" alt="single-img-two">
                        </div><!--ttm_single_image-wrapper end-->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="pl-20 pt-20 res-991-pt-40 res-991-pl-0">
                            <!--section title-->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>Welcome To Our Hall</h5>
                                    <h2 class="title">{{$hall->hall_name}}</h2>
                                </div>
                                <div class="title-desc">
                                    <p> {{$hall->hall_description}} </p>
                                </div>
                                <div class="title-desc">
                                    <p>Hours: {{$hall->hours}} </p>
                                </div>
                                <div class="title-desc">
                                <p>Address: {{$hall->hall_address}} <small><a href=`{{$hall->location}}` style="color:#c78665 ;">Go to Google Map</a></small></p>
                                </div>
                                <div class="title-desc">
                                <p>Mobile : 0{{$hall->hall_mobile}}</p>
                                </div>
                            </div>
                            <!--section title end-->
                            <div class="ttm-horizontal_sep width-100 mt-35 mb-20"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="ti-bookmark-alt"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Certified Studio</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Quickly productivate just in
                                                    time strategic theme.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="ti ti-medall"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Award Ceremony</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We are among top event
                                                    management companies!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mt-20">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-dark"
                                    href="about-us.html">Read More</a>
                            </div> --}}
                        </div>
                    </div>


                </div>

                <h3 class="title" style="text-align: center; margin-top: 40px">Halls</h3>
                <div class="row isotope-project">

                @foreach ($subhalls as $subhall)
                <div class="col-lg-4 col-md-4 col-sm-6 project_item catering">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!--ttm-box-view-overlay-->
                        <div class="ttm-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="{{route('singlehall',$subhall)}}"><img class="img-fluid"  src={{asset('public/adminImage/'.$subhall->image1)}} alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{route('singlehall',$subhall)}}">{{$subhall->subhall_name}}</a></h5>
                                </div>
                                {{-- <span class="category">Catering, Stories</span> --}}
                            </div>
                        </div><!--ttm-box-view-overlay end-->
                    </div><!--featured-imagebox end-->
                </div>
                @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
