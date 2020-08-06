<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function detailobjekwisata()
    {
        return view('detailobjekwisata');
    }
    public function objekwisata()
    {
        return view('objekwisata');
    }
    public function pramuwisata()
    {
        return view('pramuwisata');
    }
    public function detailpramuwisata()
    {
        return view('detailpramuwisata');
    }
    public function profil()
    {
    
        return view('profil');
    }
    public function pesanan()
    {
    
        return view('pesanan');
    }
    public function paketwisata(){
        return view('paketwisata');

    }
}
