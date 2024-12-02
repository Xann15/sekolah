@extends('layouts.pageapp')

@section('content')
    <section id="program-studi-dan-jurusan">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <span>Ekstrakulikuler</span>
            <h2>Ekstrakulikuler</h2>
        </div>

        <section id="ekstrakulikuler" class="services section-bg">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    @foreach ($ekstrakulikuler as $index => $data_ekskul)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading post-thumb">
                                    <img class="card-img-top cardx"
                                        src="{{ URL::to('/') }}/foto_ekstrakulikuler/{{ $data_ekskul->foto }}" />
                                </div>

                                <div class="panel-body post-body rars">
                                    <a class="label label-default" href="#">{{ $data_ekskul->nama }}</a>
                                    <p class="card-text">{{ $data_ekskul->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
