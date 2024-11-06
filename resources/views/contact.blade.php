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
                            <h1>Hubungi Kami</h1>
                        </div>
                        <ul class="bread-crumb pull-right clearfix">
                            <li><a href="index">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <div class="sec-title left">
                            <p>Hubungi Kami</p>
                            <h2>Kami Senang Mendengar Dari Anda.</h2>
                            <span class="separator"></span>
                        </div>
                        <form method="post" action="sendemail.php" id="contact-form" class="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn style-one" name="submit-form">Kirim Sekarang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-inner">
                        <div class="sec-title left">
                            <p>Informasi Kontak</p>
                            <h2>Kontak Kami</h2>
                            <span class="separator"></span>
                        </div>
                        <ul class="info-box clearfix">
                            <li>
                                <div class="icon-box"><i class="flaticon-call"></i></div>
                                <h5>Nomor Telepon</h5>
                                <p><a href="tel:02518319169">0251-8319169</a></p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-circular-clock"></i></div>
                                <h5>Jam Operasional</h5>
                                <p>8:00 am - 6:00 pm</p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-worldwide"></i></div>
                                <h5>Alamat</h5>
                                <p>Gedung LPPM, IPB University, Kampus IPB Baranangsiang.</p>
                            </li>
                        </ul>
                        <div class="follow-box">
                            <h5>Ikuti Kami:</h5>
                            <ul class="social-links clearfix">
                                <li><a href="contact"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="contact"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="contact"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="contact"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="auto-container">
            <div class="map-column">
                <div class="google-map-area">
                    <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="40.712776"
                        data-map-lng="-74.005974"
                        data-icon-path="assets/images/icons/map-marker.png"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/shape/map-marker.png"]
                        }'>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- newsletter-section -->
    <section class="newsletter-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
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
