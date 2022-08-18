<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themetechmount.in/html/wedco/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 23:30:15 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Wedding Multi Purpose Html Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Wedding Multi Purpose Html  Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes.css')}}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{asset('css/megamenu.css')}}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>

<!-- REVOLUTION LAYERS STYLES -->
<link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('revolution/css/rs6.css')}}"> 

</head>
<body>

<!--page start-->
    <div class="page">

        
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="/" title="wedco" rel="home">
                                    <img id="logo-img" class="img-center standardlogo" href="/" src="{{asset('images/logo-img.png')}}" alt="logo-img">
                                    <img id="logo-dark" class="img-center stickylogo" href="/" src="{{asset('images/logo-dark.png')}}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile ml-auto" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item active">
                                        <a href="/" class="mega-menu-link">Home</a>
                                        {{-- <ul class="mega-submenu">
                                            <li class="active"><a href="index-2.html">Home Wedding</a></li>
                                            <li><a href="home-photography.html">Home Photography</a></li>
                                            <li><a href="home-invitation.html">Home Invitation</a></li>
                                            <li><a href="wedding-planner.html">Wedding Planner</a></li>
                                            <li><a href="home-catering.html">Home Catering</a></li>
                                            <li class="mega-menu-item active">
                                                <a href="#" class="mega-menu-link">Header Styles</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="header-classic.html">Header Classic</a></li>
                                                    <li class="active"><a href="index-2.html">Header Overlay</a></li>
                                                    <li><a href="header-center-logo.html">Header Center Logo</a></li>
                                                    <li><a href="header-infostack.html">Header Infostack</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Halls</a>
                                        <ul class="mega-submenu">
                                            @foreach ($halls as $hal)
                                            <li><a href="{{route('hall' , $hal)}}">{{$hal->hall_name}}</a></li>
                                            @endforeach
                                           
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="/about" class="mega-menu-link">About Us</a>
                                        
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="/contact" class="mega-menu-link">Contact Us</a>
                                        
                                    </li>

                                    <li>
                        
                                        <!-- header-btn -->
                                               @guest
                                           
                                        <div class="header-btn">
                                            <div class="header-right-action">
                                                 @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="theme-btn theme-btn-small theme-btn-transparent mr-1"
                                                    data-toggle="modal" data-target="#signupPopupForm">{{ __('Register') }}</a>  
                                                       @endif 
                                                      @if (Route::has('login'))
                                                <a href="{{ route('login') }}" class="theme-btn theme-btn-small" data-toggle="modal"
                                                    data-target="#loginPopupForm">{{ __('Login') }}</a>     
                                                       @endif
                                            </div>
                
                                        </div>
                                  
                                    </li>
                                    <ul>
                                           @else
                                             <li style="margin-top: 15px;" class="nav-item ">
                                                <li style="margin-top: 15px" class="nav-item ">
                                         
                                                <li style="margin-top: 15px;" class="nav-item ">
                                                <li style="margin-top: 25px;margin-left: 10px" class="nav-item ">
                                                    <div class="nav-item dropdown">
                                                        <button style="text-transform: uppercase;" class="btn btn-outline-primary ml-2 dropdown-toggle"
                                                            class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{ __(Auth::user()->name) }}
                                                        </button>
                                                        
                                                            
                                                            <a class="dropdown-item" style="color: #ff6600c2 "
                                                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                                class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                           
                                     @endguest   </ul>
                                </ul>
                            </nav>
                            {{-- <div class="header_extra d-flex flex-row align-items-center justify-content-end ">
                                <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header_cart">
                                    <a href="#" class="button-cart">
                                        <div class="cart_icon"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="cart_count">0</div>
                                    </a>
                                </div>
                            </div> --}}
                     
                        </div><!-- site-navigation end-->
                    </div>
                
                </div>
            </div>
        </header>
        <!--header end-->
        <div class="modal-popup">
            <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div>
                                <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                                {{-- <p class="font-size-14">Hello! Welcome Create a New Account</p> --}}
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="la la-close"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="contact-form-action">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Name') }}</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required type="text" 
                                                placeholder="Type your username">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div><!-- end input-box -->
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Email Address') }}</label>
                                        <div class="form-group">
                                            <span class="la la-envelope form-icon"></span>
                                            <input type='email'
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required
                                                autocomplete="email"placeholder="Type your email">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Password') }}</label>
                                        <div class="form-group">
                                            <span class="la la-lock form-icon"></span>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Confirm Password') }}</label>
                                        <div class="form-group">
                                            <span class="la la-lock form-icon"></span>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Type again password">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="btn-box pt-3 pb-4">
                                        <button type="submit" class="theme-btn w-100"> {{ __('Register') }}</button>
                                    </div>
                            
                                </form>
                            </div><!-- end contact-form-action -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end modal-popup -->
    
        <!-- end modal-shared -->
        <div class="modal-popup">
            <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div>
                                <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                                <p class="font-size-14">Hello! Welcome to your account</p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="la la-close"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="contact-form-action">
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Email Address') }}</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Type your email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
    
                                    </div><!-- end input-box -->
                                    <div class="input-box">
                                        <label class="label-text">Password</label>
                                        <div class="form-group mb-2">
                                            <span class="la la-lock form-icon"></span>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Type your password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="custom-checkbox mb-0">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                                <label for="rememberchb">  {{ __('Remember Me') }}</label>
                                            </div>
                                            <p class="forgot-password">
                                                <a href="recover.html">Forgot Password?</a>
                                            </p>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="btn-box pt-3 pb-4">
                                        <button type="submit" class="theme-btn w-100">{{ __('Login') }}</button>
                                    </div>
                                    <div class="action-box text-center">
                                        <p class="font-size-14">Or Login Using</p>
                                        <ul class="social-profile py-3">
                                            <li><a href="#" class="bg-5 text-white"><i
                                                        class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#" class="bg-6 text-white"><i
                                                        class="lab la-twitter"></i></a></li>
                                            <li><a href="#" class="bg-7 text-white"><i
                                                        class="lab la-instagram"></i></a></li>
                                            <li><a href="#" class="bg-5 text-white"><i
                                                        class="lab la-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end modal-popup -->