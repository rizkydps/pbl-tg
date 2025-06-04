@extends('layouts.dashboard')
@section('title', 'Kelola Tentang Kami')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Data Tentang Kami</h3>
                   
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Judul</th>
                                    <th width="10%">Pengalaman</th>
                                    <th width="10%">Alumni</th>
                                    <th width="10%">Bidang</th>
                                    <th width="10%">Akreditasi</th>
                                    <th width="10%">Status</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($aboutUs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration + ($aboutUs->currentPage() - 1) * $aboutUs->perPage() }}</td>
                                        <td>
                                            <strong>{{ Str::limit($item->title, 50) }}</strong>
                                            <br>
                                            <small class="text-muted">{{ Str::limit(strip_tags($item->description_1), 80) }}</small>
                                        </td>
                                        <td>{{ $item->years_experience }}+ Tahun</td>
                                        <td>{{ number_format($item->total_alumni) }}+</td>
                                        <td>{{ $item->expertise_fields }}</td>
                                        <td>
                                            <span class="badge bg-success">{{ $item->accreditation }}</span>
                                        </td>
                                        <td>
                                            @if($item->is_active)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-secondary">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about-us.edit', $item) }}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a> 
                                            
                                                
                                            
                                            
                                                
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $aboutUs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection