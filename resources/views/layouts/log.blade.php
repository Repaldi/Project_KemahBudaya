<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PANDU</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('assets/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" >
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="{{asset('assets/img/logo1.png')}}" alt="" title="" /></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="/registerpramuwisata">GABUNG PRAMUWISATA</a></li>
          <li ><a href="{{ route('register') }}">DAFTAR</a></li>
          <li><a href="{{ route('login') }}">MASUK</a></li>
          <!-- <li><a href="/aktivitas">Aktivitas</a></li>
          <li><a href="/paketharga">Paket & Harga</a></li>
          <li><a href="/galeri">Galeri</a></li> -->
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="/berita">Berita</a></li> -->
          <li class="menu-has-children"><a href="">BAHASA</a>
            <ul>
              <li><a href="#">INGGRIS</a></li>
              <li><a href="#">INDONESIA</a></li>
            
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  @yield('content')

  <!--==========================
    Footer
  ============================-->
  
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('assets/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('assets/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
