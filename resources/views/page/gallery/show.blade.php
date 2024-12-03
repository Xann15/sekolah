@extends('layouts.appnonlogin')

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">
                <img src="{{ URL::to('/') }}/foto_gallery/{{ $gallery->foto }}" class="img-fluid jumbox" style="width: 100%"
                    alt="">
                <div class="portfolio-info">
                    <h3>Informasi Galeri</h3>
                    <ul>
                        <li><strong>Judul</strong>: {{ $gallery->judul }}</li>
                        <li><strong>Penulis</strong>: {{ $gallery->penulis }}</li>
                        <li><strong>Diposting</strong>: {{ $gallery->created_at }}</li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>{{ $gallery->judul }}</h2>
                <p>
                    {!! $gallery->deskripsi !!}
                </p>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
