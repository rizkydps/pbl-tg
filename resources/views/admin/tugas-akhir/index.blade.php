@extends('layouts.dashboard')
@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Data Tugas Akhir</h3>
                <a href="{{ route('admin.tugas-akhir.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <!-- Filter dan Pencarian -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <form action="{{ route('admin.tugas-akhir.index') }}" method="GET" class="d-flex">
                            <input type="text" name="search" class="form-control me-2" placeholder="Cari nama, NIM, judul..." value="{{ request('search') }}">
                            <button type="submit" class="btn btn-outline-primary">Cari</button>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.tugas-akhir.index') }}" method="GET">
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
                        <div class="col-md-2">
                            <a href="{{ route('admin.tugas-akhir.index') }}" class="btn btn-secondary">Reset</a>
                        </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Judul TA</th>
                                <th scope="col">Tahun Lulus</th>
                                <th scope="col">Pembimbing</th>
                                <th scope="col">Penguji</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tugasAkhir as $ta)
                                <tr>
                                    <td>{{ ($tugasAkhir->currentPage() - 1) * $tugasAkhir->perPage() + $loop->iteration }}</td>
                                    <td>{{ $ta->nama_mahasiswa }}</td>
                                    <td>{{ $ta->nim }}</td>
                                    <td class="text-truncate" style="max-width: 300px;" title="{{ $ta->judul_ta }}">
                                        {{ $ta->judul_ta }}
                                    </td>
                                    <td>{{ $ta->tahun_lulus }}</td>
                                    <td>{{ $ta->pembimbing }}</td>
                                    <td>{{ $ta->penguji }}</td>
                                    <td>
                                        <a href="{{ route('admin.tugas-akhir.edit', $ta->id) }}" class="btn btn-warning btn-sm">Ubah</a> 
                                        <!-- DELETE BUTTON TRIGGER MODAL -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{ $ta->id }}">
                                            Hapus
                                        </button>
                                        <!-- DELETE MODAL -->
                                        <form action="{{ route('admin.tugas-akhir.destroy', $ta->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="modal fade" id="delete-{{ $ta->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Tugas Akhir</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Yakin ingin menghapus data tugas akhir <strong>{{ $ta->nama_mahasiswa }}</strong> ({{ $ta->nim }})?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data tugas akhir</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($tugasAkhir->hasPages())
                    <div class="d-flex justify-content-center mt-3">
                        {{ $tugasAkhir->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection