@include('layouts.header')
 <!-- Page Title Section Start -->
 <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7" data-bg-image="{{asset('public/assets/images/bg/breadcrumb-bg-two.jpg')}}">
            <div class="page-title">
                <div class="container">
                    <h1 class="title">We work with bold brands that we believe in</h1>
                </div>
            </div>
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="current">Work</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->

        <!-- Start Work Details -->
        <div class="section section-padding">
            <div class="container">
                <div class="row pt--100 pb--80">

                    <!-- Portfolio Left -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="work-left work-details" data-aos="fade-up">
                            <div class="portfolio-main-info">
                                <h2 class="title">About the <br> project</h2>
                                <!-- Start Details List -->
                                <div class="work-details-list mt-12">

                                    <div class="details-list">
                                        <label>Date</label>
                                        <span>28 Sep 2007</span>
                                    </div>

                                    <div class="details-list">
                                        <label>Client</label>
                                        <span>HighGrove Partners</span>
                                    </div>

                                    <div class="details-list">
                                        <label>Categories</label>
                                        <span><a href="#">Digital</a></span>
                                    </div>

                                    <div class="details-list">
                                        <label>Awards</label>
                                        <span>2015 Digital World Awards 2016 Finale Awards</span>
                                    </div>

                                </div>
                                <!-- End Details List -->
                                <!-- Start Work Share -->
                                <div class="work-share pt--70 pt_md--40 pt_sm--40">
                                    <h6 class="heading heading-h6">SHARE</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Work Right -->
                    <div class="col-lg-7 col-md-6 offset-lg-1 col-12">
                        <div class="work-left work-details mt-6">
                            <div class="work-main-info">
                                <div class="work-content">
                                    <h6 class="title" data-aos="fade-up">ABOUT THE PROJECT</h6>

                                    <div class="desc mt-8">
                                        <div class="content mb-5" data-aos="fade-up">
                                            <p>Digital marketing encompasses all marketing efforts
                                                that use an electronic device or the internet. Businesses leverage
                                                digital channels such as search engines, social media, email, and
                                                their websites to connect with current and prospective customers.</p>
                                        </div>
                                        <div class="content mb-5" data-aos="fade-up">
                                            <p>It is. In fact, ???constant??? internet usage among
                                                adults increased by 5% in just the last three years, according to
                                                Pew Research. And although we say it a lot, the way people shop and
                                                buy really has changed along with it ??? meaning offline marketing
                                                isn???t as effective as it used to be.</p>
                                        </div>
                                        <div class="content mb-12" data-aos="fade-up">
                                            <p>Marketing has always been about connecting with your
                                                audience in the right place and at the right time. Today, that
                                                means you need to meet them where they are already spending time:
                                                on the internet. (Source: blog.hubspot.com)</p>
                                        </div>

                                        <div class="work-btn">
                                            <a class="btn btn-primary btn-hover-secondary" href="#">Go to link</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Thumbnail -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="custom-column-thumbnail mt-lg-14 mt-1" data-aos="fade-up">
                            <img class="w-100" src="{{asset('public/assets/images/project/work-details-1.jpg')}}" alt="Agency">
                        </div>
                    </div>
                </div>

                <!-- Start Digital Marketion Area -->
                <div class="row mt-lg-20 mt-12">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="digital-marketing" data-aos="fade-up">
                            <h3 class="heading heading-h3">Digital Marketing.</h3>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12 offset-lg-1">
                        <div class="digital-marketing mt-lg-0 mt-6" data-aos="fade-up">
                            <div class="inner">
                                <p>Marketing has always been about connecting with your audience in
                                    the right place and at the right time. Today, that means you need to meet them
                                    where they are already spending time: on the internet. A seasoned inbound
                                    marketer might say inbound marketing and digital marketing are virtually the
                                    same thing, but there are some minor differences. And conversations with
                                    marketers and business owners in the U.S., U.K., Asia, Australia, and New
                                    Zealand, I've learned a lot about how those small differences are being
                                    observed across the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Digital Marketion Area -->

                <!-- Start Gallery Area -->
                <div class="custom-layout-gallery mt-lg-20 mt-12">
                    <div class="row mb-n6">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="thumbnail" data-aos="fade-up">
                                <img class="w-100" src="{{asset('public/assets/images/project/work-details-2.jpg')}}" alt="Agency">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-10">
                            <div class="thumbnail" data-aos="fade-up">
                                <img class="w-100" src="{{asset('public/assets/images/project/work-details-3.jpg')}}" alt="Agency">
                            </div>
                        </div>

                        <div class="col-lg-12 my-6">
                            <div class="thumbnail" data-aos="fade-up">
                                <img class="w-100" src="{{asset('public/assets/images/project/work-details-4.jpg')}}" alt="Agency">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Gallery Area -->


            </div>
        </div>
@include('layouts.footer')