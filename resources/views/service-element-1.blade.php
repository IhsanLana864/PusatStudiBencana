<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Pusat Studi Bencana IPB </title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="assets/css/switcher-style.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>

@include('layouts.navbar')
    <!--Page Title-->
    <section class="page-title" style="background-image: url(assets/images/background/page-title-2.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box clearfix">
                        <div class="title pull-left">
                            <h1>Sumber Daya</h1>
                        </div>
                        <ul class="bread-crumb pull-right clearfix">
                            <li><a href="index">Home</a></li>
                            <li>Sumber Daya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- service-section -->
    <section class="service-section bg-color-1 centred">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details"><img src="assets/images/service/service-1.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details">Pathology Testing</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                                <div class="link"><a href="service-details">Read More<i class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details"><img src="assets/images/service/service-2.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details">Chemical Research</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                                <div class="link"><a href="service-details">Read More<i class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details"><img src="assets/images/service/service-3.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details">Advanced Microscopy</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                                <div class="link"><a href="service-details">Read More<i class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- newsletter-section -->
    <section class="newsletter-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <h2>Subscribe Newsletter</h2>
                        <p>Stay in touch with us to get latest news and discount coupons</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <form action="index" method="post" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button class="theme-btn style-one" type="submit">Subscribe Now!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-section end -->

@include('layouts.footer')


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/tilt.jquery.js"></script>
<script src="assets/js/jQuery.style.switcher.min.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/map-helper.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
