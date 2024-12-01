@extends('layouts.pageapp')

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
    </section>
    <!-- End Another One -->

    <section id="visimisi" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                <span>Visi & Misi</span>
                <h2>Visi & Misi</h2>
            </div>

            <div data-aos="fade-up" data-aos-duration="800">
                <h3>Visi</h3>
                <p>Menghasilkan Lulusan yang Berakhlak Mulia, Berkarakter Unggul, Profesional, Mandiri, serta Berwawasan
                    Lingkungan dan Budaya.</p>

                <h3>Misi</h3>
                <ol>
                    <li>Menyelenggarakan Kegiatan Pendampingan Keagamaan untuk peningkatan ketaqwaan sesuai dengan agama
                        masing-masing.</li>
                    <li>Menumbuhkembangkan penghayatan terhadap ajaran agama yang dianut dan juga budaya bangsa sehingga
                        menjadi sumber kearifan dalam berfikir, berkata dan bertindak.</li>
                    <li>Mengembangkan kedisiplinan yang dinamis dan partisipatif untuk mewujudkan kondisi lingkungan sekolah
                        yang bersih, sehat, aman dan lestari.</li>
                    <li>Memberikan pendidikan dan pelatihan ketrampilan/kompetensi sesuai dengan tuntutan dunia
                        usaha/industri (DU/DI).</li>
                    <li>Menumbuhkembangkan semangat jiwa wirausaha mandiri dan mampu bersaing di Dunia Usaha/Industri
                        (DU/DI).</li>
                    <li>Menyelenggarakan Pendidikan yang dapat diminati masyarakat sesuai dengan kebutuhan masyarakat.</li>
                </ol>
            </div>


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
    </section>
@endsection
