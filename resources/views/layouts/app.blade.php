<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $profile_madrasah->nama }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::to('/') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ URL::to('/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::to('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{ URL::to('/') }}/assets/summernote/summernote.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet">

    <style>
        .btn-edit {
            background-color: #CE1617;
            color: white;
        }

        .owl-carousel .owl-dots,
        .owl-carousel .owl-nav {
            text-align: center;
            /* Center the dots horizontally */
            margin-top: 15px;
            /* Add some space between the carousel and the dots */
        }

        .owl-carousel .owl-nav {
            font-size: 25px;
        }

        .owl-carousel .owl-dots .owl-dot {
            display: inline-block;
            width: 12px;
            /* Adjust the size of the dots */
            height: 12px;
            margin: 0 5px;
            /* Space between the dots */
            background-color: #ccc;
            /* Default color for the dots */
            border-radius: 50%;
            /* Make the dots round */
            transition: background-color 0.3s ease;
        }

        .owl-carousel .owl-dots .owl-dot.active {
            background-color: #CE1617;
            /* Active dot color */
        }

        .panel-heading img.cardx {
            height: 250px;
            /* Make the image fill the full height of the parent */
            width: 100%;
            /* Make the image fill the full width of the parent */
            object-fit: cover;
            /* Ensures the image covers the container area without distortion */
            object-position: center;
            /* Optional: centers the image within the container */
        }

        .rars {
            height: 300px;
            overflow-y: scroll;
            margin-bottom: 20px
        }

        .rars::-webkit-scrollbar {
            display: none;
        }

        img.fasilitasx {
            width: 100%;
            /* 3cm equivalent in pixels (approx) */
            height: 200px;
            /* 4cm equivalent in pixels (approx) */
            object-fit: cover;
            /* Ensures the image fits perfectly within the container */
            object-position: center;
            /* Centers the image */
            border-radius: 5px;
            /* Optional: adds slight rounding to the corners */
            border: none;
            /* Optional: adds a border like a photo frame */
        }

        .testimonial-img.gurux {
            width: 75px;
            /* 3cm equivalent in pixels (approx) */
            height: 200px;
            /* 4cm equivalent in pixels (approx) */
            object-fit: cover;
            /* Ensures the image fits perfectly within the container */
            object-position: center;
            /* Centers the image */
            border-radius: 5px;
            /* Optional: adds slight rounding to the corners */
            border: none;
            /* Optional: adds a border like a photo frame */
        }

        img.gurx {
            width: 200px;
            /* 3cm equivalent in pixels (approx) */
            height: 270px;
            /* 4cm equivalent in pixels (approx) */
            object-fit: cover;
            /* Ensures the image fits perfectly within the container */
            object-position: center;
            /* Centers the image */
            border-radius: 5px;
            /* Optional: adds slight rounding to the corners */
            border: none;
            /* Optional: adds a border like a photo frame */
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex align-items-center">

            <a class="navbar-brand mr-auto" href="#">
                <img src="{{ URL::to('/') }}/logo_madrasah/{{ $profile_madrasah->logo }}" width="30"
                    height="30" class="d-inline-block align-top" alt="" loading="lazy">
                {{ $profile_madrasah->nama }}
            </a>

            <nav class="nav-menu d-none d-lg-block fw-bold">
                <ul>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/admin/home">BERANDA</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/admin/about">TENTANG KAMI</a></li>
                    <li class="{{ Request::is('program-studi-dan-jurusan') ? 'active' : '' }}">
                        <a href="/admin/program-studi-dan-jurusan">PROGRAM STUDI & JURUSAN</a>
                    </li>
                    <li
                        class="drop-down {{ Request::is('fasilitas') || Request::is('ekstrakulikuler') ? 'active' : '' }}">
                        <a href="#">SARANA & PRASARANA</a>
                        <ul>
                            <li><a class="dropdown-item {{ Request::is('fasilitas') ? 'active' : '' }}"
                                    href="/admin/fasilitas">Fasilitas</a></li>
                            <li><a class="dropdown-item {{ Request::is('ekstrakulikuler') ? 'active' : '' }}"
                                    href="/admin/ekstrakulikuler">Ekstrakulikuler</a></li>
                        </ul>
                    </li>

                    <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/admin/gallery">GALERI</a></li>

                    {{-- <li class="drop-down"><a href="#">Tentang Kami</a>
                        <ul>
                            <li><a href="#profile_sekolah">Profile Sekolah</a></li>
                            <li><a href="#ekstrakulikuler">Ekstrakulikuler</a></li>
                            <li><a href="#gtk">Guru & Tenaga Kependidikan</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="drop-down"><a href="">PPDB Online</a>
                        <ul>
                            <li><a href="#informasi_pendaftaran">Informasi Pendaftaran</a></li>
                            @if ($informasi_pendaftaran->status == 1)
                                <li><a href="/register" target="_blank">Daftar Sekarang</a></li>
                            @endif
                        </ul>
                    </li> --}}
                </ul>
            </nav><!-- .nav-menu -->


        </div>
    </header><!-- End Header -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                {{ $profile_madrasah->nama }} | <strong><span>2025</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
                {{-- Developer by <a href="https://instagram.com/panjialdno">Pandjie Aldino</a> --}}
                <a href="">Hi Admin!</a>
                <a href="{{ '/logout' }}">Logout</a>

            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}
    <!-- Vendor JS Files -->
    <script src="{{ URL::to('/') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::to('/') }}/assets/js/main.js"></script>

    <!-- Summernote -->
    <script src="{{ URL::to('/') }}/assets/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="{{ URL::to('/') }}/js/plugins-init/summernote-init.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 6, // Show 6 items per view
            margin: 20, // Space between items
            loop: true, // Enable looping
            nav: true, // Show next/prev arrows
            dots: true, // Show dots for navigation
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Set autoplay time (3000ms = 3 seconds)
            autoplayHoverPause: true, // Pause autoplay on hover
            responsive: {
                0: {
                    items: 2, // For small screens, show 1 item
                },
                768: {
                    items: 4, // For medium screens, show 3 items
                },
                1024: {
                    items: 6, // For larger screens, show 6 items
                }
            }
        });
    </script>

    <!-- Sweet Alert  -->
    @include('sweetalert::alert')

</body>

</html>
