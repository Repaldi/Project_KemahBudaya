@extends('layouts.master')
@section('content')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/kerinci.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <img src="{{asset('assets/img/Logo.png')}}" style="width:300px" alt="" title="" />
                <h2>TEMUKAN PEMANDU WISATA TERBAIKMU</h2>
                <H5 style="color:white;"> "GUNUNG KERINCI" </H5>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro-carousel/candi.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <img src="{{asset('assets/img/Logo.png')}}" style="width:300px" alt="" title="" />
              <h2>TEMUKAN PEMANDU WISATA TERBAIKMU</h2>
                <H5 style="color:white;"> "CANDI MUARO JAMBI" </H5>
               
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
  

  <main id="main">

    
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>TENTANG KAMI</h3>
          <p >
            PANDU merupakan aplikasi atau situs web yang dirancang dan dibuat untuk memberikan solusi digital untuk membantu anda saat melakukan travelling atau pergi berwisata
        </p>
        </header>

      </div>
    </section><!-- #about -->

    
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">OBJEK WISATA</h3>
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



    
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Layanan</h3>
          <p>
          PANDU siap melayani anda dengan sepenuh hati
          </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Pramuwisata</a></h4>
            <p class="description">PANDU memberikan rekomendasi para pramuwisata untuk anda yang akan berwisata di Provinsi Jambi </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Paket Wisata</a></h4>
            <p class="description">PANDU menawarkan paket wisata untuk anda yang akan berwisata sendiri atau bersama keluarga, sahabat, maupun rekan kerja.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">PEMBAYARAN</a></h4>
            <p class="description">PANDU memberikan kemudahan dalam melakukan pembayaran</p>
          </div>
          
          <!-- <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">ASURANSI</a></h4>
            <p class="description">Bagi anda yang belum memiliki asuransi, PANDU siap membantu anda untuk mengajukan asuransi </p>
          </div> -->
      

        </div>

      </div>
    </section><!-- #services -->



    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimoni</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="{{asset('assets/img/Pemandu/1.png')}}" class="testimonial-img" alt="">
            <h3>Afni</h3>
            <h4>Wisatawan Lampung </h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Meskipun kami melakukan perjalanan di seluruh dunia untuk menemukan yang indah, kita harus membawanya dengan kami atau kami akan merasa tidak – Ralph Waldo Emerson
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/img/Pemandu/2.png')}}" class="testimonial-img" alt="">
            <h3>Ema</h3>
            <h4>Wisatawan Jakarta</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Tidak ada yang di bumi dapat menghentikan pria dengan sikap yang baik untuk mencapai tujuannya; tidak ada di bumi dapat membantu orang dengan sikap mental yang salah – W.W. kambing
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/img/Pemandu/3.png')}}" class="testimonial-img" alt="">
            <h3>Fauziah</h3>
            <h4>Wisatawan Prancis</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              Tidak ada yang di bumi dapat menghentikan pria dengan sikap yang baik untuk mencapai tujuannya; tidak ada di bumi dapat membantu orang dengan sikap mental yang salah – W.W. kambing
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          
        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>MITRA</h3>
          <p>PANDU telah bekerjasama dengan beberapa instansi diantaranya :</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset('assets/img/mitra/dinasjambi.png')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>DINAS KEBUDAYAAN DAN PARIWISATA PROVINSI JAMBI</h4>
                  <span>Sosial Media</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{asset('assets/img/mitra/hpi.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>KOMUNITAS PRAMUWISATA INDONESIA</h4>
                  <span>Sosial Media</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('assets/img/mitra/hpi.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>HPI PROVINSI JAMBI</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>KONTAK</h3>
          <p>untuk informasi pemesanan silahkan hubungi kami :</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl Lintas Muaro Jambi-Jambi No.12 Kab. Muaro Jambi Provinsi Jambi</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="#">+62 8131 32632 64</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="#">pandujimra@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Pesan anda telah terkirim. Terimakasih!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Nama tidak boleh kosong" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Masukkan email dengan benar" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" data-rule="minlen:4" data-msg="Judul tidak boleh kosong" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Pesan tidak boleh kosong" placeholder="Pesan"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
@stop