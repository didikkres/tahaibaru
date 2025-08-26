<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tahai Baru</title>

    <!-- CSS FILES -->   
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">     
    <link href="{{url('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{url('home/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{url('home/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    @yield('css') 
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

    -->

</head>

<body id="section_1">
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{url('home/images/logo1.png') }}" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Tahai Baru
                    <small>Kecamatan Maliku Kabupaten Pulang Pisau</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/surat">Surat</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/apbdeshome">Apbdes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/galeryhome">Galery</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">LKK</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="pkk">PKK</a></li>
                                <li><a class="dropdown-item" href="karangtaruna">Karang Taruna</a></li>
                                <li><a class="dropdown-item" href="lpmk">LPMK</a></li>
                                <li><a class="dropdown-item" href="rtku">RT</a></li>
                                <li><a class="dropdown-item" href="posyandu">Posyandu</a></li>
                            </ul>
                        </li>
                        <li class="nav-sitem dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="pembangunan">Pembangunan</a></li>
                                <li><a class="dropdown-item" href="bltdd">Data BLTDD</a></li>
                            </ul>
                        </li>
                        <li class="nav-sitem dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                                <li><a class="dropdown-item" href="/kelurahan">Kelurahan</a></li>
                                <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    <li class="nav-item ms-3">
                        <button type="button" class="nav-link custom-btn custom-border-btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="/postlogin" method="POST">
        {{csrf_field()}}
    <div class="modal-body">
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="staticEmail" name="email">
        </div>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-success">Login</button>
    </form> 
</div>
</div>
</div>
</div>
<main>
    @yield('container')
</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <img src="{{url('home/images/logo1.png') }}" class="logo img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="/" class="footer-menu-link">Home</a></li>

                    <li class="footer-menu-item"><a href="/berita" class="footer-menu-link">Berita</a></li>

                    <li class="footer-menu-item"><a href="/surat" class="footer-menu-link">Surat</a></li>

                    <li class="footer-menu-item"><a href="/apbdeshome" class="footer-menu-link">Apbdes</a></li>

                    <li class="footer-menu-item"><a href="/galeryhome" class="footer-menu-link">Galery</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Kontak Informasi</h5>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    <a href="tel: 000 000 000 000" class="site-footer-link">
                        000-000-0000
                    </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:tahaibaru@gmail.com" class="site-footer-link">
                        tahaibaru@gmail.com
                    </a>
                </p>

                <p class="text-white d-flex mt-3">
                    <i class="bi-geo-alt me-2"></i>
                    Tahai Baru Kec. Maliku Kab. Pulang Pisau
                </p>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 col-12">
                    <p class="copyright-text mb-0">Copyright © 2025 <a href="/">Suntree</a> Kalimantan</p>
                  </div>

                  <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-linkedin"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  @if(Session::has('sukses'))
  swal("Berhasil",  "success");
  @endif
</script>
<!-- JAVASCRIPT FILES -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=maps,marker&v=beta"
      defer
    ></script>
<script src="{{url('home/js/jquery.min.js') }}"></script>
<script src="{{url('home/js/bootstrap.min.js') }}"></script>
<script src="{{url('home/js/jquery.sticky.js') }}"></script>
<script src="{{url('home/js/click-scroll.js') }}"></script>
<script src="{{url('home/js/counter.js') }}"></script>
<script src="{{url('home/js/custom.js') }}"></script>

</body>
</html>