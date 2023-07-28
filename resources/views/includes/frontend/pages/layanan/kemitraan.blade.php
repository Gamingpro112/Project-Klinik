@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Kemitraan dengan Institusi Non-Pemerintah</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Kemitraan dengan Institusi Non-Pemerintah
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Layanan --}}
<section id="layanan" class="mb-56">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-12 column-item">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/frontend/img/fasilitas-img.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/frontend/img/fasilitas-img.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/frontend/img/fasilitas-img.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-12 column-item">
                <h4 class="h4 fw-semibold">
                    Kemitraan dengan Institusi Non-Pemerintah
                </h4>

                <p class="p-16 mb-0">
                    Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- Layanan - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/layanan.css') }}">
@endpush