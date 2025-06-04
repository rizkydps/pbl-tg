@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ubah Banner Alasan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.alasan-banner.update', $alasanBanner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{ $alasanBanner->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($alasanBanner->image)
                                <div class="mt-2">
                                    <label for="current-image-path" class="form-label">Path Gambar Saat Ini:</label>
                                    <input type="text" class="form-control" id="current-image-path" value="{{ Storage::url($alasanBanner->image) }}" readonly>
                                </div>
                            @endif
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

