@extends('layouts.appnonlogin')

@section('content')
    <section id="program-studi-dan-jurusan">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <span>Gallery</span>
            <h2>Gallery</h2>
        </div>
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="portfolio-details-container">

                    <div class="row">
                        <div class="col col-12 owl-carousel portfolio-details-carousel">
                            @foreach ($gallery as $data_gallery)
                                <div>
                                    <img src="{{ URL::to('/') }}/foto_gallery/{{ $data_gallery->foto }}"
                                        class="img-fluid galleryx" alt="">
                                    <h4 class="text-center mt-2">{{ $data_gallery->judul }}</h4>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="portfolio-description">
                    <h2>Gallery</h2>
                    <div class="row">
                        @foreach ($gallery as $data_gallery)
                            <div class="col-md-4 mb-3">
                                <div class="panel panel-default">

                                    <div class="panel-heading post-thumb">
                                        <img class="card-img-top cardx"
                                            src="{{ URL::to('/') }}/foto_gallery/{{ $data_gallery->foto }}" />
                                    </div>

                                    <div class="panel-body post-body-gallery mt-2">
                                        <a href="/gallery/{{ $data_gallery->id }}" target="_blank">
                                            <h5>{{ $data_gallery->judul }}</h5>
                                        </a>
                                        <h6 class="post-title">
                                            <span>{{ $data_gallery->penulis }} -
                                                {{ $data_gallery->created_at->diffForHumans() }}</span>
                                        </h6>
                                        <span>{!! substr($data_gallery->deskripsi, 0, 200) !!}..... </span> <br>
                                        <a href="/gallery/{{ $data_gallery->id }}" target="_blank">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </section>
@endsection
