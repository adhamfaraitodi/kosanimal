<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kosanimal Website</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo-kosanimal.webp')}}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/LineIcons.2.0.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve
    your experience and security.
</p>
<![endif]-->

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- /End Preloader -->

<!-- ========================= header start ========================= -->
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand">
                            <img src="{{asset('img/logo-kosanimal.webp')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbar">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#char">Character</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#history">History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#product">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#collab">Collaboration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
<!-- ========================= header end ========================= -->
<!-- Start Hero Area -->
<section class="hero-slider" id="home" >
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 co-12">
                    <div class="home-slider">
                        <div class="hero-text">
                            <span class="small-title wow fadeInUp" data-wow-delay=".3s">Business Solution</span>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s"><span>We Provide Quality</span><br>
                                Consulting Services</h1>
                            <p class="wow fadeInUp" data-wow-delay=".7s">Lorem Ipsum is simply dummy text of the
                                printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard
                                <br>dummy text ever since.</p>
                            <div class="button wow fadeInUp" data-wow-delay=".9s">
                                <a href="about.blade.php" class="btn mouse-dir">Discover More <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <div class="hero-text">
                            <span class="small-title">Business Solution</span>
                            <h1><span>We Provide Quality</span><br> Consulting Services</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem
                                Ipsum has been the industry's standard <br>dummy text ever since.</p>
                            <div class="button">
                                <a href="about.blade.php" class="btn mouse-dir">Discover More <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <div class="hero-text">
                            <span class="small-title">Business Solution</span>
                            <h1><span>We Provide Quality</span><br> Consulting Services</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem
                                Ipsum has been the industry's standard <br>dummy text ever since.</p>
                            <div class="button">
                                <a href="about.blade.php" class="btn mouse-dir">Discover More <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Hero Area -->

<!-- Start Features Area -->
<section class="Features section" id="char" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="feature-right wow fadeInUp" data-wow-delay=".3s">
                    <div class="watch-inner">
                        <div class="video-head wow zoomIn" data-wow-delay="0.4s">
                            <a href="https://www.youtube.com/watch?v=BqI0Q7e4kbk" class="glightbox video"><i
                                    class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="feature-content">
                    <div class="title">
                        <span class="wow fadeInRight" data-wow-delay=".3s">Our Introduction</span>
                        <h3 class="wow fadeInRight" data-wow-delay=".5s">Consulting Market <br> Leader Experts</h3>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature-thumb">
                            <i class="lni lni-bar-chart"></i>
                        </div>
                        <div class="banner-content">
                            <h2 class="title">Grow Your Business With US</h2>
                            <p>Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna ac.
                                Vivamus dignissim sapien amet vivamu</p>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="feature-thumb">
                            <i class="lni lni-checkmark-circle"></i>
                        </div>
                        <div class="banner-content">
                            <h2 class="title">Fast Loan Approval</h2>
                            <p>Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna ac.
                                Vivamus dignissim sapien amet vivamu</p>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="feature-thumb">
                            <i class="lni lni-support"></i>
                        </div>
                        <div class="banner-content">
                            <h2 class="title">Life Time Support</h2>
                            <p>Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna ac.
                                Vivamus dignissim sapien amet vivamu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Service Area -->
<section class="services section" id="history">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">What We Offer You</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Services</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                    <div class="serial">
                        <span><i class="lni lni-code"></i></span>
                    </div>
                    <h3><a href="service-single.html">Web Solution</a></h3>
                    <p>Need A Project Completed By An Expert? Let’s Go! Access A Human Resources Consultant To Answer Questions</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".3s">
                    <div class="serial">
                        <span><i class="lni lni-vector"></i></span>
                    </div>
                    <h3><a href="service-single.html">Graphics Design</a></h3>
                    <p>Need A Project Completed By An Expert? Let’s Go! Access A Human Resources Consultant To Answer Questions</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                    <div class="serial">
                        <span><i class="lni lni-ux"></i></span>
                    </div>
                    <h3><a href="service-single.html">Ui/Ux Design</a></h3>
                    <p>Need A Project Completed By An Expert? Let’s Go! Access A Human Resources Consultant To Answer Questions</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".5s">
                    <div class="serial">
                        <span><i class="lni lni-keyword-research"></i></span>
                    </div>
                    <h3><a href="service-single.html">Strategy & Research</a></h3>
                    <p>Need A Project Completed By An Expert? Let’s Go! Access A Human Resources Consultant To Answer Questions</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                    <div class="serial">
                        <span><i class="lni lni-seo"></i></span>
                    </div>
                    <h3><a href="service-single.html">SEO & Marketing</a></h3>
                    <p>Need A Project Completed By An Expert? Let’s Go! Access A Human Resources Consultant To Answer Questions</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".7s">
                    <div class="serial">
                        <span><i class="lni lni-bar-chart"></i></span>
                    </div>
                    <h3><a href="service-single.html">Growth Tracking</a></h3>
                    <p>Need A Project Completed By An Expert? Let’s Go! Access A Human Resources Consultant To Answer Questions</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Services Area -->

<section class="section free-version-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-7">
                <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s"
                              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Bizfinity
                            Free Lite</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">You are using
                        free lite version of Bizfinity</h2>
                    <p class="text-white wow fadeInUp" data-wow-delay=".6s"
                       style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please,
                        purchase full version of the template to get all pages, features and commercial license</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-5">
                <div class="contact-btn text-right text-lg-right button wow fadeInRight" data-wow-delay=".8s">
                    <a href="https://rebrand.ly/bizfinity-gg" rel="nofollow" class="btn mouse-dir">Purchase Now
                        <span class="dir-part"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table -->
<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Pricing Table</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Pricing Plan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".3s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Basic <span>for small business</span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>29<span class="duration">/mo</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>3 Users</li>
                        <li>Unlimited Projects</li>
                        <li>Download Prototypes</li>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Get Started <span class="dir-part"></span></a>
                    </div>
                    <!-- Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".5s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Standard <span>for companies</span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>59<span class="duration">/mo</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>5 Users</li>
                        <li>Unlimited Projects</li>
                        <li>Download Prototypes</li>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Get Started <span class="dir-part"></span></a>
                    </div>
                    <!-- Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".7s">
                    <p class="popular">Popular</p>
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Professonal <span>for small business</span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>79<span class="duration">/mo</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>8 Users</li>
                        <li>Unlimited Projects</li>
                        <li>Download Prototypes</li>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Get Started <span class="dir-part"></span></a>
                    </div>
                    <!-- Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".9s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Most Popular <span>for small business</span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>99<span class="duration">/mo</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>10 Users</li>
                        <li>Unlimited Projects</li>
                        <li>Download Prototypes</li>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Get Started <span class="dir-part"></span></a>
                    </div>
                    <!-- Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </div>
</section>
<!--/ End Pricing Table -->

<!-- Start Clients Area -->
<section class="client-logo-section">
    <div class="container">
        <div class="client-logo-wrapper">
            <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                <div class="client-logo">
                    <img src="assets/images/client1.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client2.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client3.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client4.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client5.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client2.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client3.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client4.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/images/client5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients Area -->

<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text wow fadeInLeft" data-wow-delay=".3s">
                    <h6>Sign up for Newsletter</h6>
                    <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form wow fadeInRight" data-wow-delay=".5s">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                               required="" type="email">
                        <div class="button">
                            <button class="btn mouse-dir white-bg">Subscribe Now! <span
                                    class="dir-part"></span></button>
                        </div>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>
    </div>
</section>
<!-- /End Newsletter Area -->

<!-- Start Footer Area -->
<footer class="footer">
    <!-- Start Middle Top -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12">
                    <!-- Single Widget -->
                    <div class="f-about single-footer">
                        <div class="logo">
                            <a href="index.html"><img src="eassets/images/logo.svg" alt="#"></a>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-5 col-md-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="#">About Comapny</a></li>
                                    <li><a href="#">World Wide Clients</a></li>
                                    <li><a href="#">Happy People’s</a></li>
                                    <li><a href="#">Winning Awards</a></li>
                                    <li><a href="#">Company Statics</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact f-link">
                                <h3>Contact Us</h3>
                                <p>Untrammelled & nothing preven our being able</p>
                                <ul class="footer-contact">
                                    <li><i class="lni lni-phone"></i> <a href="#">+012 (345) 6789</a></li>
                                    <li><i class="lni lni-envelope"></i> <a
                                            href="mailto:support@gmail.com">support@gmail.com</a></li>
                                    <li><i class="lni lni-map-marker"></i> Broklyn Street USA</li>
                                    <li><i class="lni lni-world"></i> <a href="#">www.yoursite.com</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer gallery">
                        <h3>Instagram Feed</h3>
                        <ul class="list">
                            <li><a href="#"><img src="assets/images/gallery1.jpg" alt="#"><i
                                        class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><img src="assets/images/gallery2.jpg" alt="#"><i
                                        class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><img src="assets/images/gallery3.jpg" alt="#"><i
                                        class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><img src="assets/images/gallery4.jpg" alt="#"><i
                                        class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><img src="assets/images/gallery5.jpg" alt="#"><i
                                        class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><img src="assets/images/gallery6.jpg" alt="#"><i
                                        class="lni lni-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Middle -->
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="left">
                            <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow"
                                                           target="_blank">GrayGrids</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="right">
                            <p>All Right Reserved Design By Bizfinity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Middle -->
</footer>
<!--/ End Footer Area -->

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- ========================= JS here ========================= -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/count-up.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.min.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript">
    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=BqI0Q7e4kbk&t=1s',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });

    //====== Clients Logo Slider
    tns({
        container: '.client-logo-carousel',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1170: {
                items: 6,
            }
        }
    });

    //======== Home Slider
    var slider = new tns({
        container: '.home-slider',
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: true,
        controls: false,
        controlsText: [
            '<i class="lni lni-arrow-left prev"></i>',
            '<i class="lni lni-arrow-right next"></i>'
        ],
        responsive: {
            1200: {
                items: 1,
            },
            992: {
                items: 1,
            },
            0: {
                items: 1,
            }

        }
    });

    //======== Testimonial Slider
    var slider = new tns({
        container: '.testimonial-slider',
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: true,
        controls: false,
        controlsText: [
            '<i class="lni lni-arrow-left prev"></i>',
            '<i class="lni lni-arrow-right next"></i>'
        ],
        responsive: {
            1200: {
                items: 2,
            },
            992: {
                items: 1,
            },
            0: {
                items: 1,
            }

        }
    });

    //============== isotope masonry js with imagesloaded
    imagesLoaded('#container', function () {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
            // options
            itemSelector: '.grid-item',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
            }
        });

        let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
        filterButtons.forEach(e =>
            e.addEventListener('click', () => {

                let filterValue = event.target.getAttribute('data-filter');
                iso.arrange({
                    filter: filterValue
                });
            })
        );
    });
</script>
</body>

</html>
