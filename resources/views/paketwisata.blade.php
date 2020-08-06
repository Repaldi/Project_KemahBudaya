
@extends('layouts.master')
@section('content')
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>PAKET WISATA</h3>
       
      </div>
      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>MAU BERWISATA BERSAMA TERDEKAT?</h3>
          <p>PANDU menyediakan paket wisata yang siap menemani anda, dengan fasilitas sesuai dengan yang anda butuhkan...</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('assets/img/wisata/kerinci.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-people-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">PAKET PINANG MASAK</a></h2>
              <ul>
              <li><p>Objek Wisata: Candi Muaro Jambi, Geopark Merangin, dan Gunung Kerinci </p></li>
              <li><p>Kegiatan : - </p></li>
              <li><p>Harga : Rp. 5000.000-, </p></li>
              </ul>
              <P><a href="#"> <button class="btn btn-warning text-dark">PESAN</button></a></P>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
              <img src="{{asset('assets/img/wisata/candi.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-people-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">PAKET LACAK</a></h2>
              <ul>
              <li><p>Objek Wisata: Candi Muaro Jambi, Geopark Merangin, dan Gunung Kerinci </p></li>
              <li><p>Kegiatan : - </p></li>
              <li><p>Harga : Rp. 3000.000-, </p></li>
              </ul>
              <P><a href="#"> <button class="btn btn-warning text-dark">PESAN</button></a></P>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
              <img src="{{asset('assets/img/wisata/merangin.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-people-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">PAKET TUGU KERIS</a></h2>
              <ul>
              <li><p>Objek Wisata: Candi Muaro Jambi, Geopark Merangin, dan Gunung Kerinci </p></li>
              <li><p>Kegiatan : - </p></li>
              <li><p>Harga : Rp. 1000.000-, </p></li>

              </ul>
              <P><a href="#"> <button class="btn btn-warning text-dark">PESAN</button></a></P>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->
    @stop