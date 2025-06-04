@extends('layouts.landing.index')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <img src="assets/img/1.png" alt="">
            <div class="carousel-container">
                {{-- <h2 class="animated fadeInDown">Selamat Datang di Program Studi <span class="text-primary">Teknologi Geomatika</span></h2> --}}
                {{-- <p class="animated fadeInUp delay-1s">Bergabunglah dengan program studi terdepan dalam bidang survey dan pemetaan</p> --}}
                <a href="#about" class="btn-get-started animated fadeInUp delay-2s">Pelajari Lebih Lanjut</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/img/1.png" alt="">
            <div class="carousel-container">
                {{-- <h2 class="animated fadeInDown">Jurusan <span class="text-primary">Rekayasa dan Komputer</span></h2> --}}
                {{-- <p class="animated fadeInUp delay-1s">Inovasi teknologi untuk masa depan yang lebih baik</p> --}}
                <a href="#about" class="btn-get-started animated fadeInUp delay-2s">Mulai Eksplorasi</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/img/4.png" alt="">
            <div class="carousel-container">
                {{-- <h2 class="animated fadeInDown">Politeknik Pertanian Negeri Samarinda</h2> --}}
                {{-- <p class="animated fadeInUp delay-1s">Membangun generasi unggul di bidang teknologi dan pertanian</p> --}}
                <a href="#about" class="btn-get-started animated fadeInUp delay-2s">Bergabung Sekarang</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>

    <!-- Featured Cards -->
    <div class="featured container">
        <div class="row gy-4">
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="featured-item position-relative">
                    <div class="icon bg-primary"><i class="bi bi-bounding-box-circles icon text-white"></i></div>
                    <h4><a href="" class="stretched-link text-decoration-none">Akreditasi</a></h4>
                    <p class="text-muted">Pelajari lebih lanjut tentang pencapaian akreditasi Program Studi Teknologi Geomatika</p>
                </div>
            </div>

            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="featured-item position-relative">
                    <div class="icon bg-success"><i class="bi bi-calendar4-week icon text-white"></i></div>
                    <h4><a href="" class="stretched-link text-decoration-none">Jadwal Kuliah</a></h4>
                    <p class="text-muted">Dapatkan informasi terkini tentang jadwal perkuliahan untuk menunjang aktivitas akademikmu</p>
                </div>
            </div>

            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="featured-item position-relative">
                    <div class="icon bg-warning"><i class="bi bi-broadcast icon text-white"></i></div>
                    <h4><a href="" class="stretched-link text-decoration-none">Informasi Beasiswa</a></h4>
                    <p class="text-muted">Temukan peluang beasiswa menarik untuk Tahun Ajaran 2025/2026 dan raih impianmu!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about-us" class="section py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2 class="fw-bold">Tentang Kami</h2>
            <div class="underline mx-auto bg-primary"></div>
            <p class="lead text-muted mt-3">{{ $aboutUs->title ?? 'Program Studi Teknologi Geomatika' }}</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="about-content">
                    <h3 class="mb-3 text-warning fw-bold">{{ $aboutUs->title ?? '' }}</h3>
                    <p class="text-justify">{{ $aboutUs->description_1 ?? '' }}</p>
                    <p class="text-justify">{{ $aboutUs->description_2 ?? '' }}</p>
                    <p class="text-justify">{{ $aboutUs->description_3 ?? '' }}</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-stats">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-item text-center p-4 bg-white rounded shadow-sm">
                                <h3 class="text-primary mb-1">{{ $aboutUs->years_experience ?? 0 }}+</h3>
                                <p class="mb-0 text-muted">Tahun Pengalaman</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item text-center p-4 bg-white rounded shadow-sm">
                                <h3 class="text-success mb-1">{{ $aboutUs->total_alumni ?? 0 }}+</h3>
                                <p class="mb-0 text-muted">Alumni</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item text-center p-4 bg-white rounded shadow-sm">
                                <h3 class="text-warning mb-1">{{ $aboutUs->expertise_fields ?? 0 }}</h3>
                                <p class="mb-0 text-muted">Bidang Keahlian</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item text-center p-4 bg-white rounded shadow-sm">
                                <h3 class="text-info mb-1">{{ $aboutUs->accreditation ?? '-' }}</h3>
                                <p class="mb-0 text-muted">Akreditasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Choose Us Section -->
<section id="about" class="section about py-5">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 gx-5">
            <div class="col-12 col-lg-6 order-2 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                @if ($outputLulusans->isNotEmpty())
                    @foreach ($outputLulusans as $item)
                        <a href="{{ route('output-lulusan-detail', $item->id) }}" class="position-relative text-decoration-none text-dark services section">  
                            <div class="service-item position-relative d-flex flex-row text-decoration-none gap-3 mb-3 h-auto shadow-sm hover-lift">
                                <div class="row m-0 p-3 w-100">
                                    <div class="col-12 col-md-3 mb-3 mb-md-0 m-0 p-0">
                                        <div class="img-container">
                                            <img src="{{ Storage::url($item->image) }}" alt="" class="rounded">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9 d-flex align-items-center text-start m-0 p-0 ps-0 ps-md-3">
                                        <h4 class="title lh-sm m-0 p-0">{{ $item->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="col-6 order-2 mx-auto hero m-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="featured-item position-relative text-decoration-none m-0 p-3">
                            <p class="text-center mx-auto m-0 p-0 text-muted">Belum ada Output Lulusan yang tersedia.</p>
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="col-12 col-lg-6 order-1 content">
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="fw-bold">10 Alasan Mengapa Masuk Teknologi Geomatika</h2>
                    <div class="underline bg-primary"></div>
                    <ul class="list-unstyled mt-4">
                        @foreach ($alasan as $index => $item)
                            <li class="mb-3 d-flex align-items-start" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}">
                                <i class="bi bi-check2-circle text-success me-3 fs-5"></i>
                                <span class="text-dark">{{ $item->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section id="programs" class="section py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Program Unggulan</h2>
            <div class="underline mx-auto bg-primary"></div>
            <p class="lead text-muted mt-3">Bidang keahlian yang kami tawarkan</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="program-card text-center p-4 bg-white rounded shadow-sm h-100 hover-lift">
                    <div class="icon mb-3">
                        <i class="bi bi-geo-alt text-primary fs-1"></i>
                    </div>
                    <h5 class="mb-3">Survey Terestris</h5>
                    <p class="text-muted">Teknik pengukuran dan pemetaan permukaan bumi secara akurat</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="program-card text-center p-4 bg-white rounded shadow-sm h-100 hover-lift">
                    <div class="icon mb-3">
                        <i class="bi bi-map text-success fs-1"></i>
                    </div>
                    <h5 class="mb-3">Sistem Informasi Geografis</h5>
                    <p class="text-muted">Teknologi untuk mengelola dan menganalisis data spasial</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="program-card text-center p-4 bg-white rounded shadow-sm h-100 hover-lift">
                    <div class="icon mb-3">
                        <i class="bi bi-camera text-warning fs-1"></i>
                    </div>
                    <h5 class="mb-3">Fotogrametri & Penginderaan Jauh</h5>
                    <p class="text-muted">Interpretasi data dari foto udara dan citra satelit</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="program-card text-center p-4 bg-white rounded shadow-sm h-100 hover-lift">
                    <div class="icon mb-3">
                        <i class="bi bi-water text-info fs-1"></i>
                    </div>
                    <h5 class="mb-3">Hidrografi</h5>
                    <p class="text-muted">Survei dan pemetaan badan air dan dasar laut</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section id="berita" class="berita-section services section py-5">
    <div class="container section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Berita Terkini</h2>
        <div class="underline mx-auto bg-primary"></div>
        <p class="lead text-muted mt-3">Informasi terbaru seputar Program Studi Teknologi Geomatika</p>
    </div>
    
    <div class="container">
        <div class="row gy-4">
            @if ($beritas->isNotEmpty())
                @foreach ($beritas as $index => $berita)
                    <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                        <a href="{{ route('berita-detail', $berita->id) }}" class="position-relative text-decoration-none text-dark">  
                            <div class="service-item position-relative text-decoration-none bg-white rounded shadow-sm overflow-hidden hover-lift">
                                <div class="img-container mb-3 position-relative">
                                    <img src="{{ Storage::url($berita->image) }}" alt="" class="w-100">
                                    <div class="overlay-gradient"></div>
                                </div>
                                <div class="p-4">
                                    <h5 class="title fw-bold lh-sm mb-3 ">{{ $berita->title }}</h5>
                                    <p class="description text-muted mb-3">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($berita->description, '<p><a><b><strong><i><u><em><br><ol><ul><li>'), 150) !!}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative text-decoration-none bg-white rounded shadow-sm p-4">
                        <p class="text-center text-muted">Belum ada berita yang tersedia.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
    <div class="d-flex justify-content-center w-100 mt-5">
        <a href="{{ route('berita-lainnya') }}" class="btn btn-outline-warning btn-lg">
            Berita Lainnya
            <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>
</section>

<!-- Facilities Section -->
<section id="facilities" class="section py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Fasilitas Kampus</h2>
            <div class="underline mx-auto bg-primary"></div>
            <p class="lead text-muted mt-3">Fasilitas modern untuk mendukung pembelajaran</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="facility-card bg-white rounded shadow-sm p-4 text-center h-100 hover-lift">
                    <i class="bi bi-laptop text-primary fs-1 mb-3"></i>
                    <h5 class="mb-3">Laboratorium Komputer</h5>
                    <p class="text-muted">Dilengkapi dengan software GIS dan pemetaan terkini</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="facility-card bg-white rounded shadow-sm p-4 text-center h-100 hover-lift">
                    <i class="bi bi-tools text-success fs-1 mb-3"></i>
                    <h5 class="mb-3">Laboratorium Survey</h5>
                    <p class="text-muted">Peralatan survey modern untuk praktik lapangan</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="facility-card bg-white rounded shadow-sm p-4 text-center h-100 hover-lift">
                    <i class="bi bi-book text-warning fs-1 mb-3"></i>
                    <h5 class="mb-3">Perpustakaan </h5>
                    <p class="text-muted">Koleksi buku dan jurnal ilmiah terlengkap</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section id="clients" class="section clients py-5">
    <div class="container section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Mitra Kerjasama</h2>
        <div class="underline mx-auto bg-primary"></div>
        <p class="lead text-muted mt-3">Bermitra dengan berbagai institusi</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoplay": { "delay": 5000 },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": { "slidesPerView": 2, "spaceBetween": 40 },
                    "480": { "slidesPerView": 3, "spaceBetween": 60 },
                    "640": { "slidesPerView": 4, "spaceBetween": 80 },
                    "992": { "slidesPerView": 6, "spaceBetween": 120 }
                }
            }
            </script>
            <div class="swiper-wrapper align-items-center">
                @foreach($partners as $partner)
                    <div class="swiper-slide">
                        <div class="client-logo p-3 text-center">
                            <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" class="img-fluid" style="max-height: 60px;">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <style>
        .client-logo {
            transition: all 0.3s ease;
            opacity: 0.7;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80px;
        }

        .client-logo:hover {
            opacity: 1;
            transform: scale(1.05);
        }

        .swiper-slide {
            width: auto !important;
            flex-shrink: 0;
        }

        .underline {
            width: 60px;
            height: 3px;
        }

        .swiper-pagination-bullet {
            background: #007bff;
        }

        .swiper-pagination-bullet-active {
            background: #0056b3;
        }
    </style>
</section>


<style>
/* Custom CSS untuk mempercantik tampilan */
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}

.underline {
    width: 80px;
    height: 3px;
    margin: 10px 0;
}

.btn-get-started {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
    padding: 12px 30px;
    border-radius: 25px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-get-started:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,123,255,0.4);
    color: white;
    text-decoration: none;
}

.featured-item {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    height: 100%;
    transition: all 0.3s ease;
}

.featured-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.featured-item .icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.overlay-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.1));
}

.service-item {
    transition: all 0.3s ease;
    border-radius: 10px;
    overflow: hidden;
}

.img-container img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
}

.fadeInDown {
    animation-name: fadeInDown;
}

.fadeInUp {
    animation-name: fadeInUp;
}

.delay-1s {
    animation-delay: 1s;
}

.delay-2s {
    animation-delay: 2s;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translate3d(0, -100%, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translate3d(0, 100%, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}
</style>

@endsection