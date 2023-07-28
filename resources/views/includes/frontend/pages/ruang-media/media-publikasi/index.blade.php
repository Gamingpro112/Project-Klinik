@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Media Publikasi</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Media Publikasi
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Layanan --}}
<section id="ruang-media" class="mb-56">
    <div class="container-fluid">
        <div class="media-publikasi-container">
            <div class="row">
                <div class="column-item col-12 col-md-6">
                    <div class="card">
                        <img src="https://picsum.photos/200" alt="Artikel" class="card-img-top">
                        <div class="card-body p-0">
                            <p class="p-16 color-gray article-date-label">Selasa, 30 Mei 2023</p>
    
                            <h4 class="h4 color-dark article-title fw-semibold">Leaflet Rumah Layak Huni</h4>
    
                            <p class="p-16 mb-3">
                                Rumah Layak Huni adalah rumah yang memenuhi persyaratan keselamatan bangunan dan kecukupan minimum luas bangunan serta Kesehatan penghuni (UU No. 1. 2011)
                            </p>
    
                            <a href="#" class="button-link-action p-16 fw-medium text-decoration-none">Baca Selengkapnya <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Layanan - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/ruang-media.css') }}">
@endpush