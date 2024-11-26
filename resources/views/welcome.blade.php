<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $profile_madrasah->nama }} | Leanding Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/me.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a class="navbar-brand mr-auto" href="#">
                <img src="{{ URL::to('/') }}/logo_madrasah/{{ $profile_madrasah->logo }}" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
                {{ $profile_madrasah->nama }}
            </a>

            <nav class="nav-menu d-none d-lg-block fw-bold">
                <ul>
                    <li class="active"><a href="#hero">BERANDA</a></li>
                    <li><a href="">PROGRAM STUDI & JURUSAN</a></li>
                    <li><a href="">SARANA & PRASARANA</a></li>
                    <li><a href="">GALERI</a></li>
                    <li><a href="/home/berita">BERITA</a></li>
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
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" data-aos="fade" data-aos-duration="1000">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>SMK Satubangsa Harmoni Batam</h1>

                    @if ($informasi_pendaftaran->status == 1)
                        <h2>Terwujudnya {{ $profile_madrasah->nama }} yang Manis dengan Lulusan yang Mandiri, dengan proses belajar Aktif, kreatif dan inovatif</h2>
                        <div class="d-flex">
                            <a href="/register" class="btn-get-started scrollto" target="_blank">Daftar Sekarang</a>
                            <a href="#informasi_pendaftaran" class="btn-watch-video scrollto">Informasi Pendaftaran <i
                                    class="icofont-info-circle"></i></a>
                        </div>
                    @else
                        <h2>Di Website {{ $profile_madrasah->nama }}, pendaftaran peserta didik baru <span
                                class="badge badge-danger">Telah Ditutup</span> sampai jumpa pada PPDB tahun depan.</h2>
                    @endif

                    <!-- <h2>Di Website {{ $profile_madrasah->nama }}</h2>
          <div class="d-flex">
            <a href="/register" class="btn-get-started scrollto" target="_blank">Daftar Sekarang</a>
          </div> -->
                </div>
                {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>   --}}
            </div>
        </div>

    </section><!-- End Hero -->
    
        <!-- ======= Profile Madrasah Section ======= -->
        <section id="profile_sekolah" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                        <img src="{{ URL::to('/') }}/gambar_profile/{{ $profile_madrasah->gambar }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="500">
                        <h3>Profil Sekolah</h3>
                        <p>
                            {{ $profile_madrasah->deskripsi }}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Profile Madrasah Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters mt-5">
                    <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="0">
                        <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_rombel }}</span>
                        <p>Rombongan Belajar</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="100">
                        <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_siswa }}</span>
                        <p>Siswa</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="200">
                        <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_guru }}</span>
                        <p>Guru</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="300">
                        <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_tendik }}</span>
                        <p>Tenaga Kependidikan</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <main id="main">
            <!-- ======= Berita Section ======= -->
            <section id="berita" class="testimonials section-bg">
                <div class="container">
    
                    <div class="section-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <span>Berita Terbaru</span>
                        <h2>Berita Terbaru</h2>
                        <p><a href="/home/berita" target="_blank">Lihat semua berita....</a></p>
                    </div>
    
                    <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-duration="800">
                        @foreach ($berita_terbaru as $berita)
                            <div class="panel panel-default px-2">
                                <div class="panel-heading post-thumb">
                                    <img src="{{ URL::to('/') }}/foto_berita/{{ $berita->foto }}" class="testimonial-img"
                                        alt="">
                                </div>
                                <div class="panel-body post-body-berita">
                                    <h5><b>{{ $berita->judul }}</b></h5>
                                    <h6>{{ $berita->penulis }} - {{ $berita->created_at->diffForHumans() }}</h6>
                                    <a href="/home/berita/{{ $berita->id     }}" target="_blank">Baca selengkapnya</a>
                                    <p>
                                        {!! substr($berita->deskripsi, 0, 220) !!}.....
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
    
                </div>
            </section>
            <!-- End Berita Section -->     

        <!-- ======= Services Section ======= -->
        {{-- <section id="ekstrakulikuler" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <span>Ektrakulikuler</span>
                    <h2>Ektrakulikuler</h2>
                    <p>Untuk mengembangkan minat dan bakat siswa di {{ $profile_madrasah->nama }} terdapat beberapa
                        kegiatan ekstrakulikuler, diantaraya :</p>
                </div>

                <div class="row" data-aos="fade-up">
                    @foreach ($ekstrakulikuler as $index => $data_ekskul)
                        <div class="col-lg-4 col-md-6 d-flex mt-0 mt-md-0" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ 100 + $index * 100 }}">
                            <div class="bg-white">
                                <img src="{{ URL::to('/') }}/foto_ekstrakulikuler/{{ $data_ekskul->foto }}"
                                    class="card-img-top w-80" alt="...">
                                <div class="container mt-2">
                                    <h4><a href="">{{ $data_ekskul->nama }}</a></h4>
                                    <p>{{ $data_ekskul->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </section> --}}
        <!-- End Services Section -->   

        <!-- ======= Team Section ======= -->
        {{-- <section id="gtk" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                    <span>Guru & Tenaga Kependidikan</span>
                    <h2>Guru & Tenaga Kependidikan</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    @foreach ($gurutendik as $index => $gtk)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-duration="800" data-aos-delay="{{ 100 + $index * 100 }}">
                            <div class="member">
                                <img src="{{ URL::to('/') }}/foto_gurutendik/{{ $gtk->foto }}" alt="">
                                <h4>{{ $gtk->nama }}</h4>
                                <span>{{ $gtk->jabatan }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section> --}}
        <!-- End Team Section -->

        <!-- ======= Informasi Pendaftaran Section ======= -->
        <section id="informasi_pendaftaran" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ URL::to('/') }}/gambar_pendaftaran/{{ $informasi_pendaftaran->gambar }}"
                            class="img-fluid" alt="" data-aos="fade-up" data-aos-duration="800">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="300">
                        <h3>Informasi Pendafaran</h3>
                        {!! $informasi_pendaftaran->deskripsi !!}

                        @if ($informasi_pendaftaran->status == 1)
                            <a href="/register" class="btn btn-danger" target="_blank" disabled data-aos="zoom-in"
                                data-aos-duration="800" data-aos-delay="800">Daftar Sekarang</a>
                        @else
                            <a class="btn btn-danger disabled" aria-disabled="true" data-aos="zoom-in"
                                data-aos-duration="800" data-aos-delay="800">Pendaftaran Telah Ditutup</a>
                        @endif
                    </div>
                </div>

            </div>
        </section><!-- End Informasi Pendaftaran Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>Untuk informasi lebih lanjut, bisa menghubungi contact berikut</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="300">
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

                    <div class="col-lg-7 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="400">
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
                {{ $profile_madrasah->nama }} | <strong><span>2024</span></strong>. All Rights Reserved
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
