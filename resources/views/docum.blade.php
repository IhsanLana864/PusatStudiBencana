<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Dokumentasi - Pusat Studi Bencana IPB UNIVERSITY </title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
<link href="{{ asset('assets/css/switcher-style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

@include('layouts.navbar')

<!--Page Title-->
<section class="page-title" style="background-image: url({{ asset('assets/images/banner/BannerPSB.png') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box clearfix">
                    <div class="title pull-left">
                        <h1>Dokumentasi</h1>
                    </div>
                    <ul class="bread-crumb pull-right clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Dokumentasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- project-section -->
<div class="sec-title dokumen">
    <p>Pusat Studi Bencana IPB UNIVERSITY</p>
    <h2>Dokumentasi</h2>
    <span class="separator"></span>
</div>
<section class="project-section research-pagedokumentasi centred">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach($dokumentasis as $dokumentasi)
                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="line-one"></div>
                            <div class="line-two"></div>
                            <figure class="image-box">
                                <img src="{{ asset('storage/' . $dokumentasi->gambar) }}" alt="{{ $dokumentasi->judul }}" style="width: 370px; height: 370px; object-fit: cover;">
                            </figure>
                            <div class="content-box">
                                <h3>{{ $dokumentasi->judul }}</h3>
                                <span>{{ $dokumentasi->penjelasan }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- project-section end -->

@include('layouts.footer')

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>

<!-- jequery plugins -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
