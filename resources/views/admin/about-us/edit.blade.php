@extends('layouts.dashboard')
@section('title', 'Edit Data Tentang Kami')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Data Tentang Kami</h3>
                    <a href="{{ route('admin.about-us.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.about-us.update', $aboutUs) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title', $aboutUs->title) }}" 
                                       placeholder="Masukkan judul tentang kami">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="description_1" class="form-label">Deskripsi Paragraf 1 <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description_1') is-invalid @enderror" 
                                          id="description_1" name="description_1" rows="4" 
                                          placeholder="Masukkan deskripsi paragraf pertama">{{ old('description_1', $aboutUs->description_1) }}</textarea>
                                @error('description_1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="description_2" class="form-label">Deskripsi Paragraf 2 <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description_2') is-invalid @enderror" 
                                          id="description_2" name="description_2" rows="4" 
                                          placeholder="Masukkan deskripsi paragraf kedua">{{ old('description_2', $aboutUs->description_2) }}</textarea>
                                @error('description_2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="description_3" class="form-label">Deskripsi Paragraf 3 <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description_3') is-invalid @enderror" 
                                          id="description_3" name="description_3" rows="4" 
                                          placeholder="Masukkan deskripsi paragraf ketiga">{{ old('description_3', $aboutUs->description_3) }}</textarea>
                                @error('description_3')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="years_experience" class="form-label">Tahun Pengalaman <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('years_experience') is-invalid @enderror" 
                                       id="years_experience" name="years_experience" value="{{ old('years_experience', $aboutUs->years_experience) }}" 
                                       min="1" placeholder="Contoh: 15">
                                @error('years_experience')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="total_alumni" class="form-label">Total Alumni <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('total_alumni') is-invalid @enderror" 
                                       id="total_alumni" name="total_alumni" value="{{ old('total_alumni', $aboutUs->total_alumni) }}" 
                                       min="0" placeholder="Contoh: 500">
                                @error('total_alumni')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="expertise_fields" class="form-label">Bidang Keahlian <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('expertise_fields') is-invalid @enderror" 
                                       id="expertise_fields" name="expertise_fields" value="{{ old('expertise_fields', $aboutUs->expertise_fields) }}" 
                                       min="1" placeholder="Contoh: 4">
                                @error('expertise_fields')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="accreditation" class="form-label">Akreditasi <span class="text-danger">*</span></label>
                                <select class="form-control @error('accreditation') is-invalid @enderror" 
                                        id="accreditation" name="accreditation">
                                    <option value="">Pilih Akreditasi</option>
                                    <option value="A" {{ old('accreditation', $aboutUs->accreditation) == 'A' ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ old('accreditation', $aboutUs->accreditation) == 'B' ? 'selected' : '' }}>B</option>
                                    <option value="C" {{ old('accreditation', $aboutUs->accreditation) == 'C' ? 'selected' : '' }}>C</option>
                                    <option value="Baik Sekali" {{ old('accreditation', $aboutUs->accreditation) == 'Baik Sekali' ? 'selected' : '' }}>Baik Sekali</option>
                                    <option value="Baik" {{ old('accreditation', $aboutUs->accreditation) == 'Baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="Unggul" {{ old('accreditation', $aboutUs->accreditation) == 'Unggul' ? 'selected' : '' }}>Unggul</option>
                                </select>
                                @error('accreditation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="is_active" 
                                           name="is_active" {{ old('is_active', $aboutUs->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Aktifkan data ini
                                    </label>
                                    <small class="form-text text-muted d-block">
                                        Jika dicentang, data lain akan otomatis dinonaktifkan (hanya satu data yang bisa aktif)
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.about-us.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Card Info -->
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Data</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Dibuat:</strong> {{ $aboutUs->created_at->format('d M Y H:i') }}</p>
                            <p><strong>Terakhir Diupdate:</strong> {{ $aboutUs->updated_at->format('d M Y H:i') }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Status:</strong> 
                                @if($aboutUs->is_active)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Tidak Aktif</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-resize textareas
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(textarea => {
        // Set initial height
        textarea.style.height = 'auto';
        textarea.style.height = (textarea.scrollHeight) + 'px';
        
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });
    });
});
</script>
@endsection