@include('layouts.header')

<!-- Page Title Section Start -->
<div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7" data-bg-image="{{('public/assets/images/bg/breadcrumb-bg-five.jpg')}}">
            <div class="page-title">
                <div class="container">
                    <h1 class="title">We are an agency located in India</h1>
                </div>
            </div>
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="current">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->

        <!-- Contact Information Section Start -->
        <div class="section section-padding-t90-b100">
            <div class="container shape-animate">
                <!-- Section Title Start -->
                <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                    <h2 class="title">We are a full-service creative agency</h2>
                    <p class="sub-title">Our team of designers, developers and creatives are perfectionists
                        who love what they do and love where they work</p>
                </div>
                <!-- Section Title End -->

                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="{{asset('public/assets/images/svg/linea/linea-basic-map.svg')}}" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Mohali Office</h4>
                                <span class="info-text"> Plot No F-33, Phase 8, Industrial Area, <br> Sahibzada Ajit Singh Nagar,<br> Punjab 160059, India <br>
                                    </span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </div>
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="{{asset('public/assets/images/svg/linea/linea-basic-map.svg')}}" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Delhi Office</h4>
                                <span class="info-text"> Plot no. H-9
                                    Shop number G-70
                                    Vardhman corporate plaza
                                    Nsp pitampura
                                    Delhi 110034
                                    </span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </div>
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="{{asset('public/assets/images/svg/linea/linea-basic-mail-open-text.svg')}}" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title"> Help Desk</h4>
                                <span class="info-text">
                                    <a href="#"> info@stealthtechnocrats.com</a>
                                    <br>
                                    <a href="#"></a>
                                  Mobile:  +91-7508636633
 </span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </div>
                </div>

                <!-- Animation Shape Start -->
                <div class="shape shape-1 scene">
                    <span data-depth="4"><img src="{{asset('public/assets/images/shape-animation/video-shape-1.png')}}" alt="shape"></span>
                </div>
                <!-- Animation Shape End -->

            </div>
        </div>
        <!-- Contact Information Section End -->

        <!--Google Map Area Start-->
        <!-- <div class="google-map-area section text-center section-padding-bottom">
            <div class="container">
                <div class="contact-map-area">
          <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div> -->
        <!--Google Map Area Start-->

        <!-- Contact Form Section Start -->
        <div class="contact-form-section section section-padding-t90-b100" data-bg-color="#f8faff">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <!-- Section Title Start -->
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2 class="title fz-32">Let’s talk about your project</h2>
                            <p class="sub-title">We have made it easy for clients to reach us
                                and get their solutions weaved</p>
                        </div>
                        <!-- Section Title End -->
                        <div class="contact-form">
                          <!-- <form action="{{asset('public/assets/php/contact-mail.php')}}" id="contact-form" method="post"> -->
                          <form method="post" id="contactForm">
                          @csrf
                           <!-- <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}"> -->
                           <div class="message"> </div>
                          <div class="row mb-n6">
                                  <div class="col-md-6 col-12 mb-6"> 
                                   <input type="text" placeholder="Your Name *" id="name" name="name">
                                    </div>
                                    <div class="col-md-6 col-12 mb-6">
                                        <input type="email" placeholder="Email *"  id="email" name="email">
                                    </div>
                                    <div class="col-md-12 col-12 mb-6">
                                        <input type="text" placeholder="Subject *"  id="subject" name="subject">
                                    </div>
                                    <div class="col-12 mb-6">
                                        <textarea name="message" placeholder="Message"  id="message"></textarea>
                                    </div>
                                    <div class="col-12 text-center mb-6">
                                        <button type="button" class="btn btn-primary btn-hover-secondary"  id="butsave">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form Section End -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function() {
   $('#butsave').on('click', function() {
     var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var subject = $("input[name=subject]").val();
    var message = $("textarea[name=message]").val();
  //  var token =  "{{ csrf_token() }}";
  jQuery.ajax({
       url:"{{route('contact')}}",
       type: "POST",
       data:{
         "_token": "{{ csrf_token() }}",
              name:name, 
              email:email, 
              subject:subject, 
              message:message
            },
         success:function(response){
             if(response==1){
                $('#contactForm')[0].reset();
              $(".message").text('Form submit successfully').delay(5000).fadeOut();;
              
             }
             else{
                alert('fail');
             }
       },
       error:function(error){
          console.log(error)
       }
    })
})
});
</script>

@include('layouts.footer')