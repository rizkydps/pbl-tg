@extends('layouts.landing.index')

@section('content')
<section id="output-lulusan-detail" class="detail-section services section m-0 pt-4">
    <div class="container p-0 mt-0">
        <div class="img-content mb-3">
            <img src="{{ Storage::url($outputLulusan->image) }}" alt="">
        </div>
        <h3 class="fw-bold">
            {{ $outputLulusan->title }}
        </h3>
        <p class="lh-sm m-0 p-0">{!! $outputLulusan->description !!}</p>
    </div>
</section>
@endsection
