@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Alasan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('alasan.update', $alasan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama Alasan</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $alasan->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

