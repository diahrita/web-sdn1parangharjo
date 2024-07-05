@extends('layouts.layouts')

@section('content')
    <section class="py-5">
      <div class="container col-xxl-8">

        {{-- Navigasi --}}
        <div class="d-flex">
          <a href="{{route('dashboard')}}">Dashboard</a>
          <div class="mx-1"> / </div>
          <a class="breadcrumb-item text-black active" aria-current="page">Manajemen Video</a>
        </div>
        
        <h2 class="fw-bold mb-3 text-center">Managemen Video Kegiatan</h2>
        
        <a href="" class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#tambahVideo">
          <button class="btn btn-primary" type="button">Tambah</button></a>

        @if (@session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Informasi</strong> {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Menampilkan error validasi --}}
        @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            
        @endif

        <div class="table-responsive py-3">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Judul</th>
                <th>Video</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              
              @foreach ($videos as $item)
                  <tr>
                    <td class="text-center">{{$no++}}</td>
                    <td>
                      {{$item->judul}}
                    </td>
                    <td>
                      <iframe height="150"
                      src="https://www.youtube.com/embed/{{$item->youtube_code}}"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </td>
                    <td class="text-center">
                      <a href="{{route('video.update', $item->id)}}" class="btn btn-warning" data-bs-target="#editVideo{{$item->id}}" data-bs-toggle="modal">Edit</a>
                      <form action="{{route('video.destroy', $item->id)}}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" onclick="alert('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>

                  <!-- Modal Edit -->
                  <div class="modal fade" id="editVideo{{$item->id}}" tabindex="-1" aria-labelledby="editVideoLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="editVideoLabel">Edit Video</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('video.update', $item->id)}}" method="POST">
                          @csrf

                          <input type="hidden" name="id_video" value="{{$item->id}}">

                          <div class="form-group mb-3">
                            <label for="">Judul Video</label>
                            <input type="text" name="judul" class="form-control" value="{{$item->judul}}">
                          </div>

                          <div class="form-group mb-3">
                            <label for="">Youtube Code</label>
                            <input type="text" name="youtube_code" class="form-control" value="{{$item->youtube_code}}">
                          </div>

                          <button type="submit" class="btn btn-primary">Update</button>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Modal Upload -->
    <div class="modal fade" id="tambahVideo" tabindex="-1" aria-labelledby="tambahVideoLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="tambahVideoLabel">Tambah Video</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('video.store')}}" method="POST">
            @csrf

            <div class="form-group mb-3">
              <label for="">Judul Video</label>
              <input type="text" name="judul" class="form-control">
            </div>

            <div class="form-group mb-3">
              <label for="">Youtube Code</label>
              <input type="text" name="youtube_code" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection