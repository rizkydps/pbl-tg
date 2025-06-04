@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>Edit Mitra</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Mitra <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name', $partner->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Logo (biarkan kosong jika tidak diubah)</label>
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if($partner->image)
                            <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" width="120" class="mt-2 rounded">
                        @endif
                    </div>
                    <a href="{{ route('admin.partner.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
