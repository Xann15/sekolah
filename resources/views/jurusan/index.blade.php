@extends('layouts.app2')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>ProgramStudi dan Jurusan</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li>ProgramStudi dan Jurusan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="jurusan" class="about pt-3">
        <!-- About Section -->
        <div class="text-center"><a href="{{ route('program-studi-dan-jurusan.create') }}" data-aos="fade-up"
                data-aos-duration="800" class="btn btn-md btn-success mb-3">Tambah Data
                Jurusan</a>
        </div>
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
                    <div class="fw-bold kelola-data m-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <ul>
                            <li class="drop-down">
                                <a>Kelola Data</a>
                                <ul class="d-flex">
                                    <li><a class="dropdown-item"
                                            href="{{ route('program-studi-dan-jurusan.edit', $data_jurusan->id) }}">Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="return confirm('Hapus Data ?')"
                                            href="/admin/program-studi-dan-jurusan/{{ $data_jurusan->id }}/destroy">Hapus</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
