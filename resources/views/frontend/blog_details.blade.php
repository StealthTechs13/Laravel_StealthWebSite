
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
                            <!-- Blog Start -->
                            <div class="blog-3 blog-details col" data-aos="fade-up">
                                <div class="thumbnail">
                                    <img class="w-100" src="{{env('IMAGE_URL')}}/{{ $blogdetail->image }}" alt="Blog Image">
                                </div>
                                <div class="info">
                                    <h3 class="title">{{ $blogdetail->blog_title}}</h3>

                                    <div class="desc">
                                         {!!$blogdetail->description!!}
                                       </div>
                                    <ul class="meta mb-0 mt-12">
                                        <li><i class="fal fa-pencil-alt"></i>Posted by: Stealth,{{ $blogdetail->postdate}}</li>
                                        <li><i class="fas fa-tags"></i>Marketing, UX Design</li>
                                        <li><i class="fas fa-comments"></i>4 Comments</li>
                                        <li class="media"><a href="#"><i class="fas fa-share-alt"></i>Share this post</a>
                                            <div class="list">
                                                <a href="JavaScript:Void(0);"><i class="fab fa-facebook-f"></i></a>
                                                <a href="JavaScript:Void(0);"><i class="fab fa-twitter"></i></a>
                                                <a href="JavaScript:Void(0);"><i class="fab fa-linkedin"></i></a>
                                                <a href="JavaScript:Void(0);"><i class="fab fa-tumblr-square"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Blog End -->

                            <div class="entry-author">
                                <div class="author-info">
                                    <div class="author-avatar">
                                        <img src="{{asset('public/assets/images/author/blog-author.png')}}" alt="">
                                    </div>
                                    <div class="author-description">
                                        <h6 class="author-name">Eloise Smith</h6>
                                        <span class="designation">CEO at Flow</span>
                                        <div class="author-biographical-info">
                                            She is a lawyer, podcaster, speaker, and writer. As an educational content director, she helps develop HasThemes' premium training products.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-nav-links">
                                <h4 class="title">Related Posts </h4>
                                <div class="nav-list">
                                    <div class="nav-item prev">
                                        <div class="inner">
                                            <a href="#">
                                                <div class="hover-bg has-thumbnail" data-bg-image="{{asset('public/assets/images/pagination/blog-pagination.jpg')}}"></div>
                                                <span class="cate">Marketing</span>
                                                <h6>Eleven top tips for developing agile marketing strategies that work</h6>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="nav-item next">
                                        <div class="inner">
                                            <a href="#">
                                                <div class="hover-bg has-thumbnail" data-bg-image="{{asset('public/assets/images/pagination/blog-pagination-2.jpg')}}"></div>
                                                <span class="cate">Startup</span>
                                                <h6>Growing a startup involves balancing out the financial stack</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-list-wrapper">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="title">Comments (4) </h4>
                                    </div>
                                    <div class="col-lg-12">

                                        <ol class="comment-list">
                                            <li class="comment">
                                                <div class="comment-2">
                                                    <div class="comment-author vcard">
                                                        <img alt="" src="{{asset('public/assets/images/comment/comment1.png')}}">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="meta">
                                                            <h6 class="fn">Thomas Smith</h6>
                                                            <div class="comment-datetime"> 10 Oct, 2019. 10:00AM </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>An interesting article​ about ​content marketing. It has evolved moving from If you are interested in content marketing, have a look at the article's traditional media into the digital landscape.</p>
                                                        </div>

                                                        <div class="comment-actions">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- comment End-->
                                            <li class="children comment">
                                                <div class="comment-6">
                                                    <div class="comment-author vcard">
                                                        <img alt="" src="{{asset('public/assets/images/comment/comment2.png')}}">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="meta">
                                                            <h6 class="fn">Eloise Smith</h6>
                                                            <div class="comment-datetime">10 Oct, 2019. 10:00AM</div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>An interesting article​ about ​content marketing. It has evolved moving from If you are interested in content marketing, have a look at the article's traditional media into the digital landscape.</p>
                                                        </div>

                                                        <div class="comment-actions">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- comment End -->
                                            <li class="comment">
                                                <div class="comment-2">
                                                    <div class="comment-author vcard">
                                                        <img alt="" src="{{asset('public/assets/images/comment/comment3.png')}}">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="meta">
                                                            <h6 class="fn">Stella Smith</h6>
                                                            <div class="comment-datetime"> 10 Oct, 2019. 10:00AM </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>An interesting article​ about ​content marketing. It has evolved moving from If you are interested in content marketing, have a look at the article's traditional media into the digital landscape.</p>
                                                        </div>

                                                        <div class="comment-actions">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- comment End-->
                                            <li class="comment">
                                                <div class="comment-5">
                                                    <div class="comment-author vcard">
                                                        <img alt="" src="{{asset('public/assets/images/comment/comment4.png')}}">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="meta">
                                                            <h6 class="fn">Vincent Smith</h6>
                                                            <div class="comment-datetime">10 Oct, 2019. 10:00AM</div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>An interesting article​ about ​content marketing. It has evolved moving from If you are interested in content marketing, have a look at the article's traditional media into the digital landscape.</p>
                                                        </div>

                                                        <div class="comment-actions">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- comment End-->
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-form-wrap">
                                <div class="comment-respond">
                                    <h3 class="title">Leave a Reply</h3>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-3">
                                                <input type="text" placeholder="Your Name *" name="name">
                                            </div>
                                            <div class="col-md-6 col-12 mb-3">
                                                <input type="email" placeholder="Email *" name="email">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <textarea name="message" placeholder="Your Comment"></textarea>
                                            </div>
                                            <div class="col-12 text-left">
                                                <button class="btn btn-primary btn-hover-secondary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- Blog Wrapper End -->
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
                                    <div class="sidebar-widget-banner" data-overlay="0.7" data-bg-image="{{asset('public/assets/images/bg/banner.jpg')}}">
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
                    <div class="col-lg-12 m-auto">
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
                <span data-depth="3">
                    <img src="{{asset('public/assets/images/shape-animation/newsletter-shape.png')}}" alt="">
                </span>
            </div>
            <!-- Animation Shape End -->
        </div>
        <!-- CTA Section End -->

@include('layouts.footer')