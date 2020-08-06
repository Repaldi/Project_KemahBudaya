<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');

});

Route::get('/registerpramuwisata', function () {
    return view('auth/registerpramuwisata');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    if (Auth::user()->role == '1'){
        return view('pemandu/beranda');
    } else if (Auth::user()->role == '2'){
        return view('home');
    } 
});

Route::get('/detailobjekwisata', 'HomeController@detailobjekwisata')->name('detailobjekwisata');
Route::get('/objekwisata', 'HomeController@objekwisata')->name('objekwisata');

Route::get('/detailpramuwisata', 'HomeController@detailpramuwisata')->name('objekwisata');
Route::get('/pramuwisata', 'HomeController@pramuwisata')->name('pramuwisata');

Route::get('/profil', 'HomeController@profil')->name('profil');
Route::get('/pesanan', 'HomeController@pesanan')->name('pesanan');
Route::get('/paketwisata', 'HomeController@paketwisata')->name('paketwisata');

//Pemandu
Route::get('/pemandupaketwisata', 'PemanduController@pemandupaketwisata')->name('pemandupaketwisata');
Route::get('/pemandupesanan', 'PemanduController@pemandupesanan')->name('pemandupesanan');
Route::get('/pemanduprofil', 'PemanduController@pemanduprofil')->name('pemanduprofil');





