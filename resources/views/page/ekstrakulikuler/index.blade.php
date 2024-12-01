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
                        <div class="col-lg-4 col-md-6 d-flex mt-0 mt-md-0" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ 100 + $index * 100 }}">
                            <div class="bg-white">
                                <img src="{{ URL::to('/') }}/foto_ekstrakulikuler/{{ $data_ekskul->foto }}"
                                    class="card-img-top w-80" alt="...">
                                <div class="container mt-2">
                                    <h4><a href="">{{ $data_ekskul->nama }}</a></h4>
                                    <p>{{ $data_ekskul->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
</section>

@endsection