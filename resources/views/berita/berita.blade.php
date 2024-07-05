@extends('layouts.layouts')

@section('content')
    {{-- Berita --}}
<section id="berita" class="py-5">
  <div class="container">
      <div class="header-berita text-center">

          <h2 class="fw-bold">Berita Kegiatan Sekolah</h2>
        </div>

        <div class="container">
          <div class="row py-5">
              @foreach ($beritas as $item)
              <div class="col-lg-4">
                  <div class="card border-0">
                      <img src="{{asset('storage/berita/' . $item->image)}}" class="berita-img" alt="">
                      <div class="konten-berita text-center">
                          <h4 class="fw-bold mb-1">{{$item->judul}}</h4>
                          <p class="card-text mb-1"><small class="text-body-secondary"><mark><em>{{ $item->created_at->format('d M Y')}}</em></mark></small></p>
                          <a href="/detail/{{$item->slug}}"><small class="text-decoration-none text-primary-emphasis"><ins>Selengkapnya</ins></small></a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
{{-- end berita --}}
@endsection