@extends('layouts.layouts')

@section('content')
{{-- Foto --}}
<section id="foto" data-aos="zoom-in-up">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <div class="header-berita text-center">

                    <h1 class="fw-bold">Foto Kegiatan Sekolah</h1>
                </div>
                <div class="card-group py-5">
                    @foreach ($photos as $photo)
                        <div class="card">
                            <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                                <img src="{{ asset('storage/photo/' . $photo->image) }}" class="card-img-top" alt="{{ $photo->judul }}">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">{{ $photo->judul }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end Foto --}}
@endsection