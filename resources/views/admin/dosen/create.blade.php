@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Tambah Dosen</h3>
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.dosen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/*" required>
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
                        @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="jabatan_lainnya" class="form-label">Jabatan Lainnya</label>
                        <input type="text" class="form-control @error('jabatan_lainnya') is-invalid @enderror" id="jabatan_lainnya" name="jabatan_lainnya" value="{{ old('jabatan_lainnya') }}">
                        @error('jabatan_lainnya')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="link_scopus" class="form-label">Link Scopus</label>
                        <input type="url" class="form-control @error('link_scopus') is-invalid @enderror" id="link_scopus" name="link_scopus" value="{{ old('link_scopus') }}" placeholder="https://www.scopus.com/...">
                        @error('link_scopus')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="link_sinta" class="form-label">Link Sinta</label>
                        <input type="url" class="form-control @error('link_sinta') is-invalid @enderror" id="link_sinta" name="link_sinta" value="{{ old('link_sinta') }}" placeholder="https://sinta.kemdikbud.go.id/...">
                        @error('link_sinta')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="link_google_scholar" class="form-label">Link Google Scholar</label>
                        <input type="url" class="form-control @error('link_google_scholar') is-invalid @enderror" id="link_google_scholar" name="link_google_scholar" value="{{ old('link_google_scholar') }}" placeholder="https://scholar.google.com/...">
                        @error('link_google_scholar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection