<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3ed2a7">
    
    <link rel="shortcut icon" href="./favicon.png" />
    
    <title>IFISH.NG - Welcome</title>

    <link rel="stylesheet" href="https://use.typekit.net/vtq7trz.css">
    
    <link rel="stylesheet" href="assets/vendors/liquid-icon/liquid-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/theme-vendors.min.css" />
    <link rel="stylesheet" href="assets/css/theme.min.css" />
    <link rel="stylesheet" href="assets/css/themes/voguish.css" />
    
    <!-- Head Libs -->
    <script async src="assets/vendors/modernizr.min.js"></script>
    
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="minimal" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
    
    <div id="wrap">
        
        <header class="main-header main-header-overlay bb-fade-white-015" data-sticky-header="true" data-sticky-options='{ "stickyTrigger": "first-section" }'>
            
            <div class="mainbar-wrap">
                <div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
                <div class="container-fluid mainbar-container">
                    <div class="mainbar">
                        <div class="row mainbar-row align-items-lg-stretch px-4">
                            
                            <div class="col pr-5">
                                <div class="navbar-header">
                                    <a class="navbar-brand pt-20 pb-20" href="{{ url('/') }}" rel="home">
                                        <span class="navbar-brand-inner">
                                            <img class="logo-sticky" src="./assets/img/logo/voguish-dark.png" alt="Home">
                                            <img class="mobile-logo-default" src="./assets/img/logo/voguish-dark.png" alt="Home">
                                            <img class="logo-default" src="./assets/img/logo/voguish-light.png" alt="Home">
                                        </span>
                                    </a>
                                    <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="bars">
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                        </span>
                                    </button>
                                </div><!-- /.navbar-header -->
                            </div><!-- /.col -->
                            
                            <div class="col">
                                
                                <div class="collapse navbar-collapse" id="main-header-collapse">
                                    
                                    <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-center" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">
                                        
                                        <li class="active">
                                            <a href="#content">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">Home</span>
                                                </span>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#about">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">About</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fish-farms">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">Fish Farms</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#features">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">How It Works</span>
                                                </span>
                                            </a>
                                        </li>
                                    
                                </ul><!-- /#primary-nav  -->
                                
                            </div><!-- /#main-header-collapse -->
                            
                        </div><!-- /.col -->

                        <div class="col text-right">

                            @if (Route::has('login'))
                            <div class="header-module">
                            @auth
                            <span>   
                            <a href="{{ url('/home') }}" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold"><span class="btn-txt">{{ Auth::user()->name }}'s Account</span></a>
                            </span>
                            @else
                            <span>
                        <a href="{{ route('login') }}" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold">
                            <span class="btn-txt">Login </span></a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold"><span class="btn-txt">Register </span></a>
                            @endif
                            @endauth
                            </span>                           
                            </div><!-- /.header-module -->
                            @endif
                            
                        </div><!-- /.col -->
                        
                    </div><!-- /.mainbar-row -->
                </div><!-- /.mainbar -->
            </div><!-- /.mainbar-container -->
        </div><!-- /.mainbar-wrap -->
        
    </header><!-- /.main-header -->
    
    <main id="content" class="content">
        
        <section
            class="vc_row fullheight d-flex flex-wrap align-items-center bg-cover bg-center py-7 mb-100"
            style="background-image: url(./assets/demo/bg/bg-7.jpg);"
        >

            <div class="container">
                <div class="row">

                    <div class="lqd-column col-md-8" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1400","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":65,"rotateZ":3,"opacity":0},"animations":{"translateY":0,"rotateZ":0,"opacity":1}}'>

                        <h6 class="text-white font-size-12 text-uppercase ltr-sp-2">WELCOME TO IFISH.NG</h6>
                        <h2
                            class="text-white mt-4 pr-7"
                            data-fittext="true"
                            data-fittext-options='{ "compressor":0.75,"maxFontSize": 66,"minFontSize": 48 }'
                            data-split-text="true"
                            data-split-options='{"type":"lines"}'
                        >Aquaculture Investment Platform <span class="text-underline">for everyone.</span></h2>

                        <div
                            class="row d-flex flex-wrap align-items-center"
                            data-custom-animations="true"
                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-column","duration":"1800","startDelay":"500","delay":"180","easing":"easeOutQuint","initValues":{"translateX":-45,"rotateZ":1,"opacity":0},"animations":{"translateX":0,"rotateZ":0,"opacity":1}}'>

                            <div class="lqd-column col-md-2 mb-5 mb-md-0">

                                <a href="https://www.youtube.com/watch?v=XGzgdTV5mL0" class="btn btn-naked fresco btn-icon-block btn-icon-top btn-icon-xxlg btn-icon-circle btn-icon-solid btn-icon-ripple">
                                    <span>
                                        <span class="btn-icon font-size-6"><i class="fa fa-play"></i></span>
                                    </span>
                                </a>

                            </div><!-- /.lqd-column col-md-2 -->

                            <div class="lqd-column col-md-10 pr-md-5">

                                <p class="font-size-20 lh-16 mb-0 text-white opacity-08">Forget about limits! Hear what iFish.ng is all about. A message from our Team Leader.</p>

                            </div><!-- /.lqd-column col-md-10 -->

                        </div><!-- /.row -->

                    </div><!-- /.col-md-8 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
            
        </section>

        <section class="vc_row pt-100 pb-100" id="about">
            <div class="container">
                <div class="row">

                    <div class="lqd-column col-md-5" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":35,"rotateZ":1,"opacity":0},"animations":{"translateY":0,"rotateZ":0,"opacity":1}}'>

                        <h6 class="font-size-12 text-uppercase ltr-sp-2">Why iFish.ng?</h6>
                        <h2
                            class="mt-40"
                            data-fittext="true"
                            data-fittext-options='{ "compressor":0.75,"maxFontSize": 48,"minFontSize": 38 }'
                        >Invest safely in aquaculture and get returns - helf-yearly.</h2>
                        <p class="font-size-18 mb-35">iFish is basically here to change the Nigerian aquaculture. Modern crowdfarming is the way to go.</p>

                        <a href="#" class="btn btn-solid text-uppercase btn-lg semi-round btn-bordered border-thin font-size-12 font-weight-bold ltr-sp-2 px-2" data-localscroll="true" data-localscroll-options='{ "scrollBelowSection": true }'>
                            <span>
                                <span class="btn-txt">Learn More</span>
                                <span class="btn-icon"><i class="fa fa-angle-right"></i></span>
                            </span>
                        </a>

                    </div><!-- /.lqd-column col-md-5 -->

                    <div class="lqd-column col-md-7 hidden-sm hidden-xs">

                        <div class="liquid-img-group-container">
                            <div class="liquid-img-group-inner d-flex align-items-center justify-content-between">
                                
                                <div class="liquid-img-group-single" data-shadow-style="4" data-inview="true" data-animate-shadow="true">
                                    <div class="liquid-img-group-img-container">
                                        <div class="liquid-img-container-inner" data-parallax="true" data-parallax-from='{"translateY":-17}' data-parallax-to='{"translateY":55}' data-parallax-options='{"overflowHidden":false,"easing":"linear"}'>
                                            <figure>
                                                <img width="300" height="399" src="./assets/demo/misc/parallax-img-4.jpg" alt="Parallax Image" />
                                            </figure>
                                        </div><!-- /.liquid-img-container-inner -->
                                    </div><!-- /.liquid-img-group-img-container -->
                                </div><!-- /.liquid-img-group-single -->

                                <div class="liquid-img-group-single" data-shadow-style="4" data-inview="true" data-inview-options='{"delayTime":250}' data-animate-shadow="true">
                                    <div class="liquid-img-group-img-container">
                                        <div class="liquid-img-container-inner" data-parallax="true" data-parallax-from='{"translateY":18}' data-parallax-to='{"translateY":-71}' data-parallax-options='{"overflowHidden":false,"easing":"linear"}'>
                                            <figure>
                                                <img width="300" height="399" src="./assets/demo/misc/parallax-img-5.jpg" alt="Parallax Image" />
                                            </figure>
                                        </div><!-- /.liquid-img-container-inner -->
                                    </div><!-- /.liquid-img-group-img-container -->
                                </div><!-- /.liquid-img-group-single -->

                            </div><!-- /.liquid-img-group-inner -->
                        </div><!-- /.liquid-img-group-container -->

                    </div><!-- /.lqd-column col-md-7 hidden-sm hidden-xs -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="vc_row pt-90 pb-65">
            <div class="container">
                <div class="row">

                    <div class="lqd-column col-md-4 px-6">

                        <div class="iconbox iconbox-lg iconbox-heading-sm">
                            <div class="iconbox-icon-wrap">
                                <span class="iconbox-icon-container">
                                    <img src="./assets/demo/icon/icon-1.png" class="liquid-image-icon" alt="Icon">
                                </span>
                            </div><!-- /.iconbox-icon-wrap -->
                            <div class="contents">
                                <h3 class="font-weight-semibold">Comprehensive Insurance</h3>
                                <p>Ifish.ng is 100% secured and insured by Nigeria Agriculture Insurance Company (NAIC) and your data and business is guaranteed with world class security.</p>
                            </div><!-- /.contents -->
                        </div><!-- /.iconbox -->

                    </div><!-- /.lqd-column col-md-4 -->

                    <div class="lqd-column col-md-4 px-6">

                        <div class="iconbox iconbox-lg iconbox-heading-sm">
                            <div class="iconbox-icon-wrap">
                                <span class="iconbox-icon-container">
                                    <img src="./assets/demo/icon/icon-2.png" class="liquid-image-icon" alt="Icon">
                                </span>
                            </div><!-- /.iconbox-icon-wrap -->
                            <div class="contents">
                                <h3 class="font-weight-semibold">Timely and Convenient</h3>
                                <p>Get a fish pond in less than 5minutes by subscribing to a plan with us online and start making money from one of the fastest growing industries in the world.</p>
                            </div><!-- /.contents -->
                        </div><!-- /.iconbox -->

                    </div><!-- /.lqd-column col-md-4 -->

                    <div class="lqd-column col-md-4 px-6">

                        <div class="iconbox iconbox-lg iconbox-heading-sm">
                            <div class="iconbox-icon-wrap">
                                <span class="iconbox-icon-container">
                                    <img src="./assets/demo/icon/icon-3.png" class="liquid-image-icon" alt="Icon">
                                </span>
                            </div><!-- /.iconbox-icon-wrap -->
                            <div class="contents">
                                <h3 class="font-weight-semibold">Be Up To Date</h3>
                                <p>Know exactly how your fish farm is faring in real time. iFish gives you real time updates in pictures and texts. You can also contact your farm manager during business hours.</p>
                            </div><!-- /.contents -->
                        </div><!-- /.iconbox -->

                    </div><!-- /.lqd-column col-md-4 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="vc_row pt-60 pb-60 mx-md-5 mt-65" id="fish-farms">

            <div class="liquid-row-overlay bg-gradient-cream"></div>

            <div class="container">

                <div class="row">

                    <div class="lqd-column col-md-10 col-md-offset-1 text-center mb-4" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":35,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>

                        <h6 class="mb-3 circle d-inline-flex bg-white font-size-12 text-uppercase font-weight-semibold ltr-sp-2 py-3 px-4 box-shadow-1">GROW YOUR INCOME</h6>
                        <h2 class="px-md-5 mx-md-5 mt-4" data-split-text="true" data-split-options='{"type":"lines"}'>Subscribe to one or more of our fish farms below, and buy slots.</h2>

                    </div><!-- /.lqd-column col-md-10 col-md-offset-1 -->

                </div><!-- /.row -->

                <div class="row">

                    <div class="lqd-column col-md-4">

                        <div class="fancy-box border-radius-3 scheme-light fancy-box-overlay tall">
                            <div class="cb-img-container border-radius-3">
                                <figure class="fancy-box-image border-radius-3" data-responsive-bg="true" data-liquid-blur="true" data-blur-options='{"imgSrc":"backgroundImage","radius":15,"blurHandlerOn":"static"}'>
                                    <img class="invisible" src="./assets/demo/misc/fb-1.png" alt="Automatic Updates" />
                                </figure>
                            </div><!-- /.cb-img-container -->
                            <span class="cb-overlay"></span>
                            <div class="fancy-box-contents border-radius-3">
                                <div class="fancy-box-header">
                                    <span class="cb-subtitle text-uppercase ltr-sp-2 border-radius-3">AVAILABLE (SUBSCRIBE)</span>
                                    <h3 class="font-weight-semibold">CatFish Farm</h3>
                                    <p class="font-size-16 opacity-06">25% returns in six(6) months</p>
                                </div><!-- /.fancy-box-header -->
                            </div><!-- /.fancy-box-contents -->
                        </div><!-- /.fancy-box -->
                        
                    </div><!-- /.lqd-column col-md-4 -->

                    <div class="lqd-column col-md-4">

                        <div class="fancy-box border-radius-3 scheme-light fancy-box-overlay tall">
                            <div class="cb-img-container border-radius-3">
                                <figure class="fancy-box-image border-radius-3" data-responsive-bg="true" data-liquid-blur="true" data-blur-options='{"imgSrc":"backgroundImage","radius":15,"blurHandlerOn":"static"}'>
                                    <img class="invisible" src="./assets/demo/misc/fb-2.jpg" alt="Flexible Options" />
                                </figure>
                            </div><!-- /.cb-img-container -->
                            <span class="cb-overlay"></span>
                            <div class="fancy-box-contents border-radius-3">
                                <div class="fancy-box-header">
                                    <span class="cb-subtitle text-uppercase ltr-sp-2 border-radius-3">FULLY BOOKED</span>
                                    <h3 class="font-weight-semibold">Tilapia Fish Farm</h3>
                                    <p class="font-size-16 opacity-06">20% returns in four(4) months</p>
                                </div><!-- /.fancy-box-header -->
                            </div><!-- /.fancy-box-contents -->
                        </div><!-- /.fancy-box -->

                    </div><!-- /.lqd-column col-md-4 -->

                    <div class="lqd-column col-md-4">

                        <div class="fancy-box border-radius-3 scheme-light fancy-box-overlay tall">
                            <div class="cb-img-container border-radius-3">
                                <figure class="fancy-box-image border-radius-3" data-responsive-bg="true" data-liquid-blur="true" data-blur-options='{"imgSrc":"backgroundImage","radius":15,"blurHandlerOn":"static"}'>
                                    <img class="invisible" src="./assets/demo/misc/fb-3.jpg" alt="Lifetime Use" />
                                </figure>
                            </div><!-- /.cb-img-container -->
                            <span class="cb-overlay"></span>
                            <div class="fancy-box-contents border-radius-3">
                                <div class="fancy-box-header">
                                    <span class="cb-subtitle text-uppercase ltr-sp-2 border-radius-3">FULLY BOOKED</span>
                                    <h3 class="font-weight-semibold">Croaker Fish Farm</h3>
                                    <p class="font-size-16 opacity-06">30% returns in six(6) months</p>
                                </div><!-- /.fancy-box-header -->
                            </div><!-- /.fancy-box-contents -->
                        </div><!-- /.fancy-box -->

                    </div><!-- /.lqd-column col-md-4 -->

                </div><!-- /.row -->

            </div><!-- /.container -->
        </section>

        <section class="vc_row pt-60 pb-60" id="features">

            <div class="container">
                <div class="row d-flex flex-wrap align-items-center">

                    <div class="lqd-column col-md-5" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-35,"rotateZ":1,"opacity":0},"animations":{"translateX":0,"rotateZ":0,"opacity":1}}'>

                        <div class="iconbox text-left iconbox-icon-shadow iconbox-circle iconbox-sm" data-plugin-options='{"color":"rgb(255, 255, 255)"}'>
                            <div class="iconbox-icon-wrap">
                                <span class="iconbox-icon-container">
                                    <i class="icon-weather_lightning"></i>
                                </span>
                            </div><!-- /.iconbox-icon-wrap -->
                        </div><!-- /.iconbox -->
                        <h2
                            class="mt-20"
                            data-fittext="true"
                            data-fittext-options='{ "compressor":0.75,"maxFontSize": 48,"minFontSize": 38 }'
                        >Just click <a href="{{ route('register') }}">register</a> and start farming!</h2>
                        <p class="font-size-18 mb-35">Create an account withus, and select fish farms to start subscribing to. It’s that easy!</p>

                    </div><!-- /.lqd-column col-md-5 -->

                    <div class="lqd-column col-md-7">

                        <div class="liquid-img-group-single pr-5" data-reveal="true" data-reveal-options='{ "direction":"rl" }'>
                            <div class="liquid-img-group-img-container">
                                <div class="liquid-img-container-inner" data-parallax="true" data-parallax-from='{"translateY":30}' data-parallax-to='{"translateY":-30}' data-parallax-options='{"overflowHidden":false,"easing":"linear"}'>
                                    <figure>
                                        <img src="./assets/demo/misc/parallax-img-7.png" alt="iFish Process" />
                                    </figure>
                                </div><!-- /.liquid-img-container-inner -->
                            </div><!-- /.liquid-img-group-img-container -->
                        </div><!-- /.liquid-img-group-single -->

                        <div class="row">

                            <div class="lqd-column col-md-6 col-md-offset-6">

                                <div
                                    class="lqd-parallax-iconboxes bg-white"
                                    data-parallax="true"
                                    data-parallax-from='{"translateY": 0}'
                                    data-parallax-to='{"translateY": 30}'
                                    data-parallax-options='{"ease": "linear", "reverse": true, "overflowHidden": false, "triggerHook": "onEnter"}'
                                    data-custom-animations="true"
                                    data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":35,"opacity":0},"animations":{"translateY":0,"opacity":1}}'
                                >

                                    <div class="iconbox iconbox-inline iconbox-circle iconbox-xxs flex-nowrap">
                                        <div class="iconbox-icon-wrap">
                                            <span class="iconbox-icon-container">
                                                <i class="icon-ion-ios-checkmark"></i>
                                            </span>
                                        </div><!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal font-size-16">Register on iFish.ng for free.<a href="{{ route('register') }}">Click Here</a></h3>
                                    </div><!-- /.iconbox -->
    
                                    <div class="iconbox iconbox-inline iconbox-circle iconbox-xxs flex-nowrap">
                                        <div class="iconbox-icon-wrap">
                                            <span class="iconbox-icon-container">
                                                <i class="icon-ion-ios-checkmark"></i>
                                            </span>
                                        </div><!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal font-size-16">Browse our available fish farms, make a choice and make payment securely.</h3>
                                    </div><!-- /.iconbox -->
    
                                    <div class="iconbox iconbox-inline iconbox-circle iconbox-xxs flex-nowrap">
                                        <div class="iconbox-icon-wrap">
                                            <span class="iconbox-icon-container">
                                                <i class="icon-ion-ios-checkmark"></i>
                                            </span>
                                        </div><!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal font-size-16">Let us do the farming for you, and give you timely updates.</h3>
                                    </div><!-- /.iconbox -->
    
                                    <div class="iconbox iconbox-inline iconbox-circle iconbox-xxs flex-nowrap">
                                        <div class="iconbox-icon-wrap">
                                            <span class="iconbox-icon-container">
                                                <i class="icon-ion-ios-checkmark"></i>
                                            </span>
                                        </div><!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal font-size-16">Get paid your capital + interest after end of cycle!</h3>
                                    </div><!-- /.iconbox -->

                                </div><!-- /.lqd-parallax-iconboxes -->

                            </div><!-- /.lqd-column col-md-6 col-md-offset-6 -->

                        </div><!-- /.row -->

                    </div><!-- /.lqd-column col-md-7 hidden-sm hidden-xs -->

                </div><!-- /.row -->
            </div><!-- /.container -->

        </section>

        <section class="vc_row pt-60 pb-60">
            <div class="container">
                <div class="row">

                    <div class="lqd-column col-md-12 text-center">

                        <header class="fancy-title text-center">
                            <h2 class="underlined font-size-12 ltr-sp-2">REAL TESTIMONIALS</h2>
                        </header>

                    </div><!-- /.lqd-column col-md-12 text-center -->

                    <div class="lqd-column col-md-12">

                        <div class="carousel-container carousel-nav-left px-md-5 mx-md-5">

                            <div class="row">

                                <div class="col-md-3 col-xs-12 mb-4 mb-md-0">

                                    <div class="carousel-items row testimonials-details w-100 row" data-lqd-flickity='{ "asNavFor": ".carousel-quotes-1", "rightToLeft": true }'>

                                        <div class="col-md-4 col-sm-3 col-xs-4">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
                                                <div class="testimonial-details">
                                                    <figure class="avatar">
                                                        <img src="./assets/demo/testimonials/testi-8.jpg" alt="Ivana Jones" />
                                                    </figure>
                                                    <div class="testimonial-info">
                                                        <h5 class="">Motunrayo Laniyan</h5>
                                                        <h6>Subscriber</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4 col-sm-3 col-xs-4">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
                                                <div class="testimonial-details">
                                                    <figure class="avatar">
                                                        <img src="./assets/demo/testimonials/testi-8.jpg" alt="Ivana Jones" />
                                                    </figure>
                                                    <div class="testimonial-info">
                                                        <h5 class="">Joseph Wande</h5>
                                                        <h6>Subscriber</h6>
                                                    </div><!-- /.testimonial-info -->
                                                </div><!-- /.testimonial-details -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4 col-sm-3 col-xs-4">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
                                                <div class="testimonial-details">
                                                    <figure class="avatar">
                                                        <img src="./assets/demo/testimonials/testi-8.jpg" alt="Ivana Jones" />
                                                    </figure>
                                                    <div class="testimonial-info">
                                                        <h5 class="">Usman Naibi</h5>
                                                        <h6>Subscriber</h6>
                                                    </div><!-- /.testimonial-info -->
                                                </div><!-- /.testimonial-details -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4 col-sm-3 col-xs-4">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
                                                <div class="testimonial-details">
                                                    <figure class="avatar">
                                                        <img src="./assets/demo/testimonials/testi-8.jpg" alt="Ivana Jones" />
                                                    </figure>
                                                    <div class="testimonial-info">
                                                        <h5 class="">Ogechi Idanta</h5>
                                                        <h6>Subscriber</h6>
                                                    </div><!-- /.testimonial-info -->
                                                </div><!-- /.testimonial-details -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-md-4 -->

                                    </div><!-- /.carousel-items -->

                                </div><!-- /.col-md-3 -->

                                <div class="col-md-8 col-md-offset-1 col-xs-offset-0 col-xs-12">

                                    <div class="carousel-items row testimonials-quotes row carousel-quotes-1" data-lqd-flickity='{ "prevNextButtons": true, "navStyle": 2, "navOffsets": { "nav": { "left": 15 } }, "rightToLeft": true }'>

                                        <div class="col-xs-12">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only">
                                                <div class="testimonial-quote">
                                                    <blockquote class="font-size-18 lh-225">
                                                        <p>I was a pioneer subscriber on iFish, and I can guarantee that I will definitely resubscribe for as many slots as possible. The service is seamless! I am a farmer from my office. :)</p>
                                                    </blockquote>
                                                </div><!-- /.testimonial-quote -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-xs-12 -->

                                        <div class="col-xs-12">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only">
                                                <div class="testimonial-quote">
                                                    <blockquote class="font-size-18 lh-225">
                                                        <p>I was a pioneer subscriber on iFish, and I can guarantee that I will definitely resubscribe for as many slots as possible. The service is seamless! I am a farmer from my office. :)</p>
                                                    </blockquote>
                                                </div><!-- /.testimonial-quote -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-xs-12 -->

                                        <div class="col-xs-12">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only">
                                                <div class="testimonial-quote">
                                                    <blockquote class="font-size-18 lh-225">
                                                        <p>I was a pioneer subscriber on iFish, and I can guarantee that I will definitely resubscribe for as many slots as possible. The service is seamless! I am a farmer from my office. :)</p>
                                                    </blockquote>
                                                </div><!-- /.testimonial-quote -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-xs-12 -->

                                        <div class="col-xs-12">
                                            <div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only">
                                                <div class="testimonial-quote">
                                                    <blockquote class="font-size-18 lh-225">
                                                        <p>I was a pioneer subscriber on iFish, and I can guarantee that I will definitely resubscribe for as many slots as possible. The service is seamless! I am a farmer from my office. :)</p>
                                                    </blockquote>
                                                </div><!-- /.testimonial-quote -->
                                            </div><!-- /.testimonial -->
                                        </div><!-- /.col-xs-12 -->

                                    </div><!-- /.carousel-items -->

                                </div><!-- /.col-md-8 -->

                            </div><!-- /.row -->
                            
                        </div><!-- /.carousel-container -->

                    </div><!-- /.lqd-column col-md-12 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        

        

        
    </main><!-- /#content.content -->
    
    <footer class="main-footer bg-tundora pt-70" data-sticky-footer="true">

        <section class="pb-4">

            <div class="container">
                <div class="row">
    
                    <div class="lqd-column col-md-6 mb-5 mb-md-0">
    
                        <figure>
                            <img src="./assets/img/logo/voguish-light.png" alt="Voguish">
                        </figure>
    
                    </div><!-- /.col-md-6 -->
    
                    <div class="lqd-column col-md-6">
    
                        <div class="one-bullet-list">
                            <ul class="reset-ul inline-nav">
                                <li>Easy Subsciption</li>
                                <li>Timely Updates</li>
                                <li>Guaranteed Payments</li>
                            </ul>
                        </div>
    
                    </div><!-- /.col-md-6 -->
    
                </div><!-- /.row -->
            </div><!-- /.container -->

        </section>

        <section>
            <div class="container bt-fade-white-015 pt-60 pb-60">
                <div class="row d-flex flex-wrap">
    
                    <div class="lqd-column col-md-4 col-sm-12">
    
                        <p>
                            hello@ifish.ng
                            <br>
                            <br>
                            No 20, Alex Ekwueme Street<br>
                            Jabi, Abuja, Nigeria.
                            <br>
                            <br>
                            +234 903 399 3492
                        </p>
    
                    </div><!-- /.col-md-4 -->
    
                    <div class="lqd-column col-md-2 col-sm-6">

                        <ul class="lqd-custom-menu reset-ul font-size-16 lh-2">
                            <li class="mb-1"><a href="#content" target="_blank">Home</a></li>
                            <li class="mb-1"><a href="#about" target="_blank">About Us</a></li>
                            <li class="mb-1"><a href="#features" target="_blank">How It Works</a></li>
                        </ul>

                    </div><!-- /.lqd-column col-md-2 col-sm-6 -->
    
                    <div class="lqd-column col-md-2 col-sm-6">

                        <ul class="lqd-custom-menu reset-ul font-size-16 lh-2">
                            <li class="mb-1"><a href="#" target="_blank">Facebook</a></li>
                            <li class="mb-1"><a href="#" target="_blank">Instagram</a></li>
                            <li class="mb-1"><a href="#" target="_blank">Pinterest</a></li>
                        </ul>

                    </div><!-- /.lqd-column col-md-2 col-sm-6 -->

                    <div class="lqd-column col-md-4 col-sm-12 mt-5 mt-md-0">

                        <div class="ld-sf ld-sf--input-solid ld-sf--button-solid ld-sf--size-md ld-sf--circle ld-sf--border-thin ld-sf--button-show ld-sf--button-inline">
                            <form id="ld_subscribe_form" class="ld_sf_form" action="https://liquid-themes.us20.list-manage.com/subscribe/post?u=7f582d555cef808a99ea001a7&amp;id=58ab120d89" name="mc-embedded-subscribe-form" method="post">
                                <p class="ld_sf_paragraph pr-2">
                                    <input type="email" class="ld_sf_text" id="mce-EMAIL" name="EMAIL" placeholder="Your email" value="">
                                </p>
                                <button type="submit" class="ld_sf_submit px-4">
                                    <span class="submit-icon">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="ld-sf-spinner">
                                        <span>Sending </span>
                                    </span>
                                </button>
                            </form>
                            <div class="ld_sf_response"></div>
                        </div><!-- /.ld-sf -->

                    </div><!-- /.lqd-column col-md-4 -->
    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        
    </footer><!-- /.main-footer -->
    
</div><!-- /#wrap -->

<script src="./assets/vendors/jquery.min.js"></script>
<script src="./assets/js/theme-vendors.js"></script>
<script src="./assets/js/theme.min.js"></script>
<script src="./assets/js/liquidAjaxMailchimp.min.js"></script>

</body>
</html>