@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Edit Data Jurusan</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li><a href="{{ route('program-studi-dan-jurusan.index') }}">ProgramStudi dan Jurusan</a></li>
                    <li>Edit Data</li>
                </ol>
            </div>
            <section id="contact" class="contact pt-3 pb-3">
                <form action="{{ route('program-studi-dan-jurusan.update', $jurusan->id) }}" method="post" role="form"
                    class="php-form bg-white" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama Jurusan</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="{{ $jurusan->nama }}" required>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="singkatan">Singkatan Jurusan</label>
                        <input type="text" class="form-control" name="singkatan" id="singkatan"
                            value="{{ $jurusan->singkatan }}" required>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $jurusan->deskripsi }}</textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="foto1">Foto1</label>
                            <div style="position:relative;">
                                <a class='btn btn-primary' href='javascript:;'>
                                    Pilih File
                                    <input id="foto1" name="foto1" type="file"
                                        style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                                        size="40" onchange='$("#ft_jurusan1").html($(this).val());'>
                                </a>
                                &nbsp;
                                <span class='label label-info' id="ft_jurusan1">{{ $jurusan->foto1 }}</span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="foto2">Foto2</label>
                            <div style="position:relative;">
                                <a class='btn btn-primary' href='javascript:;'>
                                    Pilih File
                                    <input id="foto2" name="foto2" type="file"
                                        style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                                        size="40" onchange='$("#ft_jurusan2").html($(this).val());'>
                                </a>
                                &nbsp;
                                <span class='label label-info' id="ft_jurusan2">{{ $jurusan->foto2 }}</span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="foto3">Foto3</label>
                            <div style="position:relative;">
                                <a class='btn btn-primary' href='javascript:;'>
                                    Pilih File
                                    <input id="foto3" name="foto3" type="file"
                                        style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                                        size="40" onchange='$("#ft_jurusan3").html($(this).val());'>
                                </a>
                                &nbsp;
                                <span class='label label-info' id="ft_jurusan3">{{ $jurusan->foto3 }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
                </form>
            </section><!-- End Contact Section -->
        </div>
    </section><!-- End Breadcrumbs -->
@endsection
