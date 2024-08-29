@extends('layouts.master')
@section('title', $title)
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Galeri</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- start --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Projects</p> --}}
                <h1 class="display-5 mb-5">Galeri Kami</h1>
            </div>
        </div>
            @foreach ($album->data as $album)
            <div class="container">
                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                    <div class="project-item pe-5 pb-5">
                        <div class="project-img mb-3">
                            <img class="img-fluid rounded" src="{{ $album->photo }}" alt="">
                            <a href="{{ route('detail_album') }}"><i class="fa fa-link fa-3x text-primary"></i></a>
                        </div>
                        <div class="project-title">
                            <h4 class="mb-0">{{ $album->album }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    {{-- end --}}



@endsection
