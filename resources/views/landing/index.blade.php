@extends('layouts.master')
@section('title', $title)
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ $profil->data->banner }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    {{-- <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Selamat Datang Di </p> --}}
                                    <h5 class="display-1 mb-4 animated slideInDown">Selamat Datang di Pondok Pesantren
                                        {{ $profil->data->name }}
                                    </h5>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Tentang Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="border rounded p-4">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                        <h1 class="display-5 mb-4">Pondok Pesantren {{ $profil->data->name }}</h1>
                        <p class="mb-4">{!! $profil->data->vision !!}
                        </p>
                        <a href="{{ route('tentang') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Selengkapnya
                            ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Tentang End -->


    <!-- Jenjang Start -->
    <div class="container-fluid facts my-5 py-5">
        <h1 class="" style="text-align: center; color:white;">Jenjang Pendidikan</h1>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white">SD</h1>
                    <span class="fs-5 text-white">Sekolah Dasar</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white">SMP</h1>
                    <span class="fs-5 text-white">Sekolah Menengah Pertama</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white">SMA</h1>
                    <span class="fs-5 text-white">Sekolah Menengah Keatas</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white">SMK</h1>
                    <span class="fs-5 text-white">Sekolah Menengah Kejuruan</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Jenjang End -->

    <!-- Galeri Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Galeri</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($album->data as $album)
                    <div class="project-item pe-5 pb-5">
                        <div class="project-img mb-3">
                            <div style="width: 100%; height: 220px; overflow: hidden;" class="rounded">
                                <img class="img-fluid" src="{{ $album->photo }}" alt="Album">
                            </div>
                        </div>
                        <div class="project-title">
                            <h4 class="mb-0">{{ $album->album }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Galeri End -->

    <!-- Pengurus Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Pengurus</h1>
            </div>
            <div class="row g-4">
                @foreach ($employee->data as $employee)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div style="height: 250px; overflow: hidden;" class="rounded">
                                <img class="img-fluid" src="{{ $employee->photo }}" alt="">
                            </div>
                            <div class="team-text">
                                <h6 class="mb-0">{{ $employee->name }}</h6>
                                <div class="team-social d-flex">
                                    <h6>{{ $employee->position }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Pengurus End -->

    <!-- Alumni Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Alumni</h1>
            </div>
            <div class="row">
                @foreach ($alumni->data as $alumni)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-item text-center">
                        <div class="testimonial-text border rounded p-4 pt-5 mb-3">
                            <div class="btn-square bg-white border rounded-circle mb-3">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            <p>{{ $alumni->description }}</p>
                        </div>
                        <img class="rounded-circle mb-3" src="{{ $alumni->photo }}" alt="" style="width: 80px; height: 80px;">
                        <h5 class="mb-1">{{ $alumni->name }}</h5>
                        <span class="text-muted">{{ $alumni->position }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div style="text-align: center;">
    <a href="https://dashboard.ppsunankalijogosby.online/remaja/tahsinul-akhlaq-bahrul-ulum/inbox" 
    class="btn btn-primary py-3 px-5 animated slideInDown" >Kirim Masukan</a>
    </div>
    <!-- Alumni End -->

@endsection
