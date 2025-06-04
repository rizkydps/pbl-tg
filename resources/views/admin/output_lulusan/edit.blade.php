@extends('layouts.dashboard')
@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Ubah Output Lulusan</h4>
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
<form action="{{ route('admin.output-lulusan.update', $outputLulusan->id) }}" method="POST" enctype="multipart/form-data" id="outputEditForm">
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
<textarea class="form-control" id="editor" name="description" rows="10">{{ old('description', $outputLulusan->description) }}</textarea>
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
<!-- Jika menggunakan CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        // Update textarea sebelum form submit
        document.getElementById('outputEditForm').addEventListener('submit', function(e) {
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
var quill = new Quill('#editor', {
    theme: 'snow'
});

document.getElementById('outputEditForm').addEventListener('submit', function(e) {
    document.querySelector('textarea[name="description"]').value = quill.root.innerHTML;
});
</script>
-->

<!-- ATAU solusi sederhana tanpa rich editor -->
<!--
<script>
document.getElementById('outputEditForm').addEventListener('submit', function(e) {
    var editor = document.getElementById('editor');
    var description = document.querySelector('textarea[name="description"]');
    if (editor && description) {
        description.value = editor.innerHTML || editor.textContent;
    }
});
</script>
-->
@endpush