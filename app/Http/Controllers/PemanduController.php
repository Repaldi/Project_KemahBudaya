<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemanduController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    
    public function pemanduprofil()
    {
    
        return view('pemandu/profil');
    }
    public function pemandupesanan()
    {
    
        return view('pemandu/pesanan');
    }
    public function pemandupaketwisata(){
        return view('pemandu/paketwisata');

    }
}
