@extends('layouts.landing.index')

@section('content')
<section id="dosen" class="dosen-section services section m-0 pt-4">
    <div class="container section-title pb-5" data-aos="fade-up">
        <h2 class="m-0">Dosen</h2>
    </div>

    <div class="container p-0 mt-0">
        <div class="row g-4 m-0 p-0 justify-content-center">
            @if ($dosens->isNotEmpty())
                @foreach ($dosens as $dosen)
                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="dosen-item position-relative d-flex flex-column text-center bg-white rounded shadow-sm p-4 h-100">
                            {{-- Foto Dosen --}}
                            <div class="dosen-photo mb-3">
                                <img src="{{ Storage::url($dosen->foto) }}" alt="{{ $dosen->nama }}" class="img-fluid rounded" style="width: 200px; height: 250px; object-fit: cover;">
                            </div>

                            {{-- Info Dosen --}}
                            <div class="dosen-info flex-grow-1">
                                <h4 class="dosen-name fw-bold mb-2">{{ $dosen->nama }}</h4>
                                <p class="dosen-position text-muted mb-2">{{ $dosen->jabatan }}</p>
                                @if($dosen->jabatan_lainnya)
                                    <p class="dosen-other-position text-muted mb-3">{{ $dosen->jabatan_lainnya }}</p>
                                @endif
                            </div>

                            {{-- Link Eksternal --}}
                            <div class="dosen-links mt-auto">
                                <div class="d-flex justify-content-center gap-2 flex-wrap">
                                    
                                        <a href="{{ $dosen->link_sinta }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDJMMTMuMDkgOC4yNkwyMCA5TDEzLjA5IDE1Ljc0TDEyIDIyTDEwLjkxIDE1Ljc0TDQgOUwxMC45MSA4LjI2TDEyIDJaIiBzdHJva2U9IiMwMDc3YmUiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPg==" alt="Sinta" width="16" height="16">
                                            Sinta
                                        </a>
                                   
                                    
                                        <a href="{{ $dosen->link_scopus }}" target="_blank" class="btn btn-sm btn-outline-warning">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDJMMTMuMDkgOC4yNkwyMCA5TDEzLjA5IDE1Ljc0TDEyIDIyTDEwLjkxIDE1Ljc0TDQgOUwxMC45MSA4LjI2TDEyIDJaIiBzdHJva2U9IiNmZjk5MDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPg==" alt="Scopus" width="16" height="16">
                                            Scopus
                                        </a>
                                    
                                   
                                        <a href="{{ $dosen->link_google_scholar }}" target="_blank" class="btn btn-sm btn-outline-success">
                                            <img src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMzRhODUzIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PHBhdGggZD0iTTEyIDIgTDEzLjA5IDguMjYgTDIwIDkgTDEzLjA5IDE1Ljc0IDEyIDIyIDEwLjkxIDE1Ljc0IDQgOSAxMC45MSA4LjI2IDEyIDIgWiIvPjwvc3ZnPg==" alt="Scholar" width="16" height="16">
                                            Scholar
                                        </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center text-muted">Tidak ada data dosen.</div>
            @endif
        </div>
    </div>
</section>
@endsection
