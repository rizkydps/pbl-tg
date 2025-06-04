@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ubah Data Tugas Akhir</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tugas-akhir.update', $tugasAkhir->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa <span class="text-danger">*</span></label>
                                <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" placeholder="Masukkan nama mahasiswa" value="{{ old('nama_mahasiswa', $tugasAkhir->nama_mahasiswa) }}">
                                @error('nama_mahasiswa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                                <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" value="{{ old('nim', $tugasAkhir->nim) }}">
                                @error('nim')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul_ta" class="form-label">Judul Tugas Akhir <span class="text-danger">*</span></label>
                                <textarea id="judul_ta" name="judul_ta" class="form-control @error('judul_ta') is-invalid @enderror" rows="3" placeholder="Masukkan judul tugas akhir">{{ old('judul_ta', $tugasAkhir->judul_ta) }}</textarea>
                                @error('judul_ta')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tahun_lulus" class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                                <select id="tahun_lulus" name="tahun_lulus" class="form-select @error('tahun_lulus') is-invalid @enderror">
                                    <option value="">Pilih Tahun Lulus</option>
                                    @for($year = date('Y') + 5; $year >= 2000; $year--)
                                        <option value="{{ $year }}" {{ old('tahun_lulus', $tugasAkhir->tahun_lulus) == $year ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                                @error('tahun_lulus')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pembimbing" class="form-label">Pembimbing <span class="text-danger">*</span></label>
                                <input type="text" id="pembimbing" name="pembimbing" class="form-control @error('pembimbing') is-invalid @enderror" placeholder="Masukkan nama pembimbing" value="{{ old('pembimbing', $tugasAkhir->pembimbing) }}">
                                @error('pembimbing')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="penguji" class="form-label">Penguji <span class="text-danger">*</span></label>
                                <input type="text" id="penguji" name="penguji" class="form-control @error('penguji') is-invalid @enderror" placeholder="Masukkan nama penguji" value="{{ old('penguji', $tugasAkhir->penguji) }}">
                                @error('penguji')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <a href="{{ route('admin.tugas-akhir.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection