@extends('MasterPage.mast')
@section('content')

 <!--page-title-->
 <div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title"> Lovely Decoration</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html">Home</a>
                        </span>
                        <span class="ttm-bread-sep">&gt;</span>
                        <span> Lovely Decoration</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<!--page-title end-->


<!--site-main start-->
<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-right clearfix">
        <div class="container">
            <!--row-->
            <div class="row">
                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            <li class="active"><a href="lovely-decoration.html"> Lovely Decoration </a></li>
                            <li><a href="live-music-and-dj.html"> Live Music & Dj </a></li>
                            <li><a href="dinner-and-drinks.html"> Dinner & Drinks </a></li>
                            <li><a href="seating-chart.html"> Seating Chart </a></li>
                            <li><a href="responsible-sourcing.html"> Responsible Sourcing </a></li>
                            <li><a href="costume-services.html"> Costume Services </a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-banner">
                        <div class="contact_img">
                            <img class="img-fluid" src="images/single-img-09.jpg" alt="single_09">
                        </div>                                
                    </aside>
                    <aside class="widget tagcloud-widget with-title">
                        <h3 class="widget-title">Free Consult</h3>
                        <form id="contactform" class="contactform wrap-form clearfix" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input">
                                           <input name="name" type="text" value="" placeholder="Name" required="required">
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone" required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input">
                                           <span class="orderby">
                                               <select name="orderby" class="select2-hidden-accessible">
                                                    <option value="menu_order" selected="selected">Visit Venue</option>
                                                    <option value="popularity">Newyork</option>
                                                    <option value="rating">California</option>
                                                    <option value="date">France</option>
                                                </select>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"><textarea name="message" rows="4" placeholder="Messages" required="required"></textarea></span>
                                    </label>
                                </div>
                            </div>
                            <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send A Request</button>
                        </form>
                    </aside>
                </div>
                <div class="col-lg-8 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-featured-wrapper mb-35 res-991-mb-40">
                            <img class="img-fluid" src="images/services/services-01.jpg" alt="">
                        </div>
                        <div class="ttm-service-description">
                            <h3>Be fabulous. Be empowered. Be Blown Away!</h3>
                            <div class="mb-35 res-991-mb-40">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s<strong> standard dummy text ever since</strong> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of <u><a class="ttm-textcolor-skincolor" href="#">Classical Latin</a></u> literature from 45 BC, making it over 2000 years old.</p>
                            </div>
                            <h4>Service Advantages</h4>
                            <div class="mb-20">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it <strong>over 2000 years old.</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                <i class="flaticon flaticon-candle"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Qualified Candidates</h5>
                                            </div>
                                            <div class="featured-desc">
                                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                <i class="flaticon flaticon-placeholder"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Best Platform</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <h4 class="mt-15">Our Latest Project</h4>
                            <div class="mb-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply <u><a class="ttm-textcolor-skincolor" href="#">random text.</a></u> It has roots in a <strong><em>piece of classical</em></strong> Latin literature from 45 BC, making it over 2000 years old.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <!--featured-imagebox-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                                        <!--ttm-box-view-overlay-->
                                        <div class="ttm-box-view-overlay">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"><img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5><a href="wedding-bells.html">Wedding Bells</a></h5>
                                                </div>
                                                <span class="category">Catering, Stories</span>
                                            </div>
                                        </div><!--ttm-box-view-overlay end-->
                                    </div><!--featured-imagebox end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <!--featured-imagebox-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                                        <!--ttm-box-view-overlay-->
                                        <div class="ttm-box-view-overlay">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="images/portfolio/02.jpg" alt="image"></a>
                                            </div><!--featured-thumbnail end-->
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5><a href="best-florists.html">Best Florists</a></h5>
                                                </div>
                                                <span class="category">Decorate, Planning</span>
                                            </div>
                                        </div><!--ttm-box-view-overlay end-->
                                    </div><!-- featured-imagebox end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div> 


</div><!-- site-main end -->


@endsection