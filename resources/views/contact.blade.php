<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Pusat Studi Bencana IPB UNIVERSITY </title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">

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
<section class="page-title" style="background-image: url(assets/images/banner/BannerPSB.png);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box clearfix">
                    <div class="title pull-left">
                        <h1>Hubungi Kami</h1>
                    </div>
                    <ul class="bread-crumb pull-right clearfix">
                        <li><a href="/index">Home</a></li>
                        <li><a href="/contact">Contact</a></li>
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
                    {{-- <form method="#" action="#" id="contact-form" class="contact-form"> --}}
                    <form action="#" id="contact-form" class="contact-form" onsubmit="return handleFormSubmit(event)">
                    <div class="row clearfix">
                        <!-- Form fields as before -->
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn style-one" name="submit-form">Coming soon</button>
                        </div>
                    </div>
                </form>

                <script>
                    function handleFormSubmit(event) {
                        event.preventDefault(); // Mencegah pengiriman form
                        window.location.href = '/contact'; // Mengarahkan ke halaman /contact
                        return false;
                    }
                </script>

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
                            <p>Kantor Pusat Studi Bencana IPB University, Kampus Baranangsiang , Jl. Raya Padjajaran,
                                Bogor 16144 </p>
                        </li>
                    </ul>
                    <div class="follow-box">
                        <h5>Ikuti Kami:</h5>
                        <ul class="social-links clearfix">
                            <li><a href="https://www.facebook.com/197139333803945/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="mailto:psb@apps.ipb.ac.id"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="https://www.instagram.com/psb_ipb"><span class="fab fa-instagram"></span></a>
                            </li>
                            <li><a href="https://x.com/IpbPsb"><i class="fab fa-twitter"></i></a></li>
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
                <div style="overflow:hidden;resize:none;max-width:100%;width:1200px;height:600px;">
                    <div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe
                            style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/directions?origin=Sekolah+Vokasi+IPB&destination=Kantor+Pusat+Studi+Bencana+IPB+University,+Kampus+Baranangsiang+,+Jl.+Raya+Padjajaran,+Bogor+16144+&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div><a class="googlemaps-made" href="https://www.bootstrapskins.com/themes"
                        id="authmaps-data">premium bootstrap themes</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- google-map-section end -->


x



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
