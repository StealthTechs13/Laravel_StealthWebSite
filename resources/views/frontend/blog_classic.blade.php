<!--  -->
@include('layouts.header')
 <!-- Page Title Section Start -->
 <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7" data-bg-image="{{asset('public/assets/images/bg/breadcrumb-bg-four.jpg')}}">
            <div class="page-title">
                <div class="container">
                    <h1 class="title">Find all our latest news, insights, and events</h1>
                </div>
            </div>
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="current">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->

        <!-- Blog Section Start -->
        <div class="section section-padding fix">
            <div class="container">
                <div class="row mb-n10">

                    <div class="col-lg-8 col-12 order-lg-1 mb-10">
                        <!-- Blog Wrapper Start -->
                        <div class="row row-cols-1 no-gutters">
                        @foreach ($blog as $blogs)
                    
                            <!-- Blog Start -->
                            <div class="blog-3 col" data-aos="fade-up">
                                <div class="thumbnail">
                                    <a href="{{url('blog-details')}}" class="image"><img src="{{env('IMAGE_URL')}}/{{ $blogs->image }}" alt="Blog Image"></a>
                                </div>
                                <div class="info">
                                    <ul class="meta">
                                        <li><i class="fal fa-pencil-alt"></i>Posted by: Stealth , {{ $blogs->postdate }}</li>
                                        <li><i class="fas fa-tags"></i>Marketing, UX Design</li>
                                        <li><i class="fas fa-comments"></i>4 Comments</li>
                                    </ul>
                                    <h3 class="title"><a href="{{url('blog-details',$blogs->id)}}">{{ $blogs->blog_title }}</a></h3>
                                    <div class="desc">
                                    {!!$blogs->short_description!!}                              
                                      </div>
                                    <a href="{{url('blog-details',$blogs->id)}}" class="btn btn-primary btn-hover-secondary mt-6">Read More</a>
                                </div>
                            </div>
                            <!-- Blog End -->
                            @endforeach

                            
                        </div>
                        <!-- Blog Wrapper End -->

                        <!-- Pagination Start -->
                        <div class="row">
                            <div class="col">

                                <ul class="pagination center">
                                    <li><a href="#" class="prev"><i class="fal fa-angle-left"></i></a></li>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><span class="page-numbers dots"><i class="fal fa-ellipsis-h"></i></span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" class="next"><i class="fal fa-angle-right"></i></a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- Pagination End -->
                    </div>

                    <div class="col-lg-4 col-12 order-lg-2 mb-10">
                        <div class="sidebar-widget-wrapper">
                            <div class="sidebar-widget">
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-widget-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title mb-2">Categories</h3>
                                <div class="sidebar-widget-content">
                                    <ul class="sidebar-widget-cate-list">
                                        <li><a href="#"><span class="text">App</span> <span class="count">2</span></a></li>
                                        <li><a href="#"><span class="text">Marketing</span> <span class="count">8</span></a></li>
                                        <li><a href="#"><span class="text">UX Design</span> <span class="count">4</span></a></li>
                                        <li><a href="#"><span class="text">Startup</span> <span class="count">3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title mb-2">Popular Posts</h3>
                                <div class="sidebar-widget-content">
                                    <ul class="sidebar-widget-list-post">
                                        <li>
                                            <span class="cate">Marketing</span>
                                            <a href="#"> How your sales can work together in account-based marketing</a>
                                        </li>
                                        <li>
                                            <span class="cate">Busniess</span>
                                            <a href="#">The six things marketers need to understand about DTC marketing</a>
                                        </li>
                                        <li>
                                            <span class="cate">Marketing</span>
                                            <a href="#">Eleven top tips for developing agile marketing</a>
                                        </li>
                                        <li>
                                            <span class="cate">Agency</span>
                                            <a href="#"> How your sales can work together in account-based marketing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-widget-banner" data-overlay="0.7" data-bg-image="{{asset('public/assets/images/bg/breadcrumb-bg.jpg')}}">
                                        <h3 class="title">Subscribe to our newsletter</h3>
                                        <p>All the latest marketing news, including updates on brand campaigns, and the most interesting insights</p>
                                        <a href="#">Subscribe Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Popular tags</h3>
                                <div class="sidebar-widget-content">
                                    <div class="tagcloud">
                                        <a href="JavaScript:Void(0);">App</a>
                                        <a href="JavaScript:Void(0);">Branding</a>
                                        <a href="JavaScript:Void(0);">Development</a>
                                        <a href="JavaScript:Void(0);">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- CTA Section Start -->
        <div class="section section-padding-t110-b120 newsletter-section" data-bg-color="#000" data-overlay="0.7" data-bg-image="{{asset('public/assets/images/bg/newsletter.jpg')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-12 m-auto">
                        <!-- CTA Content Start -->
                        <div class="cta-content text-center">
                            <!-- Section Title Start -->
                            <div class="section-title color-light text-center mb-0" data-aos="fade-up">
                                <h2 class="title">Let’s find out how to work together</h2>
                                <p class="sub-title fz-18">Ready to start your project? The contact information collected through
                                    this form will only be used to send a response to your inquiry.</p>
                            </div>
                            <!-- Section Title End -->
                            <a href="#" class="btn btn-primary btn-hover-secondary mt-6">Get Started</a>
                        </div>
                        <!-- CTA Content End -->
                    </div>
                </div>
            </div>

            <!-- Animation Shape Start -->
            <div class="shape shape-1 scene">
                <span data-depth="1">
                    <img src="{{asset('public/assets/images/shape-animation/newsletter-shape.png')}}" alt="">
                </span>
            </div>
            <!-- Animation Shape End -->
        </div>
        <!-- CTA Section End -->
        @include('layouts.footer')