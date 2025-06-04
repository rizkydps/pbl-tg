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
                    <h3>Dosen</h3>
                    <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Jabatan Lainnya</th>
                                    <th scope="col">Links</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dosens as $dosen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ Storage::url($dosen->foto) }}" alt="Foto Dosen" width="50" height="50" class="rounded">
                                        </td>
                                        <td>{{ $dosen->nama }}</td>
                                        <td>{{ $dosen->jabatan }}</td>
                                        <td>{{ $dosen->jabatan_lainnya ?? '-' }}</td>
                                        <td>
                                            @if($dosen->link_scopus)
                                                <a href="{{ $dosen->link_scopus }}" target="_blank" class="btn btn-sm btn-outline-primary mb-1">Scopus</a>
                                            @endif
                                            @if($dosen->link_sinta)
                                                <a href="{{ $dosen->link_sinta }}" target="_blank" class="btn btn-sm btn-outline-success mb-1">Sinta</a>
                                            @endif
                                            @if($dosen->link_google_scholar)
                                                <a href="{{ $dosen->link_google_scholar }}" target="_blank" class="btn btn-sm btn-outline-danger mb-1">Scholar</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.dosen.edit', $dosen->id) }}" class="btn btn-warning">Ubah</a> 
                                            <!-- DELETE DOSEN BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#dosen-delete-{{ $dosen->id }}">
                                                Hapus
                                            </button>
                                            <!-- DELETE DOSEN MODAL -->
                                            <form action="{{ route('admin.dosen.delete', $dosen->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <div class="modal fade" id="dosen-delete-{{ $dosen->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Dosen</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Hapus Dosen {{ $dosen->nama }}?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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