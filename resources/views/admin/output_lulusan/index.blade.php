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
                    <h3>Output Lulusan</h3>
                    <a href="{{ route('admin.output-lulusan.create') }}" class="btn btn-primary">Tambah</a>
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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outputLulusans as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ Storage::url($item->image) }}" alt="Berita Image" width="50">
                                        </td>
                                        <td  class="text-truncate text-nowrap w-25" style="max-width: 250px;">{{ $item->title }}</td>
                                        <td class="text-truncate text-nowrap w-25" style="max-width: 250px;">{!! $item->description !!}</td>
                                        <td>
                                            <a href="{{ route('admin.output-lulusan.edit', $item->id) }}" class="btn btn-warning">Ubah</a>
                                            <!-- DELETE OUTPUT LULUSAN BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#output-lulusan-delete-{{ $item->id }}">
                                                Hapus
                                            </button>
                                            <!-- DELETE OUTPUT LULUSAN MODAL -->
                                            <form action="{{ route('admin.output-lulusan.delete', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <div class="modal fade" id="output-lulusan-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Output Lulusan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Hapus Output Lulusan?</p>
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
