@extends('layouts.appx')

@section('content')
    <section id="program-studi-dan-jurusan">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <span>Program Studi & Jurusan</span>
            <h2>Program Studi & Jurusan</h2>
        </div>
        <!-- About Section -->
        <section id="jurusan" class="about pt-3">
            <div class="container">
                @foreach ($jurusan as $index => $data_jurusan)
                    <div class="jurusan-section mb-5" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="{{ 100 + $index * 100 }}">
                        <div class="d-flex align-items-center">
                            <!-- Garis (hr) sebelah kiri -->
                            <div class="line"></div>

                            <!-- Teks di sebelah kanan -->
                            <h2 class="text-end text-danger fw-bold mx-3">{{ $data_jurusan->nama }}
                                ({{ $data_jurusan->singkatan }})
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Carousel -->
                                <div id="jurusan-carousel-{{ $data_jurusan->id }}"
                                    class="owl-carousel owl-theme jurusan-carousel">
                                    @php
                                        $fotoArray = [$data_jurusan->foto1, $data_jurusan->foto2, $data_jurusan->foto3];
                                    @endphp
                                    @foreach ($fotoArray as $foto)
                                        @if ($foto)
                                            <div class="item">
                                                <img src="{{ asset('foto_jurusan/' . $foto) }}"
                                                    class="d-block w-100 img-fluid rounded img-carousel"
                                                    alt="Foto {{ $data_jurusan->nama }}">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $data_jurusan->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection
