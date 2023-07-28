@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Informasi Perumahan di Sumatera Utara</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Informasi Perumahan di Sumatera Utara
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Layanan --}}
<section id="layanan" class="mb-56">
    <div class="container-fluid">
        {{-- Layanan Klinik Rumah --}}
        <div class="layanan-kr-container">
            <ul class="layanan-menu">
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Kebijakan Program Perumahan</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Peraturan Perundang-Undangan Mengenai Perumahan</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Skema dan Mekanisme  Bantuan Perbaikan Rumah</a></li>
                <li class="layanan-item"><a href="#" class="layanan-link p-16 fw-semibold text-decoration-none"><i class="ri-arrow-right-s-line"></i> Pemberian/Bantuan Subsidi Perumahan Bagi MBR</a></li>
            </ul>
        </div>
        {{-- Layanan Klinik Rumah - End --}}
    </div>
</section>
{{-- Layanan - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/layanan.css') }}">
@endpush