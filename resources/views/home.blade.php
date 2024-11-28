@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Dashboard</h4>
                <ol>
                    <li>Dashboard</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Selamat Datang</h1>
                    <h1>{{ Auth::user()->name }}</h1>
                    <h2>Anda Login Sebagai Administrator Di Website {{ $profile_madrasah->nama }}</h2>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
@endsection
