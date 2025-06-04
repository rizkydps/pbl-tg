@extends('layouts.landing.index')

@section('content')
<section id="berita-detail" class="detail-section services section m-0 pt-4">
    <div class="container p-0 mt-0">
        <div class="img-content mb-3">
            <img src="{{ Storage::url($berita->image) }}" alt="" class="img-fluid rounded">
        </div>
        
        <h3 class="fw-bold">
            {{ $berita->title }}
        </h3>

        {{-- Metadata Berita --}}
        <div class="text-muted mb-3 small">
            <span>{{ $berita->formatted_date_dfy }}</span> |
            <span> by Admin Geomatika</span>
        </div>

        {{-- Isi Deskripsi --}}
        <p class="lh-sm m-0 p-0">{!! $berita->description !!}</p>

        {{-- Tombol Share --}}
        <div class="mt-4">
            <span class="fw-semibold">Bagikan:</span>
            <a href="https://wa.me/?text={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-sm btn-success me-2">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-sm btn-primary">
                <i class="bi bi-facebook"></i> Facebook
            </a>
        </div>
    </div>
</section>
@endsection
