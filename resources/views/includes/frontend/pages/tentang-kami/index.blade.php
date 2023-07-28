@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Tentang Kami</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Tentang Klinik Rumah
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Tentang Kami --}}
<section id="tentang-kami" class="mb-56">
    <div class="container-fluid">
        <div class="about-container text-center">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Klinik Rumah" class="mb-3">

            <div class="about-body text-center">
                <p class="p-16 mb-0 fst-italic">
                    <i class="ri-double-quotes-l"></i>

                    <strong>Klinik Rumah</strong> adalah pusat pelayanan informasi dan fasilitasi kepemilikan rumah layak huni bagi seluruh masyarakat Sumatera Utara

                    <i class="ri-double-quotes-r"></i>
                </p>
            </div>
        </div>

        {{-- Layanan Klinik Rumah --}}
        <div class="layanan-kr-container">
            <ul class="layanan-menu">
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Informasi Perumahan di Sumatera Utara</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Fasilitasi Penyelenggara Rumah Negara di Sumatera Utara</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Program Bantuan Rumah Layak Huni Bagi MBR</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Kemitraan dengan Institusi Non-Pemerintah</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Konsultasi Teknis Mengenai Rumah</a></li>
                <li class="layanan-item border-0"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Teknologi Konstruksi</a></li>
            </ul>
        </div>
        {{-- Layanan Klinik Rumah - End --}}
    </div>
</section>
{{-- Tentang Kami - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/tentang-kami.css') }}">
@endpush