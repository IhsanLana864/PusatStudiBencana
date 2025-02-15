<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Artikel - Pusat Studi Bencana IPB </title>

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
<section class="page-title" style="background-image: url(assets/images/banner/BannerPSB.png");">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box clearfix">
                    <div class="title pull-left">
                        <h1>Publikasi</h1>
                    </div>
                    <ul class="bread-crumb pull-right clearfix">
                        <li><a href="{{ route('publikasi.index') }}">Publikasi</a></li>
                        <li><a href="/index">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- service-style-four -->
<section class="service-style-four service-page">
    <!-- Section Artikel -->
    <div class="sec-title dokumen">
        <p>Pusat Studi Bencana IPB</p>
        <h2><a href="{{ route('publikasi.index') }}">Artikel</a></h2>
        <span class="separator"></span>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            @foreach($artikels as $artikel)
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ route('publikasi.show', $artikel->id) }}">
                                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" style="width: 370px; height: 270px; object-fit: cover;">
                            </a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-microscope-1"></i></div>
                                <h3><a href="{{ route('publikasi.show', $artikel->id) }}">{{ $artikel->judul }}</a></h3>
                                <p>{{ Str::limit($artikel->deskripsi, 100) }}</p>
                                <div class="link">
                                    <a href="{{ route('publikasi.show', $artikel->id) }}">Baca Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Section Berita -->
    <div class="sec-title dokumen">
        <p>Pusat Studi Bencana IPB</p>
        <h2><a href="{{ route('publikasi.index') }}">Berita</a></h2>
        <span class="separator"></span>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            @foreach($beritas as $berita)
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ route('publikasi.show', $berita->id) }}">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" style="width: 370px; height: 270px; object-fit: cover;">
                            </a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-test-tube"></i></div>
                                <h3><a href="{{ route('publikasi.show', $berita->id) }}">{{ $berita->judul }}</a></h3>
                                <p>{{ Str::limit($berita->deskripsi, 100) }}</p>
                                <div class="link">
                                    <a href="{{ route('publikasi.show', $berita->id) }}">Baca Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Section Event -->
    {{-- <div class="sec-title dokumen">
        <p>Pusat Studi Bencana IPB</p>
        <h2><a href="{{ route('publikasi.index') }}">Event</a></h2>
        <span class="separator"></span>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            @foreach($events as $event)
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ route('publikasi.show', $event->id) }}">
                                <img src="{{ asset('storage/' . $event->gambar) }}" alt="{{ $event->judul }}" style="width: 370px; height: 270px; object-fit: cover;">
                            </a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-research"></i></div>
                                <h3><a href="{{ route('publikasi.show', $event->id) }}">{{ $event->judul }}</a></h3>
                                <p>{{ Str::limit($event->deskripsi, 100) }}</p>
                                <div class="link">
                                    <a href="{{ route('publikasi.show', $event->id) }}">Baca Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
</section>

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

<!-- main-js -->
<script src="assets/js/script.js"></script>

</body>
</html>
