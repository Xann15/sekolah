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
                        {!! $about->deskripsi !!}
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- End About -->

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
                            <img src="{{ URL::to('/') }}/foto_gurutendik/{{ $gtk->foto }}" class="testimonial-img gurux"
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
