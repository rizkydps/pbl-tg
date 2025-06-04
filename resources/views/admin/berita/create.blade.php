@extends('layouts.dashboard')
@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Tambah Berita</h4>
</div>
<div class="card-body">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" id="beritaForm">
@csrf
<div class="modal-body">
<div class="mb-3">
<label for="image" class="form-label">Gambar</label>
<input type="file" class="form-control" id="image" name="image">
</div>
<div class="mb-3">
<label for="title" class="form-label">Judul</label>
<input type="text" id="title" name="title" class="form-control" placeholder="Masukkan Judul" value="{{ old('title') }}">
</div>
<div class="mb-3">
<label for="description" class="form-label">Deskripsi</label>
<textarea class="form-control" id="description" name="description" rows="10" placeholder="Masukkan deskripsi...">{{ old('description') }}</textarea>
</div>
<div class="mb-3">
<label for="date" class="form-label">Tanggal</label>
<input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}">
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

@push('scripts')
<!-- Jika ingin menggunakan CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#description'))
    .then(editor => {
        // Update textarea sebelum form submit
        document.getElementById('beritaForm').addEventListener('submit', function(e) {
            document.querySelector('textarea[name="description"]').value = editor.getData();
        });
    })
    .catch(error => {
        console.error(error);
    });
</script>

<!-- ATAU jika menggunakan Quill -->
<!-- 
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
var quill = new Quill('#description', {
    theme: 'snow'
});

document.getElementById('beritaForm').addEventListener('submit', function(e) {
    document.querySelector('textarea[name="description"]').value = quill.root.innerHTML;
});
</script>
-->

<!-- ATAU jika tidak menggunakan rich editor, hapus semua script di atas -->
@endpush