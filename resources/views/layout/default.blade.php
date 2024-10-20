<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Yayasan Anak Bangsa')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ asset('StyleTemplate/assets/img/logo.png') }} rel="icon">
    <link href={{ asset('StyleTemplate/assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('StyleTemplate/assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('StyleTemplate/assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('StyleTemplate/assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('StyleTemplate/assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('StyleTemplate/assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">
    <link href={{ asset('StyleTemplate/assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('StyleTemplate/assets/css/main.css') }} rel="stylesheet">

</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('beranda') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="http://127.0.0.1:8000/StyleTemplate/assets/img/kemitraan/logoy2.png" alt="" width="300" height="900">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('program-yayasan') }}">Program</a></li>
                    <li><a href="{{ route('donasi') }}">Donasi</a></li>
                    <li class="dropdown"><a href="#"><span>Profil</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('profil1') }}">Tentang Yayasan</a></li>
                            <li><a href="{{ route('profil2') }}">Struktur Pengurus</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>

    </header><!-- End Header -->

    <main>
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="#" class="logo d-flex align-items-center">
                            <img src="http://127.0.0.1:8000/StyleTemplate/assets/img/kemitraan/logoy2.png"  alt="#" width="auto" height="400">
                        </a>
                        <p>Yayasan Peduli Anak Bangsa Indonesia</p>
                        <div class="social-links d-flex  mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Fitur Tersedia</h4>
                        <ul>
                            <li><i class="bi bi-house-door-fill"></i><a href="#">Beranda</a></li>
                            <li><i class="fas fa-hands-helping"></i>
                                <a href="#">Program</a>
                            </li>
                            <li><i class="fa-solid fa-hand-holding-heart"></i><a href="#">Donasi</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4> </h4>
                        <ul>
                            <li><i class="fa-solid fa-globe"></i> <a href="#">Tentang Yayasan</a></li>
                            <li><i class="fa-solid fa-users"></i> <a href="#">Struktur Pengurus</a></li>
                            <li><i class="fa-solid fa-phone"></i> <a href="#">Kontak</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Lokasi</h4>
                        <p> {{ $alamat }}
                            <h4>Kontak</h4>
                            <strong>Nomor Telepon:</strong> {{ $notelp }}<br>
                            <strong>Email:</strong> {{ $email }} <br>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer --><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src={{ asset('StyleTemplate/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('StyleTemplate/assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('StyleTemplate/assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('StyleTemplate/assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('StyleTemplate/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('StyleTemplate/assets/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset('StyleTemplate/assets/js/main.js') }}></script>

</body>

</html>
