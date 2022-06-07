<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>OrhaInsurance</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +62 881 5075 943</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> OrhaInsurance@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href='https://www.facebook.com/BPJSKesehatanRI'><span class="mai-logo-facebook-f"></span></a>
              <a href='https://twitter.com/BPJSKesehatanRI'><span class="mai-logo-twitter"></span></a>
              <a href='https://instagram.com/bpjskesehatan_ri?igshid=YmMyMTA2M2Y='><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Orha</span>-Insurance</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#KC">KCU BPJS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#info">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Contact Us</a>
            </li>

            @if(Route::has('login'))

            @auth
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif 

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert">
      </button>
      {{session()->get('message')}}
    </div>
    @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_hospital.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Selamat datang di BPJS Kesehatan</span>
        <h1 class="display-4">Orha Insurance</h1>
        <a href="#" class="btn btn-primary">Welcome!</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> pelayanan</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Asuransi</span> terjamin</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Mudah</span> dan efisien</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <section id="about">
    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Informasi Umum <br> tentang BPJS Kesehatan</h1>
            <p class="text-grey mb-4" style = "text-align:justify">BPJS Kesehatan (Badan Penyelenggara Jaminan Sosial Kesehatan) merupakan Badan Hukum Publik yang bertanggung jawab langsung kepada Presiden dan memiliki tugas untuk menyelenggarakan jaminan Kesehatan Nasional bagi seluruh rakyat Indonesia, terutama untuk Pegawai Negeri Sipil, Penerima Pensiun PNS dan TNI/POLRI, Veteran, Perintis Kemerdekaan beserta keluarganya dan Badan Usaha lainnya ataupun rakyat biasa. BPJS Kesehatan merupakan penyelenggara program jaminan sosial di bidang kesehatan yang merupakan salah satu dari lima program dalam Sistem Jaminan Sosial Nasional (SJSN), yaitu Jaminan Kesehatan, Jaminan Kecelakaan Kerja, Jaminan Hari Tua, Jaminan Pensiun, dan Jaminan Kematian sebagaimana tercantum dalam Undang-Undang Nomor 40 Tahun 2004 tentang Sistem Jaminan Sosial Nasional.</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/logo bpjs.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 
    </section>

    <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <section id="KC">
  @include('user.kc')
  </section>

  <section>
  @include('user.faskes')
  </section>

  <section id="info">
  @include('user.latest')
  </section>

  <section id="kontak">
  @include('user.appointment')  
  </section>
  
  <section>
  @include('user.faq')  
  </section>

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Download Mobile JKN untuk akses yang lebih mudah!</h1>
          <a href='https://play.google.com/store/apps/details?id=app.bpjs.mobile&hl=in&gl=US'><img src="../assets/img/google_play.svg" alt=""></a>
          <a href='https://apps.apple.com/id/app/mobile-jkn/id1237601115' class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#KC">KCU BPJS</a></li>
            <li><a href="#info">Info</a></li>
            <li><a href="#kontak">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>About Us</h5>
          <p class="footer-link mt-2">Jl Raya Dharma Husada Indah No. 2, Mojo, Gubeng</p>
          <a href="#" class="footer-link">+62 881 5075 943</a>
          <a href="#" class="footer-link">orhainsurance.com</a>
        </div>

        <div class="col-sm-6 col-lg-3 py-3">
          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href='https://www.facebook.com/BPJSKesehatanRI'><span class="mai-logo-facebook-f"></span></a>
            <a href='https://twitter.com/BPJSKesehatanRI'><span class="mai-logo-twitter"></span></a>
            <a href='https://instagram.com/bpjskesehatan_ri?igshid=YmMyMTA2M2Y='><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://macodeid.com/" target="_blank">OrhaInsurance</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>