
<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- main header -->
    <header class="main-header style-one">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <ul class="info top-left pull-left">
                        <li><i class="fas fa-phone-volume"></i><a href="tel:1234567890">0251-8319169</a></li>
                        <li><i class="fas fa-envelope"></i><a href="psb@apps.ipb.ac.id">psb@apps.ipb.ac.id</a></li>
                    </ul>
                    <ul class="top-right pull-right">
                        <li class="work-time"><i class="fas fa-clock"></i>Working Hours - Mon - Fri: 8:30 - 18:00</li>
                        <li class="social-links">
                            <ul class="clearfix">
                                <li><a href="https://www.facebook.com/197139333803945/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="mailto:psb@apps.ipb.ac.id"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="https://www.instagram.com/psb_ipb"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="https://x.com/IpbPsb"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="/index"><img src="assets/images/logopsb.svg" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="/index">Home</a>
                                    </li>
                                    <li class="dropdown"><a href="/tentang-kami">Profile</a>
                                        <ul>
                                            <li><a href="/tentang-kami">Tentang Kami</a></li>
                                            <li><a href="/sumber-daya">Sumber Daya</a></li>
                                            <li><a href="/docum">Dokumentasi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/publikasi">Publikasi</a>
                                    </li>
                                    <li><a href="/contact">Hubungi Kami</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="btn-box">
                            @auth
                                <!-- Jika user sudah login, tampilkan tombol Logout -->
                                <a href="#" class="theme-btn style-one" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <!-- Jika user belum login, tampilkan tombol Login -->
                                <a href="{{ route('login') }}" class="theme-btn style-one">Admin</a>
                            @endauth
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="/index"><img src="assets/images/small-logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <div class="btn-box">
                        @auth
                            <a href="#" class="theme-btn style-one" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="theme-btn style-one">Admin</a>
                        @endauth
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/index"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Kampus IPB Baranangsiang beralamat di Jl. Raya Pajajaran, Bogor Tengah, Kota Bogor, Jawa Barat 16128</li>
                    <li><a href="tel:1234567890">0251-8319169</a></li>
                    <li><a href="mailto:pusatstudibencanaipb@gmail.com">psb@apps.ipb.ac.id</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://www.facebook.com/197139333803945/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="mailto:psb@apps.ipb.ac.id"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="https://www.instagram.com/psb_ipb"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://x.com/IpbPsb"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->



