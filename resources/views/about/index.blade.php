@extends('layouts.app')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about my-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ URL::to('/') }}/foto_about/{{ $about->logo_sekolah }}" class="img-fluid d-block mx-auto"
                        alt="">
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0 content my-auto" data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="300">
                    <h3>{{ $profile_madrasah->nama }}</h3>
                    <p>
                        {!! $about->deskripsi_singkat !!}
                    </p>
                </div>
            </div>

        </div>
        <div class="fw-bold kelola-data m-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <ul>
                <li class="drop-down">
                    <a>Kelola Data</a>
                    <ul>
                        <li><a class="dropdown-item" href="{{ route('about.edit', $profile_madrasah->id) }}">Edit</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
    <!-- End About -->

    <!-- Another One -->
    <section id="about-description" class="about m-3 md-5">
        <div class="container">
            <h4 class="fw-bold" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                {{ $profile_madrasah->nama }}
            </h4>
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                {!! $about->deskripsi_panjang !!}
            </p>
        </div>
        <div class="fw-bold kelola-data m-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <ul>
                <li class="drop-down">
                    <a>Kelola Data</a>
                    <ul>
                        <li><a class="dropdown-item" href="{{ route('about.edit', $profile_madrasah->id) }}">Edit</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Another One -->

    <section id="visimisi" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                <span>Visi & Misi</span>
                <h2>Visi & Misi</h2>
            </div>

            <div data-aos="fade-up" data-aos-duration="800">
                {!! $visimisi->visimisi !!}
            </div>
        </div>
        <div class="fw-bold kelola-data m-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <ul>
                <li class="drop-down">
                    <a>Kelola Data</a>
                    <ul>
                        <li><a class="dropdown-item" href="{{ route('visimisi.edit', $visimisi->id) }}">Edit</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <section id="gtk" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                <span>Guru & Tenaga Kependidikan</span>
                <h2>Guru & Tenaga Kependidikan</h2>
            </div>

            <div class="owl-carousel" data-aos="fade-up" data-aos-duration="800">
                @foreach ($gurutendik as $index => $gtk)
                    <div class="panel panel-default px-2">
                        <div class="panel-heading">
                            <img src="{{ URL::to('/') }}/foto_gurutendik/{{ $gtk->foto }}" class="testimonial-img"
                                alt="">
                        </div>
                        <div class="panel-body">
                            <h4>{{ $gtk->nama }}</h4>
                            <span>{{ $gtk->jabatan }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="fw-bold kelola-data m-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <ul>
                <li class="drop-down">
                    <a>Kelola Data</a>
                    <ul>
                        <li><a class="dropdown-item" href="{{ route('gurutendik.edit', $profile_madrasah->id) }}">Edit</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

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
        <div class="mx-auto mt-2 fw-bold kelola-data" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
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
@endsection
