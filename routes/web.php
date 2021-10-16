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
    return view('profile', compact('nama'));
});

Route::get('biodata', function() {
    $nama="Rehan";
     $umur="17 tahun"; $alamat="Bandung";
      $sekolah="SMK Ass";
       $kelas="XII RPL 1";
        $hobi="Tidur";
    return view('biodata', compact('nama','umur','alamat','sekolah','kelas','hobi'));
});

// route parameter
Route::get('post/{id?}', function ($a) {
    return view('post', ['post' => $a]);
});



Route::get('bio/{nama}/{umur}/{alamat}',function ($a,$b,$c) {
    return "Nama Saya: $a
     <br>Umur: $b
     <br>Alamat: $c";
});

Route::get('bioo/{nama}/{umur}/{alamat}',function ($a,$b,$c) {
    return view('bio', compact('a', 'b', 'c'));
});

Route::get('blog', function () {
$posts = [
    ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Kesatu'],
    ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
    ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
];
    return view('blog', compact('posts'));
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

Route::get('/about', function () {
    return view('tentang');
});

Route::get('format', function(){
    $data =[
        ['id' => 1, 'name' => 'Rehan','username' => 'rehan','email' => 'rehan@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 2, 'name' => 'Nazwan','username' => 'zwan','email' => 'zwan@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 3, 'name' => 'Palah','username' => 'palah','email' => 'palah@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 4, 'name' => 'Yayat','username' => 'yayat','email' => 'yatttt@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 5, 'name' => 'Agus','username' => 'agus','email' => 'gussss@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],

    ];
    return view ('format' , compact('data'));
});


//route bagian db seeder
//model post
Route::get('/testmodel', function() {
    $query = App\Models\Post::all() ;
    return $query;
    });

    Route::get('/testmodel2', function() {
    $query = App\Models\Post::find(1) ;
    return $query;
        });

    Route::get('/testmodel3', function() {
    $query = App\Models\Post::where('title','like','%Juz Amma%')->get();
    return $query;
            });

    Route::get('/testmodel4', function() {
    $post = App\Models\Post::find(1);
    $post->title = "hijaiyah";
    $post->save();
    return $post;

                });

    Route::get('/testmodel5', function() {
    $post = App\Models\Post::find(1);
    $post->delete();
                   // check data di database

                    });

    Route::get('/testmodel6', function() {
    $post = new App\Models\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
                        // check record baru di database

                        });

//model latihan
Route::get('/test-post', function () {
    $query = App\Models\Post::all();
    return view('test-post', compact('query'));
});


Route::get('/data-dosen', function () {
    $query = App\Models\Dosen::all();
    return view('dosen', compact('query'));
});
Route::get('/data-mhs', function () {
    $query = App\Models\Mahasiswa::all();
    return view('mhs', compact('query'));
});
