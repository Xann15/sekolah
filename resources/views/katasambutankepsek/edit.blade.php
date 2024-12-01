@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Edit Kata Sambutan Kepsek</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li><a href="#">Kata Sambutan Kepsek</a></li>
                    <li>Edit</li>
                </ol>
            </div>
            <section id="contact" class="contact pt-3 pb-3">
                <form action="{{ route('katasambutankepsek.update', $katasambutan_kepsek->id) }}" method="post" role="form"
                    class="php-form bg-white" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama Kepsek</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="{{ $katasambutan_kepsek->nama }}" required>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="10" data-rule="minlen:20"
                            data-msg="Pesan minimal 20 karakter" required>{{ $katasambutan_kepsek->pesan }}</textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="foto">Foto</label>
                            <div style="position:relative;">
                                <a class='btn btn-primary' href='javascript:;'>
                                    Pilih File
                                    <input id="foto" name="foto" type="file"
                                        style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                                        size="40" onchange='$("#upload-gambar-info").html($(this).val());'>
                                </a>
                                &nbsp;
                                <span class='label label-info'
                                    id="upload-gambar-info">{{ $katasambutan_kepsek->foto }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
                </form>
            </section><!-- End Contact Section -->
        </div>
    </section><!-- End Breadcrumbs -->
@endsection
