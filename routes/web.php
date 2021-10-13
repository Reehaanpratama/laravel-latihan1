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
    return view('welcome');
});

Route :: get('about', function () {
    return '<h1>Hello</h1>'
    . 'Selamat datang di webapp saya'
    . 'Laravel emang keren';
});

Route::get('profile', function () {
    $nama = "Abdul";
    return "Nama saya adalah <b>$nama</b>";
});

// route parameter
Route::get('post/{id}',function ($a) {
    return "halaman post ke - $a";
});

Route::get('bio/{nama}/{umur}/{alamat}',function ($a,$b,$c) {
    return "Nama Saya: $a
     <br>Umur: $b
     <br>Alamat: $c";
});

// route optional parameter
Route::get('page/{page?}', function ($hal = 1) {
    return "Halaman <b>$hal</b>";
});

Route::get('pesan/{makan?}/{minum?}/{cemilan}', 
    function ($a = null, $b = null, $c = null) {
    if ($a == null && $b == null && $c == null) {
        $pesan = "Anda Tidak pesan, silahkan pulang";
    }
    if ($a != null) {
        $pesan = "Anda Memesan"
        . "<br>Makan : <b>$a</b>";
    }    
    if ($a != null && $b != null) {
        $pesan = "anda memesan"
        . "<br>Makan : <b>$a</b>"
        . "<br>Minum : <b>$b</b>";
    }
    if ($a != null && $b != null && $c != null) {
        $pesan = "Anda memesan"
        . "<br>Makan : <b>$a</b>"
        . "<br>Minum : <b>$b</b>"
        . "<br>Cemilan : <b>$c</b>";
    }

    return $pesan;
});