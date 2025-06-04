@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Ubah User</h3>
                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Kosongkan jika tidak ingin mengubah password. Password minimal 8 karakter.</div>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Status Email</label>
                                <div>
                                    @if($user->email_verified_at)
                                        <span class="badge bg-success">Email Verified pada {{ $user->email_verified_at->format('d/m/Y H:i') }}</span>
                                    @else
                                        <span class="badge bg-warning">Email Belum Verified</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bergabung</label>
                                <div>
                                    <span class="badge bg-info">{{ $user->created_at->format('d/m/Y H:i') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection