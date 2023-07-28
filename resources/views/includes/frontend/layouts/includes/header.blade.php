{{-- Header --}}
<header class="main-topbar">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('assets/frontend/img/header-logo.png') }}" alt="Disperkim" class="topbar-logo">
            </a>

            <div class="social-media-container">
                <a href="https://www.youtube.com/@dinasperumahandankawasanpe1902" class="social-media-item">
                    <i class="ri-youtube-fill"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+6289653266406&text=kirimkan%20saran%20dan%20masukkan%20anda%20terima%20kasih" class="social-media-item">
                    <i class="ri-whatsapp-fill"></i>
                </a>
                <a href="https://www.instagram.com/disperkimsumut/" class="social-media-item">
                    <i class="ri-instagram-fill"></i>
                </a>
                <a href="https://www.facebook.com/disperkimsumut/" class="social-media-item">
                    <i class="ri-facebook-fill"></i>
                </a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('front.home') }}">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Rumah Klinik">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ri-menu-line"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ Route::is('front.home*') ? 'active' : '' }}" href="{{ route('front.home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ Route::is('front.tentang-kami*') ? 'active' : '' }}" href="{{ route('front.tentang-kami') }}">Tentang Klinik Rumah</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link fw-medium" data-bs-toggle="dropdown" aria-expanded="false">Layanan <i class="ri-arrow-down-s-line"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ route('front.layanan.index') }}" class="dropdown-item">Informasi Perumahan di Sumatera Utara</a></li>
                        <li><a href="{{ route('front.layanan.fasilitas') }}" class="dropdown-item">Fasilitasi Penyelenggaraan Rumah Negara di Sumatera Utara</a></li>
                        <li><a href="{{ route('front.layanan.program') }}" class="dropdown-item">Program Bantuan Rumah Layak Huni Bagi MBR</a></li>
                        <li><a href="{{ route('front.layanan.kemitraan') }}" class="dropdown-item">Kemitraan dengan Institusi Non-Pemerintah</a></li>
                        <li><a href="{{ route('front.layanan.konsultasi') }}" class="dropdown-item">Konsultasi Teknis Mengenai Rumah</a></li>
                        <li><a href="{{ route('front.layanan.teknologi') }}" class="dropdown-item">Teknologi Konstruksi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link fw-medium" data-bs-toggle="dropdown" aria-expanded="false">Ruang Media <i class="ri-arrow-down-s-line"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('front.ruang-media.media-publikasi') }}" class="dropdown-item">Media Publikasi</a></li>
                        <li><a href="{{ route('front.ruang-media.artikel') }}" class="dropdown-item">Artikel</a></li>
                        <li><a href="{{ route('front.ruang-media.galeri') }}" class="dropdown-item">Galeri</a></li>
                        <li><a href="{{ route('front.ruang-media.agenda') }}" class="dropdown-item">Agenda</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link fw-medium" data-bs-toggle="dropdown" aria-expanded="false">Data <i class="ri-arrow-down-s-line"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('front.data.index') }}" class="dropdown-item">Data Perumahan dan Pemukiman</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link fw-medium">Kontak</a>
                </li>
            </ul>

            <div class="navbar-cta ms-lg-4">
                <a href="{{ route('front.login') }}" class="navbar-cta-button text-decoration-none fw-medium {{ Route::is('front.login*') ? 'active' : '' }}"><i class="ri-login-circle-line"></i> Masuk</a>
            </div>
        </div>
    </div>
</nav>
{{-- Header - End --}}