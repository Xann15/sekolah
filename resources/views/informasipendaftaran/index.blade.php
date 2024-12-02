@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Informasi Pendaftaran</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li>Informasi Pendaftaran</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="informasi_pendaftaran" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ URL::to('/') }}/gambar_pendaftaran/{{ $informasi_pendaftaran->gambar }}" class="img-fluid"
                        alt="" data-aos="fade-up" data-aos-duration="800">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <h3>Informasi Pendafaran</h3>
                    {!! $informasi_pendaftaran->deskripsi !!}

                    @if ($informasi_pendaftaran->status == 1)
                        <a href="https://wa.me/{{ $contact->telpon }}?text=Saya+ingin+mendaftar+di+{{ $profile_madrasah->nama }}"
                            class="btn btn-success" target="_blank" disabled data-aos="zoom-in" data-aos-duration="800"
                            data-aos-delay="800">Daftar Sekarang</a>
                    @else
                        <a class="btn btn-danger disabled" aria-disabled="true" data-aos="zoom-in" data-aos-duration="800"
                            data-aos-delay="800">Pendaftaran Telah Ditutup</a>
                    @endif
                </div>
            </div>

        </div>
        <div class="text-center mt-2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300"> <a
                href="{{ route('informasipendaftaran.edit', $informasi_pendaftaran->id) }}"
                class="btn btn-md btn-success">Edit Data Informasi Pendaftaran</a></div>
    </section>
@endsection
