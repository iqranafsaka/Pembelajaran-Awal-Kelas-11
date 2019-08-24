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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'ini Project pertama saya';
});

Route::get('biodata', function () {
    return view('biodata');
});

Route::get('biodata/{nama}/{alamat}/{sekolah}', function ($a, $b, $c) {
    return 'Hallo Nama Saya : <b>'.$a.'</b> <br>
            Alamat saya di : <b>'.$b.'</b> <br>
            Saya Sekolah di : <b>'.$c.'</b> <br>';
});

//Route Optional Parameters
Route::get('/user/{name?}', function ($a = null) {
    return "Hello my name is $a";
});

Route::get('daftar-anggota', function(){
    $a = [
        ['id'=>1,'nama'=>'Ujang Aldo'],
        ['id'=>2,'nama'=>'Ujang Nurhadi'],
        ['id'=>3,'nama'=>'Ujang Ihsan']
    ];
    return view('anggota', compact('a'));
});


//tes-biodata
Route::get('profil', function () {
    $bio = App\Biodata::all();
    return view ('profil', compact('bio'));
});
Route::get('detail-profil/{id}',function($id){
    $bio = App\Biodata::find($id);
    return view('detail-profil', compact('bio'));
});




//tes-post
Route::get('tes-post',function(){
    $a = App\Post::all();
    return view('tes-post', compact('a'));
});
Route::get('detail-post/{id}',function($id){
    $a = App\Post::find($id);
    return view('detail-post', compact('a'));
});




//Mencari model berdasarkan ID
Route::get('tes-post1', function(){
    $a = App\Post::find(1);
    return $a;
});

//Mencari Model berdasarkan Title
Route::get('tes-post2', function(){
    $a = App\Post::where('title','like','%JKT48%')->get();
    return $a;
});

//Mengubah Record, (Hapus semua isi Function)
Route::get('tes-post3', function(){
    $post = App\Post::find(1);
    $post->title = "Ihsan Pandai Coding";
    $post->save();
    return $post;
});

//Menghapus Record, (Hapus semua isi Function)
Route ::get('tes-post4', function(){
    $post = App\Post::find(1);
    $post->delete();
    return $post;
});

//Menambahkan Record, (Hapus semua isi Function)
Route::get('tes-post5', function(){
    $post = new App\Post;
    $post->title = "Langkah Langkah Bernafas";
    $post->content = "Lorem Ipsum";
    $post->save();
    return $post;
});

Route::get('tes-bio',function(){
    $a = App\Biodata::all();
    return $a;
});


//PostController@index = nama_controller@nama method/function
Route::get('testing', 'PostController@index');
Route::get('testing/{id}', 'PostController@detail');

//latihan controller biodata
Route::get('cont-bio', 'BiodataController@index');
Route::get('cont-bio/{id}', 'BiodataController@show');

//auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//latihan data guru
Route::get('data-guru', 'GuruController@index');
Route::get('data-guru/{id}', 'GuruController@detail');


//Relasi
Route::get('relasi-1', function(){
    $a = App\Mahasiswa::where('nim','=','1012000011')->first();
    echo "Nama saya = " . $a->nama . "<br>";
    //Method 'dosen' di model 'Mahasiswa'
    echo "Nama Dosen = <b>" . $a->dosen->nama ."</b>";
});

Route::get('relasi-2', function(){
    $a = App\Dosen::where('nama','=','Yulianto')->first();
    echo "Nama saya = " . $a->nama;
    //Method 'mahasiswa' di model 'Dosen'
    foreach ($a->mahasiswa as $data){
        echo "<li>" . $data->nama . "</li>";
    }
});

Route::get('relasi-3', function(){
    $a = App\Wali::where ('nama','=','Nurhadi')->first();
    echo "Nama Wali = " .$a->nama. "<br>";
    echo "Nama Mahasiswa = " .$a->mahasiswa->nama. "<br>";
});

Route::get('relasi-4', function(){
    $a = App\Mahasiswa::where('nama','=','Noviyanto Rachmadi')->first();
    echo "Nama Saya = ".$a->nama;
    echo "<br> Daftar Hobi <br>";
    foreach ($a->hobi as $temp) {
        echo "<li>".$temp->hobi."</li>";
    }
});

Route::get('relasi-5', function(){
    $a = App\Hobi::where('hobi','=','Mandi Air')->first();
    echo "<br> Daftar Orang yang Mempunya hobi <b>".$a->hobi."</b><br><br>";
    foreach ($a->mahasiswa as $temp) {
        echo "<li>Nama : ".$temp->nama." <strong>&nbsp;".$temp->nim."</strong></li>";
    }
});

Route::get('relasi', function(){
    #Mengambil semua data mahasiswa (lengkap dengan nama relasi yang ada)
    #bisa juga uuntuk mengambil semua data "$mahasiswa = App\Mahasiswa::all();"
    $mahasiswa = App\Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    #kirim variabel ke view dengan compact
    return view('relasi/index', compact('mahasiswa'));
});

//route relasi CRUD [Dosen]
Route::resource('dosen', 'DosenController');

//route relasi CRUD [Hobi]
Route::resource('hobi', 'HobiController');

//route relasi CRUD [Mahasiswa]
Route::resource('mahasiswa', 'MahasiswaController');

//route relasi CRUD [Wali]
Route::resource('wali', 'WaliController');








