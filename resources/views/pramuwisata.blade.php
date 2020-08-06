@extends('layouts.master')
@section('content')
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>PRAMUWISATA</h3>
       
      </div>
      </div>
    </section><!-- #call-to-action -->

<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">MAU PEMANDU WISATA YANG MANA?</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">PEREMPUAN</li>
              <li data-filter=".filter-card">LAKI-LAKI</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/pemandu/1.png')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/pemandu/1.png')}}" data-lightbox="portfolio" data-title="Candi Muaro Jambi" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="/detailpramuwisata" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="/detailpramuwisata">AFNI</a></h4>
                <p>Bahasa : Indonesia, Inggris, Korea, Prancis</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/pemandu/5.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/pemandu/5.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="GUNUNG KERINCI" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="/detailpramuwisata" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Repaldi Handi S</a></h4>
                <p>Bahasa : Cina, Indonesia, Inggris, Belanda </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/pemandu/4.png')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/pemandu/4.png')}}" class="link-preview" data-lightbox="portfolio" data-title="SUNGE SIMPUR" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Bisma Aulia</a></h4>
                <p>Bahasa : Korea, Inggris, Jepang</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/pemandu/2.png')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/pemandu/2.png')}}" class="link-preview" data-lightbox="portfolio" data-title="SUNGE SIMPUR" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Ema Elvira</a></h4>
                <p>Bahasa : India, Korea, Jepang</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('assets/img/pemandu/3.png')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/pemandu/3.png')}}" class="link-preview" data-lightbox="portfolio" data-title="SUNGE SIMPUR" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Fauziah</a></h4>
                <p>Bahasa : Arab, Inggris, Indonesia, Korea</p>
              </div>
            </div>
          </div>

         

         
         

        </div>

      </div>
    </section><!-- #portfolio -->
    @stop
    