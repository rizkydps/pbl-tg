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
                <h3>Visi dan Misi</h3>
                {{-- Jika ingin ada tombol tambah, bisa aktifkan baris ini --}}
                {{-- <a href="{{ route('visimisi.create') }}" class="btn btn-primary">Tambah</a> --}}
            </div>
            <div class="card-body">
                @if($visimisi)
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $visimisi->title }}</td>
                                    <td style="white-space: pre-line;">{!! nl2br(e($visimisi->visi)) !!}</td>
                                    <td style="white-space: pre-line;">{!! nl2br(e($visimisi->misi)) !!}</td>
                                    <td>
                                        <a href="{{ route('visimisi.edit', $visimisi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Data Visi dan Misi belum tersedia.</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
