@extends('layouts.master')
@section('title', $title)
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Detail Galeri</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Galeri</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        @foreach ($album->data as $album)
            <div class="container">
                <div class="row g-4 align-items mb-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ $album->photo }}" alt="Gambar Album">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="border rounded p-4">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Galeri Kami</p>
                            <h1 class="display-5 mb-4">{{ $album->album }}</h1>
                            <p class="mb-4">{!! $album->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    </div>
    </div>

@endsection
