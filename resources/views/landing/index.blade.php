@extends('layouts.master')
@section('title', $title)
@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                {{-- <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Selamat Datang Di </p> --}}
                                <h4 class="display-1 mb-4 animated slideInDown">Selamat Datang di {{$profil->data->name}}
                                </h4>
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
                    <h1 class="display-5 mb-4">Pondok Pesantren  {{$profil->data->name}}</h1> 
                <p class="mb-4">{!!$profil->data->vision!!}
                </p>
                <a href="{{ route('tentang') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Selengkapnya ...</a>
                    {{-- <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                aria-selected="true">Story</button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                aria-selected="false">Mission</button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                aria-selected="false">Vision</button>
                        </div>
                    </nav> --}}
                    {{-- <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                            aria-labelledby="nav-story-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                amet diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                            aria-labelledby="nav-mission-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                amet diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                amet diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>No Hidden Cost</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Dedicated Team</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div> --}}
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
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Financial Planning</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Cash Investment</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Financial Consultancy</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Business Loans</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Galeri End -->

<!-- Pengurus Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p> --}}
            <h1 class="display-5 mb-5">Pengurus</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                    <div class="team-text">
                        <h6 class="mb-0">Kate Winslet</h6>
                        <div class="team-social d-flex">
                            <h6>Kepala Pondok</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                    <div class="team-text">
                        <h6 class="mb-0">Jac Jacson</h6>
                        <div class="team-social d-flex">
                            <h6>Kepala Madrasah MTs</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                    <div class="team-text">
                        <h6 class="mb-0">Doris Jordan</h6>
                        <div class="team-social d-flex">
                            <h6>Kepala Madrasah MA</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pengurus End -->

<!-- Callback Start -->
<div class="container-fluid callback my-5 pt-5">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        {{-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hubungi Kami
                        </p> --}}
                        <h1 class="display-5 mb-5">Hubungi Kami</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                <label for="name">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Email Anda">
                                <label for="mail">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Nomor Telepon Anda">
                                <label for="mobile">Nomor Telepon</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subjek</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Pesan</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Kirim Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Callback End -->

<!-- Alumni Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p> --}}
            <h1 class="display-5 mb-5">Alumni</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="img/testimonial-4.jpg" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Alumni End -->

@endsection