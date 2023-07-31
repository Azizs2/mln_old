<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. Maju Lokal Nusantara</title>

    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <!-- CSS FILES -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">

    @yield('css')

</head>

<body id="section_1">
    <header class="site-header">
        <div class="container">
            @if (session('success'))
                <!-- Tampilkan pesan alert sebagai popup -->
                <script>
                    window.onload = function() {
                        alert("{{ session('success') }}");
                    };
                </script>
            @endif
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Depok City,West Java, Indonesia
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            malon@majulokalnusantara.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <!-- <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li> -->

                        <li class="social-icon-item">
                            <a href="https://api.whatsapp.com/send?phone=6285158002505"
                                class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo img-fluid" alt="Maju Lokal Nusantara">
                <span>
                    PT. Maju Lokal Nusantara
                    <small>From Local to Global</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#section_3">Products</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#section_4">News</a>

                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="/#section_4"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">News</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('breaking_news') }}">Breaking News</a></li>

                            {{-- <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li> --}}
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/#section_5">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <a href="/#top">
                        <img src="{{ asset('assets/images/logo.png') }}" class="logo img-fluid" alt="">
                    </a>

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="/#section_2" class="footer-menu-link">Our Story</a>
                        </li>

                        <li class="footer-menu-item"><a href="/#section_3" class="footer-menu-link">Products</a>
                        </li>

                        <li class="footer-menu-item"><a href="/#section_4" class="footer-menu-link">News</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: +6285158002505" class="site-footer-link">
                            +6285158002505
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            malon@majulokalnusantara.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        Depok City, West Java, Indonesia
                    </p>

                    <a href="https://api.whatsapp.com/send?phone=6285158002505" class="custom-btn btn mt-3">Get
                        Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2023 <a href="/#top">PT. Maju Lokal
                                Nusantara</a>
                        </p>
                    </div>

                    <!-- <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp button -->
    <a class="whatsapp-button" href="https://api.whatsapp.com/send?phone=6285158002505" target="_blank"
        rel="noopener noreferrer">
        <!-- Replace "bi-whatsapp" with the appropriate Bootstrap Icon class for WhatsApp -->
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/click-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('js')


</body>

</html>
