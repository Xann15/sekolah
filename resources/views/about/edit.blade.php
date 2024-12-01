@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Edit About</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li><a href="{{ route('about.index') }}">About</a></li>
                    <li>Edit</li>
                </ol>
            </div>
            <section id="contact" class="contact pt-3 pb-3">
                <form action="{{ route('about.update', $about->id) }}" method="post" role="form" class="php-form bg-white"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-group">
                        <label for="deskripsi_singkat">Deskripsi Singkat</label>
                        <textarea class="form-control summernote" id="deskripsi_singkat" name="deskripsi_singkat" rows="5"
                            data-rule="minlen:20" data-msg="Deskripsi singkat minimal 20 karakter" required>{{ $about->deskripsi_singkat }}</textarea>
                        <div class="validate"></div>
                    </div>
                    @method('put')
                    <div class="form-group">
                        <label for="deskripsi_panjang">Deskripsi Panjang</label>
                        <textarea class="form-control summernote" id="deskripsi_panjang" name="deskripsi_panjang" rows="10"
                            data-rule="minlen:20" data-msg="Deskripsi Panjang minimal 20 karakter" required>{{ $about->deskripsi_panjang }}</textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="logo_sekolah">Logo Sekolah</label>
                            <div style="position:relative;">
                                <a class='btn btn-primary' href='javascript:;'>
                                    Pilih File
                                    <input id="logo_sekolah" name="logo_sekolah" type="file"
                                        style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                                        size="40" onchange='$("#upload-gambar-info").html($(this).val());'>
                                </a>
                                &nbsp;
                                <span class='label label-info' id="upload-gambar-info">{{ $about->logo_sekolah }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
                </form>
            </section><!-- End Contact Section -->
        </div>
    </section><!-- End Breadcrumbs -->
@endsection
