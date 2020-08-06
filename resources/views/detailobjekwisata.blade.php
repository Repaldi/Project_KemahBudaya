@extends('layouts.master')
@section('content')
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>CANDI MUARO JAMBI</h3>
       
      </div>
      </div>
    </section><!-- #call-to-action -->
  
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      
 <div class="container py-2">
  <div class="row">
    <div class="col-sm-12">
     
      <div class="fakeimg">
          
      <img src="{{asset('assets/img/wisata/candi.jpg')}}" class="img-fluid" alt="">
      </div>
      <p>sumber : https://panduanwisata.id/2020/02/09/wisata-sejarah-nan-penting-ke-candi-muaro-jambi/ </p>
      <p style="text-indent: 60px; text-align:justify;">
      SHNet, Jakarta – Muaro Jambi adalah sebiuah desa wisata yang terletak di Provinsi Jambi. Lertaknya di Kecamatan Muara Sebo, Kabupaten Muaro Jambi. Baru diresmikan sebagai desa wisata pada 11 Mei 2017, namun desa ini suda asa sejak lama.

Desa Wisata Muaro Jambi terletak di dalam kawasan cagar budaya Muaro Jambi. Cagar alam ini meliputi wilayah seluas 260 hektar dengan 110 candi.

Sembilan di antaranya telah dipugar. Selain desa Muara Jambi, terdapat pula 6 desa lainnya di wilayah cagar budaya ini. Desa itu adalah Dusun Baru, Danau Lamo, Kemingking Luar, Kemingking Dalam, esa Teluk Jambu, dan Dusun Mudo.

Ada banyak kegiatan yang ditawarkan oleh desa wisata Muaro Jambi kepada para wisatawan yang datang. Pengunjung bisa trekking dan bersepeda mengunjungi delapan candi di dalam kawasan cagar budaya Muaro Jambi.

Buat yang hobi kuliner, bisa menikmati kuliner khas desa Muaro Jambi. 
</p>

<p style="text-indent: 60px; text-align:justify;">
Traveler juga bisa belajar mengayam tikar dan menyaksikan pertunjukkan tari topeng, atau menanam pohon di tepi sungai dan mengikuti susur sungai Batanghari.

Selain itu, warga desa juga sering menerima kunjungan dari umat Buddha yang hendak berziarah ke candi-candi di Muaro Jambi. Bukan hanya dari nusantara, umat Buddha yang datang juga berasal dari India, Bangladesh, Thailand, Kamboja, Tibet, dan Tiongkok.

Bahkan setiap tahun desa Muaro Jambi dikunjungi banyak umat Buddha yang hendak merayakan Waisak. Hal itu membuat Muaro Jambi menjadi salah satu dari dua pusat perayaan Waisak di Nusantara, selain Borobudur.

Keunikan desa wisata Muaro Jambi bahkan menarik perhatian sebuah kampus di Singapura. Pada tahun 2017 silam, rombongan dari Lasalle College of Art di Singapura datang ke desa wisata Muaro Jambi untuk mempelajari kebudayaan setempat selama 10 hari. Sementara pada tahun 2018 warga desa Muaro Jambi diundang ke Singapura untuk melakukan pameran budaya disana. (maya)

Traveler yang ingin menjelajahi keunikan budaya Desa wisata Muaro Jambi bisa segera berkemas dan berangkat ke Kota Jambi lalu meneruskan perjalanan darat selama 40 menit ke desa Muaro Jambi. (maya)

      </p>
      <br>
     
    </div>
  </div>
</div>


    </section><!-- #about -->

      <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">PILIH PEMANDU WISATA?</h3>
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
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
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
         
         
         

        </div>

      </div>
    </section><!-- #portfolio -->
    
@stop