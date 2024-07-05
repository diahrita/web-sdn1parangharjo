@extends('layouts.layouts')

@section('content')
{{-- Foto --}}
<section id="video-youtube" class="py-5" data-aos="zoom-in">
    <div class="container">
        <div class="header-berita text-center">
            <h1 class="fw-bold">Video Kegiatan Sekolah</h1>
        </div>

        <div class="row py-5">
            @foreach ($videos as $item)
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{$item->youtube_code}}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- end Foto --}}
@endsection