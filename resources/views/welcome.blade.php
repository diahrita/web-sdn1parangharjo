@extends('layouts.layouts')

@section('content')

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Carousel Start -->
<section id="hero" class="px-0">
    <div class="container-fluid p-0 mb-5 text-center text-white">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <div class="hero-tittle"  data-aos="fade-up">
                    <h1 class="display-2 text-white animated slideInDown mb-4"> <br>Selamat Datang <br>di SDN 1 Parangharjo</h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Krajan Kulon, Parangharjo, Kec. Songgon, Kabupaten Banyuwangi, Jawa Timur 68463</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carousel End -->

<!-- Facilities Start -->
<div class="container-xxl py-5" id="fasilitas">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Fasilitas Sekolah</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="facility-item">
                    <div class="facility-icon bg-primary">
                        <span class="bg-primary"></span>
                        <i class="fa fa-home fa-3x text-primary"></i>
                        <span class="bg-primary"></span>
                    </div>
                    <div class="facility-text bg-primary">
                        <h3 class="text-primary mb-3">Ruang Kelas</h3>
                        <p class="mb-0">Memiliki ruang kelas yang aman dan nyaman untuk kegiatan belajar mengajar</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="facility-item">
                    <div class="facility-icon bg-success">
                        <span class="bg-success"></span>
                        <i class="fa fa-book fa-3x text-success"></i>
                        <span class="bg-success"></span>
                    </div>
                    <div class="facility-text bg-success">
                        <h3 class="text-success mb-3">Perpustakaan</h3>
                        <p class="mb-0">Memiliki ribuan koleksi buku bacaan yang sarat ilmu dan sesuai dengan kebutuhan siswa sekolah dasar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="facility-item">
                    <div class="facility-icon bg-warning">
                        <span class="bg-warning"></span>
                        <i class="fa fa-chalkboard-teacher fa-3x text-warning"></i>
                        <span class="bg-warning"></span>
                    </div>
                    <div class="facility-text bg-warning">
                        <h3 class="text-warning mb-3">Koperasi Sekolah</h3>
                        <p class="mb-0">Memiliki koperasi yang dapat dimanfaatkan untuk membeli apapun yang berkaitan dengan perlengkapan sekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="facility-item">
                    <div class="facility-icon bg-info">
                        <span class="bg-info"></span>
                        <i class="fa fa-home fa-3x text-info"></i>
                        <span class="bg-info"></span>
                    </div>
                    <div class="facility-text bg-info">
                        <h3 class="text-info mb-3">Tempat Ibadah</h3>
                        <p class="mb-0">Memiliki mushola untuk meningkatkan kegiatan keagamaan bagi para siswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facilities End -->

<!-- About Start -->
<div class="container-xxl py-5" id="visimisi">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Visi dan Misi Sekolah</h1>
                <p>Misi : "Terwujudnya Siswa Yang Beriman Dan Bertaqwa, Berprestasi, Santun, Terampil Dan Berkarakter Serta Berwawasan Lingkungan Dan Global"</p>
                <p class="mb-4">Visi : 
                  <br> 1. Menumbuhkan dan memperkokoh keimanan dan ketaqwaan warga sekolah
                  <br> 2. Mewujudkan siswa yang berprestasi dan mampu bersaing baik akademik maupun non akademik
                  <br> 3. Mewujudkan siswa sebagai insan yang santun dalam berbicara dan bertindak dalam kerangka merdeka belajar
                  <br> 4. Menumbuhkan kreatifitas siswa terampil menggunakan ilmu dan teknologi
                  <br> 5. Membentuk siswa yang tetap berkarakter dalam menghadapi kemajuan zaman
                  <br> 6. Mengembangkan kompetensi siswa, pendidik dan tenaga pendidik yang berwawasan lingkungan dan global</p>
            </div>
            <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{asset('assets/images/km7.jpg')}}" alt="">
                    </div>
                    <div class="col-6 text-start" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{asset('assets/images/about-1.jpg')}}" alt="">
                    </div>
                    <div class="col-6 text-end" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{asset('assets/images/about-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

{{-- Berita --}}
<section id="berita" class="py-5" data-aos="zoom-in-up">
    <div class="container">
        <div class="header-berita text-center">
            <h1 class="fw-bold">Berita Kegiatan Sekolah</h1>
        </div>

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

        <div class="footer-berita text-center">
            <a href="/berita-lainnya" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>
{{-- end berita --}}

<!-- Call To Action Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="header-berita text-center">
            <h1 class="fw-bold">Berita Kegiatan Sekolah</h1>
        </div>
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/call-to-action.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">Become A Teacher</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                            Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <a class="btn btn-primary py-3 px-5" href="">Get Started Now<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Call To Action End -->

{{-- Foto --}}
<section id="foto" class="py-5" data-aos="zoom-in-up">
    <div class="container">
        <div class="row">
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
        <div class="footer-berita text-center">
            <a href="/foto-lainnya" class="btn btn-outline-danger">Foto Lainnya</a>
        </div>
    </div>
</section>
{{-- end Foto --}}

{{-- Video --}}
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

        <div class="footer-berita text-center">
            <a href="/video-lainnya" class="btn btn-outline-danger">Video Lainnya</a>
        </div>
    </div>
</section>
{{-- end Video --}}


<!-- Team Start -->
<div class="container-xxl" id="guru">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Tenaga Pendidik</h1>
            <p>Tenaga pendidik di SDN 1 Parangharjo terdiri dari 1 Kepala Sekolah, 6 Guru Wali Kelas, dan Guru lainnya.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/rosuli.jpg" alt="">
                    <div>
                        <h4>Moh. Rosuli, S.Pd</h4>
                        <p>Kepala Sekolah</p>                            
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/mifta.jpg" alt="">
                    <div>
                        <h4>Miftahul Akbar, S.Pd. </h4>
                        <p>Guru Penjaskes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/munah.jpg" alt="">
                    <div>
                        <h4>Siti Maemunah,S.Pd.</h4>
                        <p>Guru PAI</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/woman.png" alt="">
                    <div>
                        <h4>Evi W.,SE, S.Pd.SD.</h4>
                        <p>Wali Kelas 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.9s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/eka.jpg" alt="">
                    <div>
                        <h4>Eka Suci W., S.Pd.</h4>
                        <p>Wali Kelas 2</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="1.1s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/syakur.jpg" alt="">
                    <div>
                        <h4>Abd. Syakur, A.Ma Pust</h4>
                        <p>Wali Kelas 3</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="1.3s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/farid.jpg" alt="">
                    <div>
                        <h4>Moh. Farid A. H., S.Pd.</h4>
                        <p>Wali Kelas 4</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="1.5s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/woman.png" alt="">
                    <div>
                        <h4>Fatihatus Z., S.Pd.</h4>
                        <p>Wali Kelas 5</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="1.7s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/woman.png" alt="">
                    <div>
                        <h4>Riva Anisa, S.Pd.I.</h4>
                        <p>Wali Kelas 6</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="1.9s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/man.png" alt="">
                    <div>
                        <h4>Saifudin,S.Pd</h4>
                        <p>Guru</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="2.1s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/woman.png" alt="">
                    <div>
                        <h4>Mufi</h4>
                        <p>Guru</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 fadeInUp" data-wow-delay="2.3s">
                <div class="team-item position-relative">
                    <img class="img-fluid w-100" src="assets/images/woman.png" alt="">
                    <div>
                        <h4>Nadya</h4>
                        <p>Guru</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="contact">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">SDN 1 Parangharjo</h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Parangharjo, Kec. Songgon, Kabupaten Banyuwangi</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <a class="btn btn-link text-white-50" href="#fasilitas">Fasilitas</a>
                <a class="btn btn-link text-white-50" href="#visimis">Visi Misi</a>
                <a class="btn btn-link text-white-50" href="#berita">Berita</a>
                <a class="btn btn-link text-white-50" href="#foto">Foto</a>
                <a class="btn btn-link text-white-50" href="#video-youtube">Video</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Sosial Media</h3>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">SDN 1 Parangharjo</a>, All Right Reserved. 
                                                <br>Presented By </a><a class="border-bottom" href="https://www.instagram.com/km7_sdn1parangharjo/" target="_blank">Kampus Mengajar 7</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="/" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
        
