@extends('layouts.landing.index')

@section('content')
<section class="section pt-4">
    <div class="container">
        <h2 class="fw-bold">{{ $visimisi->title }}</h2>

        <div class="mt-4">
            <h4>Visi</h4>
            <p>{!! $visimisi->visi !!}</p>
        </div>

        <div class="mt-4">
            <h4>Misi</h4>
            <p>{!! $visimisi->misi !!}</p>
        </div>
    </div>
</section>
@endsection
