@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Visi dan Misi</h1>

    <form action="{{ route('visimisi.update', $visimisi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $visimisi->title) }}" required>
            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea class="form-control @error('visi') is-invalid @enderror" id="visi" name="visi" rows="5">{{ old('visi', $visimisi->visi) }}</textarea>
            @error('visi')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control @error('misi') is-invalid @enderror" id="misi" name="misi" rows="7">{{ old('misi', $visimisi->misi) }}</textarea>
            @error('misi')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('visimisi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
