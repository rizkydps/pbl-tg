@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Berita</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="editor" class="form-label">Judul</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Masukkan Judul">
                            </div>
                            <div class="mb-3">
                                <label for="editor" class="form-label">Deskripsi</label>
                                <div id="editor">
                                </div>
                                <input type="hidden" name="description" id="description">
                            </div>
                            <div class="mb-3">
                                <label for="date">Tanggal</label>
                                <input type="date" id="date" name="date" class="form-control">
                            </div>
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

