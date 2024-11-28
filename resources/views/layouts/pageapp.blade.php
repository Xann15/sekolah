<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $profile_madrasah->nama }} | Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Summernote -->
    <link href="/assets/summernote/summernote.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex align-items-center">

            <a class="navbar-brand mr-auto" href="#">
                <img src="{{ URL::to('/') }}/logo_madrasah/{{ $profile_madrasah->logo }}" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
                {{ $profile_madrasah->nama }}
            </a>

            <nav class="nav-menu d-none d-lg-block fw-bold">
                <ul>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">BERANDA</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">TENTANG KAMI</a></li>
                    <li class="{{ Request::is('program-studi-dan-jurusan') ? 'active' : '' }}">
                        <a href="/program-studi-dan-jurusan">PROGRAM STUDI & JURUSAN</a>
                    </li>
                    <li
                        class="drop-down {{ Request::is('fasilitas') || Request::is('ekstrakulikuler') ? 'active' : '' }}">
                        <a href="#">SARANA & PRASARANA</a>
                        <ul>
                            <li><a class="dropdown-item {{ Request::is('fasilitas') ? 'active' : '' }}"
                                    href="/fasilitas">Fasilitas</a></li>
                            <li><a class="dropdown-item {{ Request::is('ekstrakulikuler') ? 'active' : '' }}"
                                    href="/ekstrakulikuler">Ekstrakulikuler</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('galeri') ? 'active' : '' }}"><a href="/galeri">GALERI</a></li>
                    <li class="{{ Request::is('berita') ? 'active' : '' }}"><a href="/berita">BERITA</a></li>

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
                    <li class="p-2 d-flex ml-lg-3 rounded" style="cursor: pointer; background-color: #CE1617"
                        onclick="window.location.href='/login'">
                        <div class="text-white m-auto h-100" style="font-size: 15px">Login</div>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->


        </div>
    </header><!-- End Header -->

    <main id="main">

        @yield('content')

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>Untuk informasi lebih lanjut, bisa menghubungi contact berikut</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $contact->email }}</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telpon/HP:</h4>
                                <p>{{ $contact->telpon }}</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-instagram"></i>
                                <h4>Instagram:</h4>
                                <p>{{ $contact->instagram }}</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-facebook"></i>
                                <h4>Facebook:</h4>
                                <p>{{ $contact->facebook }}</p>
                            </div>
                            <div class="phone">
                                <i class="icofont-twitter"></i>
                                <h4>Twitter:</h4>
                                <p>{{ $contact->twitter }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Alamat:</h4>
                                <p>{{ $contact->alamat }}</p>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0068812494032!2d104.02331897567956!3d1.1555703621680633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98994c3186803%3A0x86421887be081325!2sSekolah%20Satu%20Bangsa%20Harmoni!5e0!3m2!1sid!2sid!4v1731206283981!5m2!1sid!2sid"
                                width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
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
                Developer by <a href="https://instagram.com/panjialdno">Pandjie Aldino</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

    <!-- Summernote -->
    <script src="/assets/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="/js/plugins-init/summernote-init.js"></script>

    <!-- Sweet Alert  -->
    @include('sweetalert::alert')

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
