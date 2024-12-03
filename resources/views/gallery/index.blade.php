@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Galeri</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li>Galeri</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about pt-3">
        <div class="text-center pb-4"><a href="{{ route('gallery.create') }}" class="btn btn-md btn-success">Tulis Galeri
                Baru</a></div>
        <div class="container">
            <div class="row">
                @foreach ($gallery as $data_gallery)
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="panel panel-default">

                            <div class="panel-heading post-thumb">
                                <img class="card-img-top cardx"
                                    src="{{ URL::to('/') }}/foto_gallery/{{ $data_gallery->foto }}" />
                            </div>

                            <div class="panel-body post-body mt-2">
                                <a href="/gallery/{{ $data_gallery->id }}" target="_blank">
                                    <h5>{{ $data_gallery->judul }}</h5>
                                </a>
                                <h6 class="post-title">
                                    <span>{{ $data_gallery->penulis }} -
                                        {{ $data_gallery->created_at->diffForHumans() }}</span>
                                </h6>
                                <span>{!! Str::limit($data_gallery->deskripsi, 100, '...') !!}..... </span> <br>
                                <a href="/gallery/{{ $data_gallery->id }}" target="_blank">Baca selengkapnya</a>
                                <div class="post-author">
                                    <a href="{{ route('gallery.edit', $data_gallery->id) }}"
                                        class="btn btn-sm btn-primary">Edit Data</a>
                                    <a href="/admin/gallery/{{ $data_gallery->id }}/destroy"
                                        class="btn btn-danger btn-sm my-1 mr-sm-1"
                                        onclick="return confirm('Hapus Data ?')"><i class="nav-icon fas fa-trash"></i>
                                        Hapus Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End About -->
@endsection
