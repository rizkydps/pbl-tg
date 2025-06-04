@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ubah Output Lulusan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.output-lulusan.update', $outputLulusan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($outputLulusan->image)
                                <div class="mt-2">
                                    <label for="current-image-path" class="form-label">Path Gambar Saat Ini:</label>
                                    <input type="text" class="form-control" id="current-image-path" value="{{ Storage::url($outputLulusan->image) }}" readonly>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" value="{{ old('title', $outputLulusan->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="editor" class="form-label">Deskripsi</label>
                            <div id="editor">
                                {!! old('description', $outputLulusan->description) !!}
                            </div>
                            <input type="hidden" name="description" id="description">
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

