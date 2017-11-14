<?php

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
//basic routing
Route::get('/', function () {
    return view('welcome');
});


route::get('/about',function() {
	return '<h1>halo</h1>'
	.'selemat datang di<br>'
	. 'laravel.';
});
Route::get('kontak', function () {
    return view ('kontak');
});

//route parameter

Route::get('user/{nama}', function ($a) {
    return 'nama saya adalah <br>'.$a.'<br>';
});

//
Route::get('/kantin/{makan}/{minuman}/{cemilan}', function ($a,$b,$c) {
    return 'saya pesan :'.$a.'</b><br>'
    .'minuman :'.$b.'</b><br>'
    .'cemilan :'.$c.'</b><br>';
    });

//route optimal parameter
route::get('user/{name?}',function($a = "rizal"){
	return $a ;
});