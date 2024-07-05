@extends('layouts.layouts')

@section('content')
    <section class="py-5">
      <div class="container col-xxl-8">

        {{-- Navigasi --}}
        <div class="d-flex">
          <a href="{{route('dashboard')}}">Dashboard</a>
          <div class="mx-1"> / </div>
          <a href="{{route('berita')}}">Managemen Berita</a>
          <div class="mx-1"> / </div>
          <a class="breadcrumb-item text-black active" aria-current="page">Edit Berita</a>
        </div>

        <h2 class="fw-bold mb-3 text-center">Edit Berita</h2>
        
        <form action="{{route('berita.update', $berita->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-4">
           <label for="">Judul Kegiatan</label>
           <input type="text" class="form-control @error('judul') is-invalid
           @enderror" name="judul" value="{{old('judul', $berita->judul)}}">

           @error('judul')
               <div class="invalid-feedback">
                 {{$message}}
               </div>
           @enderror
          </div>

          <div class="form-group mb-4">
           <label for="">Pilih Foto</label>
           <input type="hidden" name="old_image" id="{{$berita->image}}">
           <div>
            <img src="{{asset('storage/berita/' . $berita->image)}}" class="col-lg-4" alt="">
           </div>
           <input type="file" class="form-control @error('image') is-invalid
           @enderror" name="image">

           @error('image')
               <div class="invalid-feedback">
                 {{$message}}
               </div>
           @enderror
          </div>

          <div class="form-group mb-4">
            <label for="">Deskripsi Berita</label>
              <textarea name="desc" class="form-control border-1" id="message" style="height: 100px">{{ old('desc', strip_tags($berita->desc)) }}</textarea>

            @error('desc')
                <div class="text-danger">
                  {{$message}}
                </div>
            @enderror
           </div>


          <button type="submit" class="btn btn-primary">Update</button>
       </form>
      </div>
    </section>
@endsection