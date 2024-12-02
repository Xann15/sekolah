@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" data-aos="fade" data-aos-duration="1000">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ $profile_madrasah->nama }} Batam</h1>

                    @if ($informasi_pendaftaran->status == 1)
                        <h2>Terwujudnya {{ $profile_madrasah->nama }} yang Manis dengan Lulusan yang Mandiri, dengan
                            proses belajar Aktif, kreatif dan inovatif</h2>
                        <div class="d-flex">
                            <a href="https://wa.me/{{ $contact->telpon }}?text=Saya+ingin+mendaftar+di+{{ $profile_madrasah->nama }}"
                                class="btn-get-started scrollto" target="_blank">Daftar Sekarang</a>
                            <a href="#informasi_pendaftaran" class="btn-watch-video scrollto">Informasi Pendaftaran <i
                                    class="icofont-info-circle"></i></a>
                        </div>
                    @else
                        <h2>Di Website {{ $profile_madrasah->nama }}, pendaftaran peserta didik baru <span
                                class="badge badge-danger">Telah Ditutup</span> sampai jumpa pada PPDB tahun depan.</h2>
                    @endif
                    <div class="fw-bold kelola-data" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <ul>
                            <li class="drop-down">
                                <a>Kelola Data</a>
                                <ul>
                                    <li><a class="dropdown-item"
                                            href="{{ route('profilemadrasah.edit', $profile_madrasah->id) }}">Edit</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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


    <!-- KataSambutan Kepsek -->
    <section id="katasambutan_kepsek" class="about my-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ URL::to('/') }}/foto_sambutankepsek/{{ $katasambutan_kepsek->foto }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0 content my-auto" data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="500">
                    <h3>Kata Sambutan Kepala Sekolah</h3>
                    <p>
                        {{ $katasambutan_kepsek->nama }}: {!! $katasambutan_kepsek->pesan !!}
                    </p>
                </div>
                <div class="m-auto fw-bold kelola-data" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <ul>
                        <li class="drop-down">
                            <a>Kelola Data</a>
                            <ul>
                                <li><a class="dropdown-item"
                                        href="{{ route('katasambutankepsek.edit', $katasambutan_kepsek->id) }}">Edit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End KataSambutan Kepsek -->

    <!-- ======= Profile Madrasah Section ======= -->
    <section id="profile_sekolah" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ URL::to('/') }}/gambar_profile/{{ $profile_madrasah->gambar }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <h3>Profil Sekolah</h3>
                    <p>
                        {{ $profile_madrasah->deskripsi }}
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- End Profile Madrasah Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters mt-5">

                <div class="col-4 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_guru }}</span>
                    <p>Guru</p>
                </div>
                <div class="col-4 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_siswa }}</span>
                    <p>Siswa</p>
                </div>
                <div class="col-4 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <span data-toggle="counter-up"> {{ $profile_madrasah->jumlah_jurusan }}</span>
                    <p>Jurusan</p>
                </div>

            </div>

        </div>
        <div class="fw-bold kelola-data m-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <ul>
                <li class="drop-down">
                    <a>Kelola Data</a>
                    <ul>
                        <li><a class="dropdown-item"
                                href="{{ route('profilemadrasah.edit', $profile_madrasah->id) }}">Edit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </section><!-- End Counts Section -->


    <main id="main">

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
                            <a href="https://wa.me/{{ $contact->telpon }}?text=Saya+ingin+mendaftar+di+{{ $profile_madrasah->nama }}"
                                class="btn btn-success" target="_blank" disabled data-aos="zoom-in"
                                data-aos-duration="800" data-aos-delay="800">Daftar Sekarang</a>
                        @else
                            <a class="btn btn-danger disabled" aria-disabled="true" data-aos="zoom-in"
                                data-aos-duration="800" data-aos-delay="800">Pendaftaran Telah Ditutup</a>
                        @endif

                    </div>
                </div>

            </div>
            <div class="fw-bold kelola-data mx-auto mt-3" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="500">
                <ul>
                    <li class="drop-down">
                        <a>Kelola Data</a>
                        <ul>
                            <li><a class="dropdown-item"
                                    href="{{ route('informasipendaftaran.edit', $informasi_pendaftaran->id) }}">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
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
            <div class="mx-auto mt-2 fw-bold kelola-data" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="500">
                <ul>
                    <li class="drop-down">
                        <a>Kelola Data</a>
                        <ul>
                            <li><a class="dropdown-item" href="{{ route('contact.edit', $contact->id) }}">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
