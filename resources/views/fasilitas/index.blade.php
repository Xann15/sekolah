@extends('layouts.app')

@section('content')
    <section id="program-studi-dan-jurusan">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <span>Fasilitas</span>
            <h2>Fasilitas</h2>
        </div>

        <section id="fasilitas" class="services section-bg">
            <div class="text-center pb-4" data-aos="fade-up" data-aos-duration="800"><a href="{{ route('fasilitas.create') }}"
                    class="btn btn-md btn-success">Tambah
                    Data Fasilitas</a></div>
            <div class="container">

                <div class="row" data-aos="fade-up">
                    @foreach ($fasilitas as $index => $data_fasilitas)
                        <div class="col-lg-4 col-md-6 d-flex mt-0 mt-md-0 mb-2" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ 100 + $index * 100 }}">
                            <div class="bg-white w-100">
                                <img src="{{ URL::to('/') }}/foto_fasilitas/{{ $data_fasilitas->foto }}"
                                    class="card-img-top w-80 fasilitasx" alt="...">
                                <div class="container mt-2">
                                    <h4><a href="">{{ $data_fasilitas->nama }}</a></h4>
                                    <p>{{ $data_fasilitas->deskripsi }}</p>
                                </div>
                                <div class="text-center pb-4">
                                    <a href="{{ route('fasilitas.edit', $data_fasilitas->id) }}"
                                        class="btn btn-md btn-primary">Edit</a>
                                    <a href="/admin/fasilitas/{{ $data_fasilitas->id }}/destroy"
                                        onclick="return confirm('Hapus Data ?')" class="btn btn-md btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
