@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Data</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Data
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Data --}}
<section id="data" class="mb-56">
    <div class="container-fluid">
        <div class="data-container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active h5" id="pills-grafik-tab" data-bs-toggle="pill" data-bs-target="#pills-grafik" type="button" role="tab" aria-controls="pills-grafik" aria-selected="true"><i class="ri-line-chart-line"></i> Grafik</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link h5" id="pills-tabel-tab" data-bs-toggle="pill" data-bs-target="#pills-tabel" type="button" role="tab" aria-controls="pills-tabel" aria-selected="false"><i class="ri-table-line"></i> Tabel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link h5" id="pills-map-tab" data-bs-toggle="pill" data-bs-target="#pills-map" type="button" role="tab" aria-controls="pills-map" aria-selected="false"><i class="ri-map-pin-line"></i> Peta</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-grafik" role="tabpanel" aria-labelledby="pills-grafik-tab" tabindex="0">
                    <div class="no-data-message">
                        <i class="ri-error-warning-line"></i>
    
                        <span class="l-16 fw-semibold subtitle-section">Grafik Belum Tersedia</span>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tabel" role="tabpanel" aria-labelledby="pills-tabel-tab" tabindex="0">
                    <div class="no-data-message">
                        <i class="ri-error-warning-line"></i>
    
                        <span class="l-16 fw-semibold subtitle-section">Tabel Belum Tersedia</span>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab" tabindex="0">
                    <div class="no-data-message">
                        <i class="ri-error-warning-line"></i>
    
                        <span class="l-16 fw-semibold subtitle-section">Peta Belum Tersedia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Data - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/data.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/home.css') }}">
@endpush