{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0 {{Request::segment(1) == '' ? ''
: 'bg-white shadow'}}">
  <a href="/" class="navbar-brand">
      <h2 class="m-0 text-primary">SDN 1 Parangharjo</h2>
  </a>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto">
          <a href="/" class="nav-item nav-link">Home</a>
          <a href="#fasilitas" class="nav-item nav-link">Fasilitas</a>
          <a href="#visimisi" class="nav-item nav-link">Visi Misi</a>
          <a href="#berita" class="nav-item nav-link">Berita</a>
          <a href="#foto" class="nav-item nav-link">Foto</a>
          <a href="#video-youtube" class="nav-item nav-link">Video</a>
          <a href="#guru" class="nav-item nav-link">Tenaga Pendidik</a>
          <a href="#contact" class="nav-item nav-link">Contact Us</a>
      </div>

      <div class="d-flex">
        @auth
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-dark">Logout</button>
          </form>
        @else
          <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
        @endauth
      </div>
  </div>
</nav>
{{-- end Navbar --}}

