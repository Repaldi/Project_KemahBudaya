@extends('layouts.master')
@section('content')
<style>
    .rating{
	position: absolute;
	top:50%;
	left: 20%;
	transform: translate(-50%, -50%) rotateY(180deg);
	display: flex;
}
.rating input{
    display: none;
}
.rating label{
	display: block;
	cursor: pointer;
	width: 50px;
	/*background: #ccc;*/
}
.rating label:before{
	content:'\f005';
	font-family: fontAwesome;
	position: relative;
	display: block;
	font-size: 50px;
	color: #101010;
}
.rating label:after{
	content:'\f005';
	font-family: fontAwesome;
	position: absolute;
	display: block;
	font-size: 50px;
	color: #fffa00;
	top:0;
	opacity: 0;
	transition: .5s;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
}
.rating label:hover:after,
.rating label:hover ~ label:after,
.rating input:checked ~ label:after
{
	opacity: 1;
}
    </style>
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>DETAIL PRAMUWISATA</h3>
       
      </div>
      </div>
    </section><!-- #call-to-action -->
    <section id="portfolio"  class="section-bg" >
      <div class="container">
            <header class="section-header">
                <h3 class="section-title">PROFIL</h3>
            </header>
        <div class="row">
            <div class="col-lg-4 portfolio-item  wow fadeInUp">
            <figure>
                <img src="{{asset('assets/img/pemandu/1.png')}}" class="img-fluid" alt="">
                <a href="{{asset('assets/img/pemandu/1.png')}}" class="link-preview" data-lightbox="portfolio" data-title="REPALDI HANDI SAPUTRA" title="Preview"><i class="ion ion-eye"></i></a>
            </figure>
            </div>

            <div class="col-lg-8">
                <table border="0px">
                    <tr>
                        <td> NAMA </td>
                        <td>: </td>
                        <td> AFNI</td>
                    </tr>
                    <tr>
                        <td> USIA </td>
                        <td>: </td>
                        <td> 20 Tahun</td>
                    </tr>
                    <tr>
                        <td>BAHASA </td>
                        <td>: </td>
                        <td> Indonesia, Inggris, Korea, Prancis</td>
                    </tr>
                    <tr>
                    <td>NOMOR HP/EMAIL</td>
                        <td>: </td>
                        <td> 080180283934/afni@gmail.com</td>
                    </tr>
                    <tr>
                    <td>SIM</td>
                        <td>: </td>
                        <td>-</td>
                    </tr> 
                    <div class="rating responsif">
		                <input type="radio" name="star" id="star1"><label for="star1"></label>
		                <input type="radio" name="star" id="star2"><label for="star2"></label>
		                <input type="radio" name="star" id="star3"><label for="star3"></label>
		                <input type="radio" name="star" id="star4"><label for="star4"></label>
		                <input type="radio" name="star" id="star5"><label for="star5"></label>
</div>
                </table>
                
            </div>
        </div>
      </div>
      </section>
      <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>PAKET WISATA LAIN?</h3>
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
              <img src="{{asset('assets/img/wisata/kerinci.jpg')}}" alt="" class="img-fluid">
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
              <img src="{{asset('assets/img/wisata/kerinci.jpg')}}" alt="" class="img-fluid">
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
            <img src="{{asset('assets/img/Pemandu/2.png')}}" class="testimonial-img" alt="">
            <h3>Ema</h3>
            <h4>Wisatawan Jakarta</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
              GOOD!!!
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('assets/img/Pemandu/3.png')}}" class="testimonial-img" alt="">
            <h3>Fauziah</h3>
            <h4>Wisatawan Prancis</h4>
            <p>
              <img src="{{asset('assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
            Pramuwisatanya ramah, sangat bersahabat,... Terimakasih
              <img src="{{asset('assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </p>
          </div>

          
        </div>

      </div>
    </section><!-- #testimonials -->
@stop