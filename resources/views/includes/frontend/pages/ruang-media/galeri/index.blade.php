@extends('includes.frontend.layouts.base')

@section('content')
{{-- Breadcrumbs --}}
<div class="breadcrumbs-container mb-56">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between breadcrumb-wrapper">
            <div class="breadcrumb-title">
                <h5 class="h5 mb-0 fw-semibold">Galeri</h5>
            </div>
    
            <ul class="breadcrumb-nav p-0 mb-0">
                <li><a href="{{ route('front.home') }}" class="breadcrumb-link">Beranda</a></li>
                <li>/</li>
                <li>
                    Galeri
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Breadcrumbs - End --}}

{{-- Galeri --}}
<section id="galeri">
    <div class="container-fluid">
        <div class="galeri-carousel-container">
            <div class="galeri-carousel-button-container">
                <button class="btn galeri-button prev">
                    <i class="ri-arrow-left-line"></i>
                </button>
                <button class="btn galeri-button next">
                    <i class="ri-arrow-right-line"></i>
                </button>
            </div>

            <div class="galeri-carousel">
                <div class="column-item">
                    <figure class="figure">
                        <img src="https://picsum.photos/200" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-center p-16">Serah Terima Bantuan Sosial Rutilahu oleh Bapak Gubernur Jawa Barat</figcaption>
                    </figure>
                </div>
                <div class="column-item">
                    <figure class="figure">
                        <img src="https://picsum.photos/200" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-center p-16">Serah Terima Bantuan Sosial Rutilahu oleh Bapak Gubernur Jawa Barat</figcaption>
                    </figure>
                </div>
                <div class="column-item">
                    <figure class="figure">
                        <img src="https://picsum.photos/200" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-center p-16">Serah Terima Bantuan Sosial Rutilahu oleh Bapak Gubernur Jawa Barat</figcaption>
                    </figure>
                </div>
                <div class="column-item">
                    <figure class="figure">
                        <img src="https://picsum.photos/200" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-center p-16">Serah Terima Bantuan Sosial Rutilahu oleh Bapak Gubernur Jawa Barat</figcaption>
                    </figure>
                </div>
                <div class="column-item">
                    <figure class="figure">
                        <img src="https://picsum.photos/200" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-center p-16">Serah Terima Bantuan Sosial Rutilahu oleh Bapak Gubernur Jawa Barat</figcaption>
                    </figure>
                </div>
                <div class="column-item">
                    <figure class="figure">
                        <img src="https://picsum.photos/200" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-center p-16">Serah Terima Bantuan Sosial Rutilahu oleh Bapak Gubernur Jawa Barat</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Galeri - End --}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/ruang-media.css') }}">
@endpush

@push('script')
    <script src="{{ asset('assets/frontend/js/pages/ruang-media/galeri.js') }}"></script>
@endpush