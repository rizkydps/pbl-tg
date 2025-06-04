@extends('layouts.landing.index')

@section('content')
<section id="lab-sig" class="lab-section py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <h2 class="display-5 fw-bold mb-3">
                    Laboratorium SIG dan Penginderaan Jauh
                </h2>
                <p class="lead text-muted">
                    Fasilitas unggulan untuk pembelajaran dan penelitian teknologi geospasial modern
                </p>
            </div>
        </div>

        <!-- Tab Navigation -->
        <div class="row justify-content-center">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified flex-column flex-md-row mb-4" id="labTab" role="tablist">
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link active rounded-pill px-4 py-3 w-100" 
                                id="profil-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#profil" 
                                type="button" 
                                role="tab" 
                                aria-controls="profil" 
                                aria-selected="true">
                            <i class="fas fa-info-circle me-2"></i>
                            <span class="d-none d-sm-inline">Profil</span>
                            <span class="d-sm-none">Info</span>
                        </button>
                    </li>
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link rounded-pill px-4 py-3 w-100" 
                                id="form-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#form" 
                                type="button" 
                                role="tab" 
                                aria-controls="form" 
                                aria-selected="false">
                            <i class="fas fa-clipboard-list me-2"></i>
                            <span class="d-none d-sm-inline">Form Peminjaman</span>
                            <span class="d-sm-none">Form</span>
                        </button>
                    </li>
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link rounded-pill px-4 py-3 w-100" 
                                id="survey-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#survey" 
                                type="button" 
                                role="tab" 
                                aria-controls="survey" 
                                aria-selected="false">
                            <i class="fas fa-star me-2"></i>
                            <span class="d-none d-sm-inline">Survey Kepuasan</span>
                            <span class="d-sm-none">Survey</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill px-4 py-3 w-100" 
                                id="video-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#video" 
                                type="button" 
                                role="tab" 
                                aria-controls="video" 
                                aria-selected="false">
                            <i class="fas fa-play-circle me-2"></i>
                            <span class="d-none d-sm-inline">Video Tutorial</span>
                            <span class="d-sm-none">Video</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="labTabContent">
            <!-- PROFIL TAB -->
            <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                <div class="row g-4">
                    <!-- Kepala Lab & PLP -->
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-header ">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-user-tie me-2"></i>Tim Laboratorium
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <h6 class="text-warning fw-bold">Kepala Laboratorium</h6>
                                    <p class="mb-0">Dyah Widyasasi, S.Hut., M.P.</p>
                                </div>
                                <div>
                                    <h6 class="text-warning fw-bold">Penanggungjawab Laboratorium Pendidikan (PLP)</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="fas fa-user-circle text-muted me-2"></i>
                                            Kuswantoro, S.T., M.T.
                                        </li>
                                        <li>
                                            <i class="fas fa-user-circle text-muted me-2"></i>
                                            Triono Risti Sutrisno, A.Md.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fungsi & Peralatan -->
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-header ">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-cogs me-2"></i>Fungsi & Peralatan
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <h6 class="text-success fw-bold">Fungsi Laboratorium</h6>
                                    <p class="text-muted">Menunjang perkuliahan berbasis SIG dan Penginderaan Jauh</p>
                                </div>
                                <div>
                                    <h6 class="text-success fw-bold">Peralatan Praktikum</h6>
                                    <div class="row g-2">
                                        <div class="col-sm-6">
                                            <div class="badge bg-light text-dark p-2 w-100 text-start">
                                                <i class="fas fa-satellite text-warning me-2"></i>GPS Geodetic (4 unit)
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="badge bg-light text-dark p-2 w-100 text-start">
                                                <i class="fas fa-drone text-info me-2"></i>Drone (4 unit)
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="badge bg-light text-dark p-2 w-100 text-start">
                                                <i class="fas fa-water text-warning me-2"></i>Single beam Echosounder
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="badge bg-light text-dark p-2 w-100 text-start">
                                                <i class="fas fa-map text-warning me-2"></i>Map Sounder (2 unit)
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="badge bg-light text-dark p-2 w-100 text-start">
                                                <i class="fas fa-camera text-success me-2"></i>Stereograph
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="badge bg-light text-dark p-2 w-100 text-start">
                                                <i class="fas fa-ruler text-secondary me-2"></i>Planimeter
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FORM PEMINJAMAN TAB -->
            <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-clipboard-list me-2"></i>Form Peminjaman Alat
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning d-flex align-items-start" role="alert">
                            <i class="fas fa-exclamation-triangle me-3 mt-1"></i>
                            <div>
                                <strong>Perhatian!</strong> Sebelum melakukan peminjaman alat, mohon membaca terlebih dahulu 
                                <a href="https://drive.google.com/file/d/1C-WVG--ivp9fDRRuDw-Xr87q-nB_g_Yx/view?usp=sharing" 
                                   target="_blank" 
                                   class="alert-link">
                                    <i class="fas fa-file-pdf me-1"></i>SOP Peminjaman dan Pengembalian Alat
                                </a>.
                            </div>
                        </div>
                        
                        <div class="ratio" style="--bs-aspect-ratio: 100%;">
                            <iframe 
                                src="https://docs.google.com/forms/d/e/1FAIpQLSfnmEOMKSbsJP2oL5FWmi-lc6T_FIcGVUjXm7lG1m122OHx1w/viewform?embedded=true" 
                                class="border-0 rounded"
                                loading="lazy">
                                Loading…
                            </iframe>
                        </div>
                        
                        <div class="alert alert-info mt-3 text-center" role="alert">
                            <i class="fas fa-phone me-2"></i>
                            <strong>Mohon menghubungi Kepala Laboratorium agar usulan segera diproses.</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SURVEY TAB -->
            <div class="tab-pane fade" id="survey" role="tabpanel" aria-labelledby="survey-tab">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-star me-2"></i>Survey Kepuasan Layanan
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle me-2"></i>
                            Berikan penilaian Anda untuk membantu kami meningkatkan kualitas layanan laboratorium.
                        </div>
                        
                        <div class="ratio" style="--bs-aspect-ratio: 90%;">
                            <iframe 
                                src="https://docs.google.com/forms/d/e/1FAIpQLSeOVgUOZ8DMbmuRcJ3IdbzQAT2bDoqozIEa2yA-SKB5VLEwGQ/viewform?embedded=true" 
                                class="border-0 rounded"
                                loading="lazy">
                                Loading…
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VIDEO TUTORIAL TAB -->
            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                <div class="row g-4">
                    <!-- Google Earth Engine -->
                    <div class="col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-header bg-success text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fab fa-google me-2"></i>Google Earth Engine (GEE)
                                </h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe 
                                        src="https://www.youtube.com/embed/videoseries?list=PL0ksO_Uy4LL_wNT7GffNbvV63BsGC8Iw6" 
                                        allowfullscreen
                                        class="rounded-bottom"
                                        loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <small class="text-muted">
                                    Platform cloud untuk analisis data lingkungan berskala dunia
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- QGIS -->
                    <div class="col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-header bg-warning text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-map-marked-alt me-2"></i>QGIS
                                </h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe 
                                        src="https://www.youtube.com/embed/videoseries?list=PL0ksO_Uy4LL9sicSejY141vrq2ufzPl5K" 
                                        allowfullscreen
                                        class="rounded-bottom"
                                        loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <small class="text-muted">
                                    Software GIS open source yang handal dan populer
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- SAGA GIS -->
                    <div class="col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-layer-group me-2"></i>SAGA GIS
                                </h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe 
                                        src="https://www.youtube.com/embed/videoseries?list=PL0ksO_Uy4LL8ljScbDW75W4mopIhY5pih" 
                                        allowfullscreen
                                        class="rounded-bottom"
                                        loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <small class="text-muted">
                                    Software open source unggul dalam pengolahan raster dan vektor
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom Styles */
.nav-pills .nav-link {
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.nav-pills .nav-link:not(.active):hover {
    background-color: rgba(13, 110, 253, 0.1);
    border-color: rgba(13, 110, 253, 0.3);
    transform: translateY(-2px);
}

.nav-pills .nav-link.active {
    background-color: var(--bs-warning);
    box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
}

.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.badge {
    font-size: 0.85em;
    font-weight: 500;
}

.alert {
    border: none;
    border-left: 4px solid;
}

.alert-warning {
    border-left-color: #ffc107;
}

.alert-info {
    border-left-color: #0dcaf0;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .display-5 {
        font-size: 1.8rem;
    }
    
    .lead {
        font-size: 1rem;
    }
    
    .nav-pills .nav-link {
        font-size: 0.9rem;
        padding: 0.75rem 1rem !important;
    }
    
    .card-title {
        font-size: 1rem;
    }
    
    .badge {
        font-size: 0.75em;
        padding: 0.5em 0.75em;
    }
}

@media (max-width: 576px) {
    .col-sm-6 {
        margin-bottom: 0.5rem;
    }
    
    .ratio {
        --bs-aspect-ratio: 120% !important;
    }
}

/* Loading Animation */
iframe {
    opacity: 0;
    animation: fadeIn 0.5s ease-in-out 0.3s forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}
</style>
@endsection