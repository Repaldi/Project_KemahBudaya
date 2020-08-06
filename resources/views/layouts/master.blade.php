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
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

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
  @guest
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        
        <!-- <h5><a href="#" class="scrollto"> </a></h5> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="{{asset('assets/img/logo1.png')}}" alt="" title="" /></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="/registerpramuwisata">GABUNG PRAMUWISATA</a></li>
        <li><a href="{{ route('login') }}">MASUK</a></li>
          @if (Route::has('register'))
          <li ><a href="{{ route('register') }}">DAFTAR</a></li>
          @endif
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
        @else
  <header id="header">
    <div class="container-fluid">
        
        <div id="logo" class="pull-left">
        
        <h5><a href="#" class="scrollto"> {{ Auth::user()->name }}</a></h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="{{asset('assets/img/logo1.png')}}" alt="" title="" /></a> -->
      </div>
      
      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="/home">BERANDA</a></li>
        <li><a href="/pramuwisata">PRAMUWISATA</a></li>
        <li><a href="/objekwisata">OBJEK WISATA</a></li>
        <li><a href="/paketwisata">PAKET WISATA</a></li>
        <li><a href="/pesanan">PESANAN</a></li>
          <li class="menu-has-children"><a href="">PENGATURAN</a>
            <ul>
              <li><a href="/profil">PROFIL</a></li>

              <li><a href="{{ route('logout') }}" 
               onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">KELUAR</a>
              </li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>

            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  @endguest
  @yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PANDU</strong>. 2020
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
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
