@extends('layouts.log')

@section('content')

<div class="text-center" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.2)), url(assets/img/wisata/kerinci.jpg);	background-position: top left, top left;	background-size: 100%, 100%;	background-repeat: repeat, repeat;	box-shadow: 0px 0px 4px  black;">
    <div class="container pt-5 pb-5" >
      <div class="row py-5">
        <div class="mx-auto bg-transfarent py-5 col-md-4" style="border-radius: 20px; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.2));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
          <img src="{{asset('assets/img/logo.png')}}" width="70%" class="mb-3">
          <form method="POST" action="{{ route('login') }}">
           @csrf
        <div class="form-group"> 
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus value="{{ old('email') }}" placeholder="Email" id="email"> 
                
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
          
          <div class="form-group mb-3"> 
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Kata Sandi" autocomplete="current-password">  
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <small class="form-text text-muted text-right">
          @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="text-white">Lupa kata sandi?</a>
         @endif
            </small> 
        </div> 
        <button type="submit" class="btn btn-warning text-dark">Masuk</button>
        </div>
        </form>
      </div>
    </div>
  </div>

                

@endsection
