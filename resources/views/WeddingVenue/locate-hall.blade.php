@extends('MasterPage.mast')
@section('content')

 <!--page-title-->
 <div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Locate your Wedding Hall</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html">Home</a>
                        </span>
                        <span class="ttm-bread-sep">&gt;</span>
                        <span>Locate your Wedding Hall</span>
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
                            <li><a href="lovely-decoration.html"> Lovely Decoration </a></li>
                            <li><a href="live-music-and-dj.html"> Live Music & Dj </a></li>
                            <li class="active"><a href="dinner-and-drinks.html"> Dinner & Drinks </a></li>
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
                        <div class="ttm-featured-wrapper mb-35 res-991-mb-20">
                            <img class="img-fluid" src="images/services/services-03.jpg" alt="">
                        </div>
                        <div class="ttm-service-description">
                            <div class="mb-35">
                                <p>Lorem Ipsum has been the industry’s standard dummy text <strong>ever since the 1500s, </strong>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset <u><a class="ttm-textcolor-skincolor" href="#">sheets containing</a></u> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <h4>With Advanced Analytics, you can:</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, <strong>pulvinar dapibus leo.</strong></p>
                                    <div class="mt-35">
                                        <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                    <i class="flaticon flaticon-romantic-dinner"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Fresh Ingredients</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-30">
                                        <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                    <i class="flaticon flaticon-wine"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Best Catering</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <img class="img-fluid" src="images/services/services-01-900x800.jpg" alt="image">
                                </div>
                            </div>
                             <h4 class="mt-25">Advanced Analytics Supports Better Decision Making</h4>
                            <div class="mb-15">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, <u><a class="ttm-textcolor-skincolor" href="#">consectetur Lorem ipsum</a></u> dolor sit adipiscing elit. Ut elit tellus, luctus nec massa quis pusg ullamcorper mattis, pulvinar dapibus.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-10 res-991-mt-20">
                                        <img class="img-fluid" src="images/services/services-02-900x800.jpg" alt="image"> 
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-10 res-991-mt-20">
                                        <img class="img-fluid" src="images/services/services-03-900x800.jpg" alt="image"> 
                                    </div>
                                </div>
                            </div>
                            <p class="pt-30 res-991-mb-0">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div> 


</div><!-- site-main end -->




@endsection