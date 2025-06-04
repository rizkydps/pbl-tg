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
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Daftar Mitra</h4>
                <a href="{{ route('admin.partner.create') }}" class="btn btn-primary">Tambah Mitra</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Nama Mitra</th>
                            <th>Logo</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($partners as $partner)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $partner->name }}</td>
                            <td>
                                @if($partner->image)
                                    <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" width="100" class="rounded">
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $partner->id }}">
                                    Hapus
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $partner->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $partner->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('admin.partner.destroy', $partner->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $partner->id }}">Hapus Mitra</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus mitra <strong>{{ $partner->name }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data mitra</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- Jika menggunakan pagination, tambahkan di sini --}}
            {{-- <div class="card-footer d-flex justify-content-center">
                {{ $partners->links() }}
            </div> --}}
        </div>
    </div>
</div>
@endsection
