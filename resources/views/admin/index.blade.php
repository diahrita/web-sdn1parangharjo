@extends('layouts.layouts')

@section('content')
    <section>
      <div class="container col-xxl-8 py-5">
        <h2 class="fw-bold mb-3 text-center">Dashboard Admin</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow-lg rounded-3 border-0">
              <img src="{{asset('assets/images/news.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Berita</h3>
                <p class="card-text">Atur dan kelola berita sekolah</p>
                <a href="{{route('berita')}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card shadow-lg rounded-3 border-0">
              <img src="{{asset('assets/images/images.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Foto</h3>
                <p class="card-text">Atur dan kelola foto sekolah</p>
                <a href="{{route('photo')}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card shadow-lg rounded-3 border-0">
              <img src="{{asset('assets/images/video.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Video</h3>
                <p class="card-text">Atur dan kelola video sekolah</p>
                <a href="{{route('video')}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection