@extends('layouts.layouts')

@section('content')
    <section class="py-5">
      <div class="container col-xxl-8">

        {{-- Navigasi --}}
        <div class="d-flex">
          <a href="{{route('dashboard')}}">Dashboard</a>
          <div class="mx-1"> / </div>
          <a class="breadcrumb-item text-black active" aria-current="page">Manajemen Berita</a>
        </div>
        
        <h2 class="fw-bold mb-3 text-center">Managemen Berita</h2>
        
        <a href="{{route('berita.create')}}" class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary" type="button">Tambah</button></a>

        @if (@session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Informasi</strong> {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            
        @endif

        <div class="table-responsive py-3">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Image</th>
                <th>Judul</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($beritas as $berita)
                  <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>
                      <img class="mx-auto d-block" src="{{asset('storage/berita/'. $berita->image)}}" height="100px" alt="">
                    </td>
                    <td>{{ $berita->judul }}</td>
                    <td class="text-center">
                      <a href="{{route('berita.edit', $berita->id)}}" class="btn btn-warning">Edit</a>
                      <form action="{{route('berita.destroy', $berita->id)}}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" onclick="alert('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
@endsection