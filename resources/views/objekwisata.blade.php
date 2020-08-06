@extends('layouts.master')
@section('content')
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>OBJEK WISATA</h3>
       
      </div>
      </div>
    </section><!-- #call-to-action -->

     <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">MAU KEMANA ANDA?</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Muaro Jambi</li>
              <li data-filter=".filter-card">Kerinci</li>
              <li data-filter=".filter-web">Merangin</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/wisata/candi.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/wisata/candi.jpg')}}" data-lightbox="portfolio" data-title="Candi Muaro Jambi" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="/detailobjekwisata" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="/detailobjekwisata">Candi Muaro Jambi</a></h4>
                <p>Lokasi: Muaro Jambi, Kec. Maro Sebo, Kab. Muaro Jambi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/wisata/merangin.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/wisata/merangin.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Geopark Mrangin" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Geopark Mrangin</a></h4>
                <p>Lokasi: Merangin, Provinsi. Jambi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/wisata/candi1.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/wisata/candi1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="SUNGE SIMPUR" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">SUNGE SIMPUR</a></h4>
                <p>Lokasi: Desa Baru, Kec. Muaro Sebo, Kab., Muarojambi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/wisata/kerinci.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/wisata/kerinci.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="GUNUNG KERINCI" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">GUNUNG KERINCI</a></h4>
                <p>Lokasi Desa Kersik Tuo Kab. Kerinci </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/wisata/danau.png')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/wisata/danau.png')}}" class="link-preview" data-lightbox="portfolio" data-title="DANAU PAUH" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">DANAU PAUH</a></h4>
                <p>Lokasi Desa Pulau Tengah, Kec. Jangkat, Kab. Merangin.  </p>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- #portfolio -->
@stop