@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Edit Visi & Misi</h4>
                <ol>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li><a href="#">Visi & Misi</a></li>
                    <li>Edit</li>
                </ol>
            </div>
            <section id="contact" class="contact pt-3 pb-3">
                <form action="{{ route('visimisi.update', $visimisi->id) }}" method="post" role="form"
                    class="php-form bg-white" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-group">
                        <label for="visimisi">Visimisi</label>
                        <textarea class="form-control summernote" id="visimisi" name="visimisi" rows="10" data-rule="minlen:20"
                            data-msg="visimisi minimal 20 karakter" required>{{ $visimisi->visimisi }}</textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
                </form>
            </section><!-- End Contact Section -->
        </div>
    </section><!-- End Breadcrumbs -->
@endsection
