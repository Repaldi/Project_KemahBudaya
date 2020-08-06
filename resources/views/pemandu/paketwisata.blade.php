
@extends('layouts.masterpemandu')
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
          <h3>SILAHKAN TAMBAH PAKET WISATA ANDA</h3>
          
        </header>

        <div class="row-12  mt-5">

        <div class="form">

          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Paket Wisata" data-rule="minlen:4" data-msg="Nama Paket tidak boleh kosong" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Rp. " data-rule="email" data-msg="Harga" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="-" placeholder="Deskripsi"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-left"><a href="#"> <button class="btn btn-warning text-dark">TAMBAHKAN</button></a></div>
          </form>
        </div>


        </div>

      </div>
    </section><!-- #about -->



    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>PAKET WISATA ANDA</h3>
          
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
              <P><a href="#"> <button class="btn btn-warning text-dark">EDIT</button></a>
              <a href="#"> <button class="btn btn-warning text-dark">HAPUS</button></a></P>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
              <img src="{{asset('assets/img/wisata/kerinci.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-people-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">PAKET LACAK</a></h2>
              <ul>
              <li><p>Objek Wisata: Candi Muaro Jambi, Geopark Merangin, dan Gunung Kerinci </p></li>
              <li><p>Kegiatan : - </p></li>
              <li><p>Harga : Rp. 3000.000-, </p></li>
              </ul>
              <P><a href="#"> <button class="btn btn-warning text-dark">EDIT</button></a>
              <a href="#"> <button class="btn btn-warning text-dark">HAPUS</button></a></P>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
              <img src="{{asset('assets/img/wisata/kerinci.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-people-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">PAKET TUGU KERIS</a></h2>
              <ul>
              <li><p>Objek Wisata: Candi Muaro Jambi, Geopark Merangin, dan Gunung Kerinci </p></li>
              <li><p>Kegiatan : - </p></li>
              <li><p>Harga : Rp. 1000.000-, </p></li>

              </ul>
              <P><a href="#"> <button class="btn btn-warning text-dark">EDIT</button></a>
              <a href="#"> <button class="btn btn-warning text-dark">HAPUS</button></a></P>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->
    @stop