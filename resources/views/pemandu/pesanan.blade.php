@extends('layouts.masterpemandu')
@section('content')
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>PESANAN</h3>
       
      </div>
      </div>
    </section><!-- #call-to-action -->

     <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">UDAH CEK PESANAN?</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
          <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Pemesan</th>
      <th>Tanggal</th>
      <th>Status</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Afni</td>
      <td>2020-12-10</td>
      <td> Disetujui</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Fauziah</td>
      <td>2020-12-30</td> 
      <td><a href="#"> <button class="btn btn-sm btn-warning text-dark">Setujui</button></a>
      <a href="#"> <button class="btn btn-sm btn-danger text-dark">Tolak</button></a></td>
    </tr>
  </tbody>
</table>
</div>
</div>
         

        </div>

      </div>
    </section><!-- #portfolio -->
@stop