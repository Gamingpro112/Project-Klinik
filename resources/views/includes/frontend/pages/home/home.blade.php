@extends('includes.frontend.layouts.base')

@section('content')
{{-- Hero --}}
<div id="carouselExampleCaptions" class="carousel slide main-hero mb-56">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/frontend/img/header-bg.png') }}" class="d-block w-100" alt="Rumah Klinik">
            <div class="carousel-caption d-none d-md-block">
                <img src="{{ asset('assets/frontend/img/header-img.png') }}" alt="Rumah Klinik" class="mb-3">
                <h2 class="h1 mb-0">KLINIK RUMAH</h2>
                <h3 class="h2 mb-2">Sumut Bermatabat</h3>
                <p class="p-16">Dinas Perumahan dan Kawasan Permukiman Provinsi Sumatera Utara</p>
                <a href="#" class="btn btn-custom-primary">Info Selengkapnya</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/frontend/img/header-bg.png') }}" class="d-block w-100" alt="Rumah Klinik">
            <div class="carousel-caption d-none d-md-block">
                <img src="{{ asset('assets/frontend/img/header-img.png') }}" alt="Rumah Klinik" class="mb-3">
                <h2 class="h1 mb-0">KLINIK RUMAH</h2>
                <h3 class="h2 mb-2">Sumut Bermatabat</h3>
                <p class="p-16">Dinas Perumahan dan Kawasan Permukiman Provinsi Sumatera Utara</p>
                <a href="#" class="btn btn-custom-primary">Info Selengkapnya</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/frontend/img/header-bg.png') }}" class="d-block w-100" alt="Rumah Klinik">
            <div class="carousel-caption d-none d-md-block">
                <img src="{{ asset('assets/frontend/img/header-img.png') }}" alt="Rumah Klinik" class="mb-3">
                <h2 class="h1 mb-0">KLINIK RUMAH</h2>
                <h3 class="h2 mb-2">Sumut Bermatabat</h3>
                <p class="p-16">Dinas Perumahan dan Kawasan Permukiman Provinsi Sumatera Utara</p>

                <a href="#" class="btn btn-custom-primary">Info Selengkapnya</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <i class="ri-arrow-left-s-line"></i>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <i class="ri-arrow-right-s-line"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- Hero - End --}}

{{-- Short About --}}
<section id="short-about" class="short-about-section mb-56">
    <div class="container-fluid">
        <div class="section-header mb-32 text-center">
            <span class="l-16 fw-semibold subtitle-section">SEKILAS</span>

            <h3 class="h3 fw-semibold">Tentang <span class="highlight-header">Klinik Rumah</span></h3>

            <p class="p-16 header-desc mb-0">
                <strong>Klinik Rumah</strong> adalah pusat pelayanan informasi dan fasilitasi kepemilikan rumah layak huni bagi seluruh masyarakat Sumatera Utara.
            </p>

            <button class="btn btn-custom-primary l-16">Selengkapnya</button>
        </div>
    </div>
</section>
{{-- Short About - End --}}

{{-- Layanan --}}
<section id="layanan" class="layanan mb-56">
    <div class="container-fluid">
        <div class="section-header mb-32 text-center">
            <span class="l-16 fw-semibold subtitle-section">LAYANAN</span>
            
            <h3 class="h3 fw-semibold">Layanan <span class="highlight-header">Rumah Klinik</span></h3>

            <p class="p-16 header-desc mb-0">
                Layanan informasi yang disediakan di Klinik Rumah.
            </p>
        </div>

        <div class="section-body">
            <div class="row justify-content-sm-center">
                <div class="col-lg-4 col-md-6 col-12 layanan-item">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <div class="circle-ornament"></div>
                            <div class="card-body">
                                <div class="icon-container">
                                    <i class="ri-home-heart-line"></i>
                                </div>
    
                                <div class="d-flex card-desc justify-content-between align-items-center">
                                    <h2 class="h2 layanan-title">Ingin Memiliki Rumah</h2>
                                    <h1 class="display layanan-question">?</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 layanan-item">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <div class="circle-ornament"></div>
                            <div class="card-body">
                                <div class="icon-container">
                                    <i class="ri-home-gear-line"></i>
                                </div>
    
                                <div class="d-flex card-desc justify-content-between align-items-center">
                                    <h2 class="h2 layanan-title">Ingin Memperbaiki Rumah</h2>
                                    <h1 class="display layanan-question">?</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 layanan-item">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <div class="circle-ornament"></div>
                            <div class="card-body">
                                <div class="icon-container">
                                    <i class="ri-home-smile-line"></i>
                                </div>
    
                                <div class="d-flex card-desc justify-content-between align-items-center">
                                    <h2 class="h2 layanan-title">Ingin Menyewa Rumah</h2>
                                    <h1 class="display layanan-question">?</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Layanan - End --}}

{{-- List Layanan --}}
<section id="layanan-list" class="layanan-list mb-56">
    <div class="container-fluid">
        <div class="section-body">
            <div class="row justify-content-sm-center" style="row-gap: 32px;">
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-1.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Informasi Perumahan di Sumatera Utara</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-1.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Fasilitasi Penyelenggaraan Rumah Negara di Sumatera Utara</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-3.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Program Bantuan Rumah Layak Huni Bagi MBR</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-4.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Kemitraan dengan Institutsi Non-Pemerintah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-5.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Kemitraan dengan Institutsi Non-Pemerintah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-6.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Kemitraan dengan Institutsi Non-Pemerintah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-7.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Kemitraan dengan Institutsi Non-Pemerintah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 layanan-list-item">
                    <div class="card">
                        <div class="circle-ornament"></div>
                        <div class="card-body">
                            <img src="{{ asset('assets/frontend/img/layanan-ic-8.svg') }}" class="layanan-list-image">
                            
                            <div class="card-divider"></div>

                            <a href="#" class="p-16 mb-0 text-decoration-none">Kemitraan dengan Institutsi Non-Pemerintah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- List Layanan - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/home.css') }}">
@endpush