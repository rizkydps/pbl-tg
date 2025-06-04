@extends('layouts.landing.index')


@section('content')
<div class="container my-5">
    <div class="tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" id="labTabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Profil Laboratorium</a></li>
                <li class="nav-item"><a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Jadwal Akademik</a></li>
                <li class="nav-item"><a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Kondisi Komputer</a></li>
                <li class="nav-item"><a class="nav-link" id="tab4-tab" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Pengajuan Disetujui</a></li>
                <li class="nav-item"><a class="nav-link" id="tab5-tab" data-bs-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Pendaftaran</a></li>
                <li class="nav-item"><a class="nav-link" id="tab6-tab" data-bs-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">Video Tutorial</a></li>
            </ul>
        </nav>

        <div class="tab-content py-4 px-3 border border-top-0 rounded-bottom shadow-sm" id="labTabsContent">
            <!-- Profil Laboratorium -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <h4>Profil Laboratorium</h4>
                <p>Laboratorium Geomatika merupakan laboratorium pada Program Studi Teknologi Geomatika Politeknik Negeri Samarinda yang berfungsi sebagai fasilitas praktikum dan penelitian di bidang geomatika.</p>
                <ul>
                    <li><strong>Kepala Laboratorium:</strong> Dwi Agung Pramono, S.Hut., M.T.</li>
                    <li><strong>Pranata Laboratorium Pendidikan:</strong>
                        <ol>
                            <li>Haryo Wicaksono, S.T.</li>
                            <li>Rasiah, A.Md.</li>
                        </ol>
                    </li>
                </ul>
            </div>

            <!-- Jadwal Akademik -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <h4 class="text-center">Jadwal Akademik di Laboratorium Geomatika</h4>
                <p class="text-center">Semester Ganjil 2022/2023</p>
               
            </div>

            <!-- Kondisi Komputer -->
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <h4 class="text-center">Kondisi Komputer Laboratorium Geomatika</h4>
               
            </div>

            <!-- Pengajuan Disetujui -->
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <h4 class="text-center">Pengajuan Penggunaan Yang Disetujui</h4>
                <p class="text-center">Semester Ganjil 2022/2023</p>
               
            </div>

            <!-- Pendaftaran -->
            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                <h4 class="text-center mb-4">Formulir Pendaftaran Penggunaan Laboratorium</h4>
                <p><strong><span class="text-danger">*</span> Wajib diisi</strong></p>

                <form action="" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Lengkap Pengguna <span class="text-danger">*</span></label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Pengguna <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telepon" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                        <input type="tel" id="telepon" name="telepon" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="keperluan" class="form-label">Keperluan <span class="text-danger">*</span></label>
                        <select id="keperluan" name="keperluan" class="form-select" required>
                            <option value="" disabled selected>-- Pilih Keperluan --</option>
                            <option value="Tugas akhir/Karya Ilmiah/Penelitian">Tugas akhir/Karya Ilmiah/Penelitian</option>
                            <option value="Penggunaan Oleh Mahasiswa Diluar Jam Perkuliahan">Penggunaan Oleh Mahasiswa Diluar Jam Perkuliahan</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="jumlah_komputer" class="form-label">Jumlah Komputer <span class="text-danger">*</span></label>
                        <input type="number" id="jumlah_komputer" name="jumlah_komputer" class="form-control" min="1" required>
                    </div>

                    <div class="col-md-4">
                        <label for="tanggal" class="form-label">Hari Penggunaan <span class="text-danger">*</span></label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label for="jam" class="form-label">Jam Penggunaan (Jumlah Jam) <span class="text-danger">*</span></label>
                        <input type="number" id="jam" name="jam" class="form-control" min="1" required>
                    </div>

                    <div class="col-12">
                        <label for="proposal" class="form-label">Upload File Proposal (format: .pdf, max 20 MB)</label>
                        <input type="file" id="proposal" name="proposal" class="form-control" accept=".pdf">
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Kirim Pendaftaran</button>
                    </div>
                </form>
            </div>

            <!-- Video Tutorial -->
            <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                <h4 class="text-center mb-4">Video Tutorial Laboratorium Geomatika</h4>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/VIDEO_ID1" title="Video Tutorial 1" allowfullscreen></iframe>
                </div>
                <p class="mt-3">Tutorial penggunaan perangkat lunak dan alat di laboratorium Geomatika.</p>

                <hr>

                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/VIDEO_ID2" title="Video Tutorial 2" allowfullscreen></iframe>
                </div>
                <p class="mt-3">Panduan instalasi dan setting software geomatika.</p>
            </div>
        </div>
    </div>
</div>
@endsection
