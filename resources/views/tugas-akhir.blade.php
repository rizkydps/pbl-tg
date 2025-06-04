@extends('layouts.landing.index')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0"><i class="fas fa-graduation-cap me-2"></i>Data Tugas Akhir Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <!-- Filter dan Pencarian -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <form action="{{ route('tugas-akhir.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Cari nama mahasiswa, NIM, atau judul..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-outline-warning">
                                    
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('tugas-akhir.index') }}" method="GET">
                                <select name="tahun" class="form-select" onchange="this.form.submit()">
                                    <option value="">Semua Tahun</option>
                                    @foreach($tahunList as $tahun)
                                        <option value="{{ $tahun }}" {{ request('tahun') == $tahun ? 'selected' : '' }}>
                                            {{ $tahun }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                        @if(request('search') || request('tahun'))
                            <div class="col-md-3">
                                <a href="{{ route('tugas-akhir.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-times"></i> Reset Filter
                                </a>
                            </div>
                        @endif
                    </div>

                    @if(request('search') || request('tahun'))
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Menampilkan hasil pencarian
                            @if(request('search'))
                                untuk "<strong>{{ request('search') }}</strong>"
                            @endif
                            @if(request('tahun'))
                                pada tahun <strong>{{ request('tahun') }}</strong>
                            @endif
                            - Total: <strong>{{ $tugasAkhir->total() }}</strong> data
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Judul Tugas Akhir</th>
                                    <th scope="col">Tahun Lulus</th>
                                    <th scope="col">Pembimbing</th>
                                    <th scope="col">Penguji</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tugasAkhir as $ta)
                                    <tr>
                                        <td>{{ ($tugasAkhir->currentPage() - 1) * $tugasAkhir->perPage() + $loop->iteration }}</td>
                                        <td><strong>{{ $ta->nama_mahasiswa }}</strong></td>
                                        <td><span class="badge bg-secondary">{{ $ta->nim }}</span></td>
                                        <td class="text-justify" style="max-width: 400px;">
                                            {{ $ta->judul_ta }}
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-warning">{{ $ta->tahun_lulus }}</span>
                                        </td>
                                        <td>{{ $ta->pembimbing }}</td>
                                        <td>{{ $ta->penguji }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-5">
                                            <div class="text-muted">
                                                <i class="fas fa-search fa-3x mb-3"></i>
                                                <h5>Tidak ada data tugas akhir</h5>
                                                @if(request('search') || request('tahun'))
                                                    <p>Tidak ditemukan hasil untuk pencarian Anda. Coba dengan kata kunci lain.</p>
                                                @else
                                                    <p>Belum ada data tugas akhir yang tersedia.</p>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($tugasAkhir->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $tugasAkhir->appends(request()->query())->links() }}
                        </div>
                    @endif

                    <!-- Informasi Total Data -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-warning">Total Alumni</h5>
                                    <h2 class="display-6 text-warning">{{ $tugasAkhir->total() }}</h2>
                                    <p class="card-text text-muted">Mahasiswa yang telah menyelesaikan tugas akhir</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-info-circle text-warning me-2"></i>Data diurutkan berdasarkan tahun lulus terbaru</li>
                                        <li><i class="fas fa-search text-warning me-2"></i>Gunakan fitur pencarian untuk menemukan data spesifik</li>
                                        <li><i class="fas fa-filter text-warning me-2"></i>Filter berdasarkan tahun untuk melihat data per angkatan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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

.table th {
    font-weight: 600;
    border-bottom: 2px solid #dee2e6;
}

.badge {
    font-size: 0.875em;
    padding: 0.5em 0.75em;
}

.card {
    transition: transform 0.2s ease-in-out;
    border: none;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.table tbody tr:hover {
    background-color: rgba(0,123,255,0.1);
}

.text-justify {
    text-align: justify;
    line-height: 1.4;
}

.display-6 {
    font-weight: 700;
}

.bg-light {
    background-color: #f8f9fa !important;
}
</style>
@endsection