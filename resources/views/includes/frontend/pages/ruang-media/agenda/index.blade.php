@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Agenda</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Agenda
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Agenda --}}
<section id="agenda" class="mb-56">
    <div class="container-fluid">
        <div class="row">
            <div class="column-item col-lg-4 col-md-6 col-12">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="p-16 fw-semibold"><i class="ri-hand-heart-line"></i> Sosialisasi Klinik Rumah</h6>
    
                            <div class="schedule-container">
                                <div class="schedule-item">
                                    <i class="ri-calendar-line"></i>
    
                                    <p class="p-14 mb-0">Rabu, April 16 2023</p>
                                </div>
                                <div class="schedule-item">
                                    <i class="ri-time-line"></i>
    
                                    <p class="p-14 mb-0">09:00 - 16:00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- Agenda - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/ruang-media.css') }}">
@endpush