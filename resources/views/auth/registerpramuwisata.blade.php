@extends('layouts.log')

@section('content')

<div class="text-center bg-dark text-white" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.2)), url(assets/img/wisata/kerinci.jpg);	background-position: top left, top left;	background-size: 100%, 100%;background-repeat: repeat, repeat;">
    <div class="container pt-5 pb-5">
      <div class="row text-white py-5" style="	box-shadow: 0px 0px   black;">
        <div class="mx-auto px-5 pt-3 pb-3 col-lg-4" style="	border-top-left-radius: 20px;	border-top-right-radius: 20px;	border-bottom-right-radius: 20px;	border-bottom-left-radius: 20px;	background-image: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(255,255,255,0.2));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
          <img src="{{asset('assets/img/logo.png')}}" width="70%" class="pb-1">
          
          <form method="POST" action="{{ route('register') }}">
            @csrf
          <input type="hidden" name="role" value="1">
                <div class="form-group pt-3"> 
                  
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama" required autocomplete="name" autofocus>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            
                </div>
                <div class="form-group"> 
                
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                </div>
              <div class="form-group"> 
                  
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Kata Sandi" required autocomplete="new-password">
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
               @enderror
              </div>
               <div class="form-group"> 
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Kata Sandi" >
                
                <small class="form-text text-muted text-right">
                    
                <a href="#" class="text-white"> Sudah punya akun?Klik Masuk</a>
                  </small> </div> 
                  <button type="submit" class="btn btn-warning text-dark"> {{ __('Daftar') }}</button>
              </div>
            </form>
        
        </div>
      </div>
    </div>
  </div>

                  
@endsection

<!-- 

                               

                               
                            

                               

                               
                               

                              
                           

                    
                 -->
