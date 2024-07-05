@extends('layouts.layouts')

@section('content')

<section id="detail" class="py-5">
  <div class="container col-xxl-8">
    {{-- Navigasi --}}
    <div class="d-flex">
      <a href="{{route('berita-lainnya')}}">Berita Kegiatan Sekolah</a>
      <div class="mx-1"> / </div>
      <a class="breadcrumb-item text-black active" aria-current="page">{{$beritas->judul}}</a>
    </div>

    <h2 class="fw-bold text-center py-3">{{$beritas->judul}}</h2>

    <img src="{{asset('storage/berita/' . $beritas->image)}}" class="img-fluid rounded mx-auto d-block detail-img" alt="">
                  <div class="konten-berita">
                      <p class="card-text mb-1 text-center"><small class="text-body-secondary"><em>{{ $beritas->created_at->format('d M Y')}}</em></small></p>
                      <p class="text-secondary">{!! $beritas->desc !!}</p>
                  </div>
  </div>
</section>
@endsection