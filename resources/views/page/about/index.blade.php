@extends('layouts.pageapp')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about my-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ URL::to('/') }}/assets/img/logo-vertical.png" class="img-fluid d-block mx-auto"
                        alt="">
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0 content my-auto" data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="300">
                    <h3>{{ $profile_madrasah->nama }}</h3>
                    <p>
                        Sekolah Satu Bangsa Harmoni adalah Lembaga Pendidikan formal yang berada di bawah naungan
                        Yayasan Satubangsa Harmoni Baru. Sekolah ini sebelumnya di kenal dengan nama Sekolah Harmoni dan
                        beralih menjadi Sekolah Satu Bangsa Harmoni. Sekolah Satu Bangsa Harmoni memiliki jenjang
                        pendidikan dari tingkat KB, TK, SD, SMP, dan SMK serta beralamat di Kelurahan Bengkong Laut,
                        Kecamatan Bengkong. Sekolah ini menyediakan pendidikan sesuai dengan visi masing-masing unit
                        sekolah.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- End About -->

    <!-- Another One -->
    <section id="about-description" class="about m-5">
        <h4 class="fw-bold" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">{{ $profile_madrasah->nama }}
        </h4>
        <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">SMK Satu Bangsa Harmoni adalah Lembaga Pendidikan
            formal yang menyelenggarakan pendidikan kejuruan. Sekolah ini
            memiliki empat jurusan yaitu, Akuntansi, Rekayasa Perangkat Lunak (RPL), Perhotelan, dan Administrasi
            Perkantoran. Perkembangan teknologi menuntut sekolah-sekolah di zaman sekarang untuk selalu meningkatkan sumber
            daya manusianya, tidak terkecuali dengan SMK Satu Bangsa Harmoni ini. SMK Satu Bangsa Harmoni akan selalu
            meningkatkan proses belajar mengajar agar tercapai lulusan siswa-siswi yang berkualitas, bermoral, berkompeten
            dan berakhlak mulia. Sekolah ini meningkatkan proses pembelajarannya menggunakan kurikulum standar nasional
            (Kurikulum 2013) dan didukung oleh guru-guru yang berpengalaman, terlatih, dan profesional dalam proses
            pembelajaran. Untuk menunjang semangat kelancaran proses pembelajaran bagi siswanya, SMK Satu Bangsa Harmoni ini
            dilengkapi beberapa fasilitas dan sarana prasarana yang memadai diantaranya: Lab Akuntansi, Lab Rekayasa
            Perangkat Lunak (RPL), Lab Perhotelan, Lab Adiministrasi Perkantoran, Perpustakaan, dan Kantin. Selain aktivitas
            belajar mengajar, SMK Satu Bangsa Harmoni juga mendukung kreativitas siswanya untuk berorganisasi dalam sekolah,
            diantaranya Organisasi Siswa Intra Sekolah (OSIS). Hal ini tentu saja agar siswa memiliki kemampuan untuk
            bersosialisasi dengan siswa lainnya serta pihak terkait agar tercipta pribadi yang memiliki mental yang baik dan
            tangguh. SMK Satu Bangsa Harmoni juga memberikan pembekalan dan pengalaman bermasyarakat, berorganisasi serta
            latihan kepemimpinan di luar akademis dengan beragam ekstrakurikuler, diantaranya:
        </p>
        <div class="number-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
            <ol>
                <li>Pramuka - siswa-siswi dapat terlatih dalam kedisiplinan, belajar menjadi pemimpin, bergotong royong,
                    meningkatkan rasa kepedulian, dan belajar mencintai alam.</li>

                <li>Olahraga - Ekstrakurikuler di bidang olahraga juga tersedia di SMK Satu Bangsa Harmoni, yang saat ini
                    banyak diminati oleh siswa adalah Basket, Badminton, Bola Voli dan Futsal.</li>

                <li>Kesenian - Ekstrakurikuler kesenian meliputi seni musik dan seni tari yang bertujuan untuk membantu
                    mengembangkan peserta didik sesuai dengan kebutuhan, potensi, dan bakat mereka.</li>
            </ol>
        </div>
    </section>
    <!-- End Another One -->

    <section id="gtk" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                <span>Guru & Tenaga Kependidikan</span>
                <h2>Guru & Tenaga Kependidikan</h2>
            </div>

            <div class="row" data-aos="fade-up">
                @foreach ($gurutendik as $index => $gtk)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="{{ 100 + $index * 100 }}">
                        <div class="member">
                            <img src="{{ URL::to('/') }}/foto_gurutendik/{{ $gtk->foto }}" alt="">
                            <h4>{{ $gtk->nama }}</h4>
                            <span>{{ $gtk->jabatan }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
