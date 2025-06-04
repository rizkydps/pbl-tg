@extends('layouts.landing.index')

@section('content')
<div class="container my-5">
    <div class="tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" id="akreditasiTabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">D3 Teknologi Geomatika</a></li>
                <li class="nav-item"><a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">S1 Terapan TRGS</a></li>
                <li class="nav-item"><a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Perguruan Tinggi</a></li>
            </ul>
        </nav>

        <div class="tab-content py-4 px-3 border border-top-0 rounded-bottom shadow-sm" id="akreditasiTabsContent">
            <!-- D3 Teknologi Geomatika -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <h4 class="text-center mb-4">Dokumen Akreditasi Program Studi Teknologi Geomatika (D3)</h4>
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Program Studi</th>
                                <th>No. SK</th>
                                <th>Peringkat</th>
                                <th>Tanggal SK</th>
                                <th>Tanggal Kedaluwarsa</th>
                                <th>Unduh Berkas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DIII – Geoinformatika</td>
                                <td>031/BAN-PT/Ak-XII/Dpl-III/XII/2012</td>
                                <td><span class="badge bg-warning">C</span></td>
                                <td>15-12-2012</td>
                                <td>15-12-2017</td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/SK-Akreditasi-GI-2012.pdf" class="btn btn-sm btn-outline-primary me-1" target="_blank">SK</a>
                                    <span class="text-muted">Sertifikat</span>
                                </td>
                            </tr>
                            <tr>
                                <td>DIII – Geoinformatika</td>
                                <td>3028/SK/BAN-PT/Akred/Dipl-III/VIII/2017</td>
                                <td><span class="badge bg-success">B</span></td>
                                <td>22-08-2017</td>
                                <td>22-08-2022</td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/SK-Akreditasi-GI-2017.pdf" class="btn btn-sm btn-outline-primary me-1" target="_blank">SK</a>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/Sertifikat-Akreditasi-GI-2017.pdf" class="btn btn-sm btn-outline-secondary" target="_blank">Sertifikat</a>
                                </td>
                            </tr>
                            <tr>
                                <td>DIII – Teknologi Geomatika</td>
                                <td>5929/SK/BAN-PT/Ak-PNB/Dipl-III/VI/2021</td>
                                <td><span class="badge bg-success">B</span></td>
                                <td>02-06-2021</td>
                                <td>22-08-2022</td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/SK-Akreditasi-TG-2021.pdf" class="btn btn-sm btn-outline-primary me-1" target="_blank">SK</a>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/Sertifikat-Akreditasi-TG-2021.pdf" class="btn btn-sm btn-outline-secondary" target="_blank">Sertifikat</a>
                                </td>
                            </tr>
                            <tr>
                                <td>DIII – Teknologi Geomatika</td>
                                <td>5385/SK/BAN-PT/Ak-PEPS/D3/VIII/2022</td>
                                <td><span class="badge bg-success">B</span></td>
                                <td>09-08-2022</td>
                                <td>23-08-2023</td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2023/05/SK-Akreditasi-Prodi-TG-2022-2023-dalam-masa-pemantauan.pdf" class="btn btn-sm btn-outline-primary me-1" target="_blank">SK</a>
                                    <span class="text-muted text-decoration-line-through">Sertifikat</span>
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td><strong>DIII – Teknologi Geomatika</strong></td>
                                <td><strong>468/SK/BAN-PT/Ak.Ppj/D3/II/2023</strong></td>
                                <td><span class="badge bg-success">B</span></td>
                                <td><strong>14-02-2023</strong></td>
                                <td><strong>23-08-2027</strong></td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2023/03/SK-Akreditasi-Prodi-TG-2022-2027.pdf" class="btn btn-sm btn-primary me-1" target="_blank">SK</a>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2023/03/Sertifikat-Akreditasi-Prodi-TG-2022-2027.pdf" class="btn btn-sm btn-success" target="_blank">Sertifikat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="alert alert-info mt-3">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Status Akreditasi Terkini:</strong> Program Studi D3 Teknologi Geomatika memiliki akreditasi <strong>B</strong> yang berlaku hingga <strong>23 Agustus 2027</strong>.
                </div>
            </div>

            <!-- S1 Terapan TRGS -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <h4 class="text-center mb-4">Dokumen Akreditasi Program Studi Teknologi Rekayasa Geomatika dan Survei (S1 Terapan)</h4>
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Program Studi</th>
                                <th>No. SK</th>
                                <th>Peringkat</th>
                                <th>Tanggal SK</th>
                                <th>Tanggal Kedaluwarsa</th>
                                <th>Unduh Berkas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-success">
                                <td><strong>DIV – Teknologi Rekayasa Geomatika dan Survei</strong></td>
                                <td><strong>02743/SK/BAN-PT/Ak.P/STr/VII/2023</strong></td>
                                <td><span class="badge bg-success">Baik</span></td>
                                <td><strong>11-07-2023</strong></td>
                                <td><strong>11-07-2028</strong></td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2023/07/SK-Akreditasi-Pertama-Prodi-TRGS-Baik-2023.pdf" class="btn btn-sm btn-primary me-1" target="_blank">SK</a>
                                    <span class="text-muted text-decoration-line-through">Sertifikat</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="alert alert-success mt-3">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Status Akreditasi:</strong> Program Studi DIV Teknologi Rekayasa Geomatika dan Survei memiliki akreditasi <strong>Baik</strong> (Akreditasi Pertama) yang berlaku hingga <strong>11 Juli 2028</strong>.
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Tentang Program Studi TRGS</h5>
                        <p class="card-text">
                            Program Studi Teknologi Rekayasa Geomatika dan Survei (TRGS) merupakan program studi jenjang Diploma IV (S1 Terapan) 
                            yang berfokus pada pengembangan teknologi survei dan pemetaan modern serta aplikasi geomatika untuk berbagai kebutuhan industri.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Perguruan Tinggi -->
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <h4 class="text-center mb-4">Dokumen Akreditasi Perguruan Tinggi</h4>
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Perguruan Tinggi</th>
                                <th>No. SK</th>
                                <th>Peringkat</th>
                                <th>Tanggal SK</th>
                                <th>Tanggal Kedaluwarsa</th>
                                <th>Unduh Berkas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-primary">
                                <td><strong>Politeknik Pertanian Negeri Samarinda</strong></td>
                                <td><strong>859/SK/BAN-PT/Akred/PT/X/2020</strong></td>
                                <td><span class="badge bg-primary">Baik Sekali</span></td>
                                <td><strong>20-10-2020</strong></td>
                                <td><strong>20-10-2025</strong></td>
                                <td>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/SK-Akreditasi-Politani.pdf" class="btn btn-sm btn-primary me-1" target="_blank">SK</a>
                                    <a href="https://geomatika.politanisamarinda.ac.id/wp-content/uploads/2021/07/Sertifikat-Akreditasi-Politani.pdf" class="btn btn-sm btn-success" target="_blank">Sertifikat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="alert alert-primary mt-3">
                    <i class="fas fa-university me-2"></i>
                    <strong>Status Akreditasi Institusi:</strong> Politeknik Pertanian Negeri Samarinda memiliki akreditasi <strong>Baik Sekali</strong> yang berlaku hingga <strong>20 Oktober 2025</strong>.
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">Akreditasi Institusi</h5>
                                <h2 class="display-4 text-primary">Baik Sekali</h2>
                                <p class="card-text">Status akreditasi perguruan tinggi dari BAN-PT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Akreditasi</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Badan Akreditasi:</strong> BAN-PT</li>
                                    <li><strong>Periode Berlaku:</strong> 5 Tahun</li>
                                    <li><strong>Status Saat Ini:</strong> Aktif</li>
                                    <li><strong>Masa Berlaku:</strong> 2020 - 2025</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk preview dokumen -->
<div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="documentModalLabel">Preview Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-file-pdf fa-5x text-danger mb-3"></i>
                    <p>Dokumen akan dibuka di tab baru</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.table-responsive {
    border-radius: 0.375rem;
    overflow: hidden;
}

.badge {
    font-size: 0.875em;
    padding: 0.5em 0.75em;
}

.btn-sm {
    font-size: 0.875rem;
    padding: 0.25rem 0.5rem;
}

.alert {
    border-left: 4px solid;
}

.alert-info {
    border-left-color: #0dcaf0;
}

.alert-success {
    border-left-color: #198754;
}

.alert-primary {
    border-left-color: #0d6efd;
}

.card {
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.display-4 {
    font-weight: 700;
}

.table-success {
    background-color: rgba(25, 135, 84, 0.1);
}

.table-primary {
    background-color: rgba(13, 110, 253, 0.1);
}
</style>
@endsection