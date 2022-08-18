@extends('MasterPage.mast')
@section('content')

  <!--page-title-->
  <div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title"> Live Music & Dj</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html">Home</a>
                        </span>
                        <span class="ttm-bread-sep">&gt;</span>
                        <span> Live Music & Dj</span>
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
                            <li class="active"><a href="live-music-and-dj.html"> Live Music & Dj </a></li>
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
                            <img class="img-fluid" src="images/services/services-02.jpg" alt="">
                        </div>
                        <div class="ttm-service-description">
                            <div class="mb-35 res-991-mb-40">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <strong>Ut enim ad minim veniam,</strong> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident, sunt in <u><a class="ttm-textcolor-skincolor" href="#">culpaqui officia</a></u> deserunt mollit&nbsp;.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid" src="images/services/services-01-1200x800.jpg" alt="image"> 
                                </div>
                                <div class="col-md-6">
                                    <div class="res-767-mt-30">
                                    <h4>Night DJ Event</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <u><a class="ttm-textcolor-skincolor" href="#">doloremque</a></u> laudantium, <strong>inventore</strong> veritatis et quasi architecto beatae.</p>
                                    <div class="mt-10">
                                    <ul class="ttm-list ttm-list-style-icon mb-15">
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Sed elementum ante nec urna</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Duis id orci feugiat laoreet</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Donec mollis mi in leo elementum</div>
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-horizontal_sep width-100 mt-30 mb-25"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-10 res-767-mt-30">
                                        <img class="img-fluid" src="images/services/services-02-1200x800.jpg" alt="image"> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="res-767-mt-30">
                                    <h4>Night DJ Event</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <u><a class="ttm-textcolor-skincolor" href="#">doloremque</a></u> laudantium, <strong>inventore</strong> veritatis et quasi architecto beatae.</p>
                                    <div class="mt-10">
                                    <ul class="ttm-list ttm-list-style-icon mb-15">
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Sed elementum ante nec urna</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Duis id orci feugiat laoreet</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Donec mollis mi in leo elementum</div>
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-horizontal_sep width-100 mt-30 mb-25"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-10 res-767-mt-30">
                                        <img class="img-fluid" src="images/services/services-03-1200x800.jpg" alt="image"> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="res-767-mt-30">
                                    <h4>Music Concert</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <u><a class="ttm-textcolor-skincolor" href="#">doloremque</a></u> laudantium, <strong>inventore</strong> veritatis et quasi architecto beatae.</p>
                                    <div class="mt-10">
                                    <ul class="ttm-list ttm-list-style-icon mb-15">
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Sed elementum ante nec urna</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Duis id orci feugiat laoreet</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                            <div class="ttm-list-li-content">Donec mollis mi in leo elementum</div>
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div> 


</div><!-- site-main end --


@endsection