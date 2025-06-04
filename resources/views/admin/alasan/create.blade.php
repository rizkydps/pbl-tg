@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Alasan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('alasan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Alasan</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
