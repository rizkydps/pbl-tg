@extends('layouts.dashboard')
@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Ubah Berita</h4>
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
<form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" id="beritaEditForm">
@csrf
@method('put')
<div class="mb-3">
<label for="image" class="form-label">Gambar</label>
<input type="file" class="form-control" id="image" name="image">
@if($berita->image)
<div class="mt-2">
<img src="{{ Storage::url($berita->image) }}" alt="Current Image" style="max-width: 200px;">
</div>
@endif
</div>
<div class="mb-3">
<label for="title" class="form-label">Judul</label>
<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $berita->title) }}">
</div>
<div class="mb-3">
<label for="description" class="form-label">Deskripsi</label>
<textarea class="form-control" id="description" name="description" rows="10">{{ old('description', $berita->description) }}</textarea>
</div>
<div class="mb-3">
<label for="date" class="form-label">Tanggal</label>
<input type="date" class="form-control" id="date" name="date" value="{{ old('date', $berita->date) }}">
</div>
<a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
<button type="submit" class="btn btn-primary">Ubah</button>
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
        document.getElementById('beritaEditForm').addEventListener('submit', function(e) {
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

document.getElementById('beritaEditForm').addEventListener('submit', function(e) {
    document.querySelector('textarea[name="description"]').value = quill.root.innerHTML;
});
</script>
-->

<!-- ATAU jika tidak menggunakan rich editor, hapus semua script di atas -->
@endpush