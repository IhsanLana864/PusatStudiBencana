<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>{{ $artikel->judul }} - Pusat Studi Bencana IPB </title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

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
<link href="{{ asset('assets/css/color/theme-color.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">


</head>

@include('layouts.navbar')

<!--Page Title-->
<section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box clearfix">
                    <div class="title pull-left">
                        <h1>{{ $artikel->judul }}</h1>
                    </div>
                    <ul class="bread-crumb pull-right clearfix">
                        <li><a href="{{ route('publikasi.index') }}">Publikasi</a></li>
                        <li>{{ $artikel->judul }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Profil PSB -->
<section class="our-blog sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="our-blog-content">
                    <!-- Detail Artikel -->
                    <div class="news-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}">
                            </figure>
                            <div class="lower-content">
                                <h5><strong>{{ ucfirst($artikel->jenis) }}</strong></h5>
                                <h3>{{ $artikel->judul }}</h3>
                                <p>{!! nl2br(e($artikel->deskripsi)) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar blog-sidebar">
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>Kategori</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="categories-list clearfix">
                                <li><a href="{{ route('publikasi.index') }}?filter=artikel" class="{{ $artikel->jenis == 'publikasi' ? 'active' : '' }}">Artikel</a></li>
                                <li><a href="{{ route('publikasi.index') }}?filter=berita" class="{{ $artikel->jenis == 'berita' ? 'active' : '' }}">Berita</a></li>
                                <li><a href="{{ route('publikasi.index') }}?filter=event" class="{{ $artikel->jenis == 'event' ? 'active' : '' }}">Event</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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


<!-- main-js -->
<script src="assets/js/script.js"></script>

</body>
</html>
