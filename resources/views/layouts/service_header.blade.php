<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stealth Technocrats</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Icon Font) -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/vendor/muli-font.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!--
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.animatedheadline.css">
     -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Stealth Technocrats</title>

</head>

<body class="service_header">

    <div id="page" class="section">
        <!-- Header Section Start -->
        <div class="header-section header-transparent sticky-header section">
            <div class="header-inner">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-auto order-0">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="{{asset('public/assets/images/logo/logo.png')}}" alt="Agency Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Main Menu Start -->
                        <div class="col-auto col-xl d-flex align-items-center justify-content-xl-center justify-content-end order-2 order-xl-1">
                            <div class="menu-column-area d-none d-xl-block position-static">
                                <nav class="site-main-menu">
                                    <ul>
                                        <li>
                                        <!-- <li class="has-children"> -->
                                            <a href="{{url('/')}}"><span class="menu-text">Home</span></a>
                                            <!-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="index.html"><span class="menu-text">Home One</span></a></li>
                                                <li><a href="index-2.html"><span class="menu-text">Home Two</span></a></li>
                                                <li><a href="index-3.html"><span class="menu-text">Home Three</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a href="{{url('about-us')}}"><span class="menu-text">About Us</span></a>
                                        </li>
                                        <!-- <li>
                                            <a href="{{url('services')}}"><span class="menu-text">Services</span></a>
                                        </li> -->
                                        <li class="has-children">
                                            <a href="{{url('blog-classic')}}"><span class="menu-text">Services</span></a>
                                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul id="services-menu" class="sub-menu">
                                                <!-- <li><a href="blog-grid.html"><span class="menu-text">Blog Grid</span></a></li> -->
                                                <li>
                                                    <a href="javascript:void(0)"><span class="menu-text">Design</span></a>
                                                    <ul>
                                                        <li><a href="{{url('mobile-first-design')}}">Mobile First Design</a></li>
                                                        <li><a href="{{url('psd-to-html')}}">PSD TO HTML</a></li>
                                                        <li><a href="{{url('ui-ux-design')}}">UI/UX Design</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span class="menu-text">Development</span></a>
                                                    <ul>
                                                        <li><a href="{{url('nodejs-development-service')}}">NodeJS Development</a></li>
                                                        <li><a href="{{url('reactjs-development')}}">ReactJS</a></li>
                                                        <li><a href="{{url('codeigniter-development')}}">Codeigniter Development</a></li>
                                                        <li><a href="{{url('laravel-development')}}">Laravel Development</a></li>
                                                        <li><a href="{{url('php-framework')}}">PHP Framework</a></li>
                                                        <li><a href="{{url('angularjs-development')}}">AngularJS</a></li>
                                                        <li><a href="{{url('asp-net-framework')}}">ASP.net</a></li>
                                                        <li><a href="{{url('java-development')}}">Java</a></li>
                                                        <li><a href="{{url('ios-app-development')}}">IOS Development</a></li>
                                                        <li><a href="{{url('android-app-development')}}">Android App Development</a></li>
                                                        <li><a href="{{url('react-native-development')}}">React Native Development</a></li>
                                                        <li><a href="{{url('wordpress-development')}}">Wordpress</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span class="menu-text">Digital Marketing</span></a>
                                                    <ul> 
                                                        <li><a href="{{url('local-seo-services')}}">Local SEO Services</a></li>
                                                        <li><a href="{{url('enterprise-seo-services')}}">Enterprise SEO</a></li>
                                                        <li><a href="{{url('startup-seo-services')}}">Startup SEO Services</a></li>
                                                        <li><a href="{{url('e-commerce-seo-services')}}">E-Commerce SEO Services</a></li>
                                                        <li><a href="{{url('amazon-seo-services')}}">Amazon SEO Services</a></li>
                                                        <li><a href="{{url('magento-seo-services')}}">Magento SEO Services</a></li>
                                                        <li><a href="{{url('woocommerce-seo-service')}}">WooCommerce SEO Service</a></li>
                                                        <li><a href="{{url('shopify-seo-services')}}">Shopify SEO Services</a></li>
                                                        <li><a href="{{url('guest-blogging-services')}}">Guest Blogging Services</a></li>
                                                        <li><a href="{{url('mobile-seo-services')}}">Mobile SEO</a></li>
                                                        <li><a href="{{url('facebook-advertising-services')}}">Facebook Advertising</a></li>
                                                        <li><a href="{{url('instagram-marketing-services')}}">Instagram Advertising</a></li>
                                                        <li><a href="{{url('twitter-marketing-services')}}">Twitter Marketing</a></li>
                                                        <li><a href="{{url('linkedin-marketing-services')}}">LinkedIn Marketing</a></li>
                                                        <li><a href="{{url('youtube-marketing-services')}}">YouTube Marketing</a></li>
                                                        <li><a href="{{url('pinterest-marketing-services')}}">Pinterest Marketing</a></li>
                                                        <li><a href="{{url('google-ads-services')}}">Google Ads</a></li>
                                                        <li><a href="{{url('facebook-ads-services')}}">Facebook Ads</a></li>
                                                        <li><a href="{{url('linkedin-ads-services')}}">Linkdin Ads</a></li>
                                                        <li><a href="{{url('youtube-ads-services')}}">YouTube Ads</a></li>
                                                        <li><a href="{{url('instagram-ads-services')}}">Instagram Ads</a></li>
                                                        <li><a href="{{url('pinterest-ads-services')}}">Pinterest Ads</a></li>
                                                        <li><a href="{{url('review-management-services')}}">Review Management Service</a></li>
                                                        <li><a href="{{url('enterprise-reputation-management')}}">Enterprise Reputation Management</a></li>
                                                        <li><a href="{{url('start-up-reputation-management')}}">Start Up Reputation Management</a></li>
                                                  </ul>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="">
                                            <a href="{{url('work')}}"><span class="menu-text">Portfolios</span></a>
                                            <!-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                 <li><a href="work.html"><span class="menu-text">Work</span></a></li> 
                                                <li><a href="{{url('work-details')}}"><span class="menu-text">Work Details</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="">
                                            <a href="{{url('blog-classic')}}"><span class="menu-text">Blog</span></a>
                                            <!-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html"><span class="menu-text">Blog Grid</span></a></li> 
                                                <li><a href="{{url('blog-classic')}}"><span class="menu-text">Blog Classic</span></a></li>
                                                <li><a href="{{url('blog-details')}}"><span class="menu-text">Blog Details</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a href="{{url('contact-us')}}"><span class="menu-text">Contact Us</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Search Start -->
                            <div class="header-search-area ml-xl-7 ml-0">

                                <!-- Header Login Start -->
                                <div class="header-search">
                                    <a href="javascript:void(0)" class="header-search-toggle"><i class="pe-7s-search pe-2x pe-va"></i></a>
                                </div>
                                <!-- Header Login End -->
                            </div>
                            <!-- Header Search End -->

                            <!-- Header Mobile Menu Toggle Start -->
                            <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                                <button class="toggle">
                                    <i class="icon-top"></i>
                                    <i class="icon-middle"></i>
                                    <i class="icon-bottom"></i>
                                </button>
                            </div>
                            <!-- Header Mobile Menu Toggle End -->
                        </div>
                        <!-- Header Main Menu End -->

                        <!-- Header Right Start -->
                        <div class="col-xl-2 col d-none d-sm-flex justify-content-end order-1 order-xl-2">
                            <a href="#" class="btn btn-light btn-hover-primary">Buy Now</a>
                        </div>
                        <!-- Header Right End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section End -->

  <!-- Main Search Start -->
  <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="pe-7s-close"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- Main Search End -->
