@extends('layouts.master')
@section('content')
<?php use App\User;
?>
<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <div class="container" style="margin-top:70px;margin-bottom:-30px;">
      <img src="{{asset('assets/img/Logo.png')}}" style="width:100px" alt="" title="" />
        <h3>DATA PRIBADI</h3>
       
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

              <center>  <img src="{{asset('assets/img/user.png')}}" style="margin-top:30px"width="50%" class="img-fluid" alt=""></center>
                
            </figure>
            <input type="file">
            </div>

            <div class="col-lg-8">
            @if ( User::where('id', Auth::user()->id )->first() != null )
                <table border="0px" style="cellpadding:5px;">
                    <tr>
                        <td> NAMA </td>
                        <td>: </td>
                        <td>  <input type="text"  class="form-control" placeholder="{{ Auth::user()->name }}" readonly> </td>
                    </tr>
                    <tr>
                        <td> USIA </td>
                        <td>: </td>
                        <td><input type="text"  class="form-control" value="" > </td>
                       
                    </tr>
                    <tr>
                        <td>BAHASA </td>
                        <td>: </td>
                        <td><input type="text"  class="form-control" value="" > </td>
                        
                    </tr>
                    <tr>
                    <td>NOMOR HP</td>
                        <td>: </td>
                        <td> <input type="text"  class="form-control" value="" > </td>
                    </tr>
                    <tr>
                    <td>EMAIL</td>
                        <td>: </td>
                        <td> <input type="text"  class="form-control" value="{{auth()->user()->email}}" > </td>
                    </tr>
                   <tr>
                    <tr>
                    <td>KTP</td>
                        <td>: </td>
                        <td> <input type="file"  class="form-control"  > </td>
                    </tr>
                   <tr>
                    <tr>
                    <td>ASURANSI</td>
                        <td>: </td>
                        <td> <input type="file"  class="form-control"  > </td>
                    </tr>
                   <tr>
                    <td>
                    <button type="Bottom" class="btn btn-warning text-dark">Simpan</button>
                    </td>
                    </tr>
                </table>
                @else
                <table border="0px">
                    <tr>
                        <td> NAMA </td>
                        <td>: </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> USIA </td>
                        <td>: </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>BAHASA </td>
                        <td>: </td>
                        <td> </td>
                    </tr>
                    <tr>
                    <td>NOMOR HP/EMAIL</td>
                        <td>: </td>
                        <td> </td>
                    </tr>
                    <tr>
                    <td>SIM</td>
                        <td>: </td>
                        <td></td>
                    </tr> 
                </table>
                @endif

                
            </div>
        </div>
      </div>
      </section>
@stop