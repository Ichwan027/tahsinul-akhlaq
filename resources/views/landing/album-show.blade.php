@extends('layouts.master')
@section('title', $title)
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">{{ $album->data->album }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('album') }}">Halaman</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('album') }}">Galeri</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- start --}}
    <div class="container-xxl py-5">
        <div class="container mb-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Projects</p> --}}
                <h1 class="display-5 mb-5">{{ $album->data->album }}</h1>
                <p>{{ $album->data->description }}</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($album->data->photos as $photo)
                    <div class="col-sm-4 mb-5">
                        <div class="project-item pe-5 pb-5">
                            <div class="project-img mb-3">
                                <div style="width: 100%; height: 220px; overflow: hidden;" class="rounded">
                                    <img class="img-fluid" src="{{ $photo->photo }}" alt="Album">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    {{-- end --}}



@endsection
