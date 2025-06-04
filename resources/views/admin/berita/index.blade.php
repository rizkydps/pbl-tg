@extends('layouts.dashboard')
@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3>Berita</h3>
                    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beritas as $berita)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($berita->image)
                                                <img src="{{ Storage::url($berita->image) }}" alt="Berita Image" width="50" height="50" style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td class="text-truncate" style="max-width: 200px;">{{ $berita->title }}</td>
                                        <td class="text-truncate" style="max-width: 250px;">{!! Str::limit(strip_tags($berita->description), 100) !!}</td>
                                        <td>{{ \Carbon\Carbon::parse($berita->date)->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Ubah</a> 
                                            <!-- DELETE BERITA BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#berita-delete-{{ $berita->id }}">
                                                Hapus
                                            </button>
                                            <!-- DELETE BERITA MODAL -->
                                            <div class="modal fade" id="berita-delete-{{ $berita->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Berita</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah Anda yakin ingin menghapus berita "<strong>{{ $berita->title }}</strong>"?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('admin.berita.delete', $berita->id) }}" method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection