@extends('layouts.landing.index')

@section('content')
<section id="output_lulusan" class="output-lulusan-section services section m-0 pt-4">
    <div class="container section-title pb-5" data-aos="fade-up">
        <h2 class="m-0">Output Lulusan</h2>
    </div>
    <div class="container p-0 mt-0">
        <div class="row g-4 m-0 p-0">
            @if ($outputLulusans->isNotEmpty())
            @foreach ($outputLulusans as $item)
                <!-- Output Lulusan Item -->
                <div class="col-lg-6 col-md-12 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('output-lulusan-detail', $item->id) }}" class="position-relative text-decoration-none text-black">  
                        <div class="service-item position-relative d-flex flex-row text-decoration-none gap-3">
                            <div class="row m-0 p-0">
                                <div class="col-12 col-md-3 mb-3 mb-md-0 m-0 p-0">
                                    <div class="img-container">
                                        <img src="{{ Storage::url($item->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-9 text-start m-0 p-0 ps-0 ps-md-3">
                                    <h3 class="title lh-sm mb-3 m-0 p-0">{{ $item->title }}</h3>
                                    <p class="description m-0 p-0">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($item->description, '<p><a><b><strong><i><u><em><br><ol><ul><li>'), 200) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Output Lulusan Item -->
            @endforeach
            @else
                <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative text-decoration-none">
                        <p class="text-center">Belum ada Output Lulusan yang tersedia.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
