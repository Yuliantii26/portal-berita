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

Route::get('penulis',function (){
    $penulis = \App\User::find(1);

    foreach($penulis->artikel as $data){
        echo "Judul : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi";
        echo "Slug : $data->slug";
        echo '<hr>';
    }
});


//Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;


Route::get('relasi-1',function(){

    #Mencari mahasiswa dengan NIM 1010101
    $mahasiswa = Mahasiswa::where('nim','=','1010101')->first();

    #Menampilkan nama wali dari mahasiswa tsb
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2',function(){

    #mencari mahasiswa dengan NIM 1010101
    $mahasiswa = Mahasiswa::where('nim','=','1010101')->first();

    #menampilakan nama dosen pembimbing dara Mahasiswa 
    return $mahasiswa->dosen->nama;
});
Route::get('relasi-3',function(){

    # Mencari dosen dengan yang bernama yulianti
    $dosen = Dosen::where('nama','=','yulianti')->first();

    # Menampilkan seluruh data mahasiswa dari dosen yulianti
    foreach($dosen->mahasiswa as $temp)
    echo '<li>Nama : ' . $temp->nama .
    '<strong>' . $temp->nim .'</strong></li>';
});
Route::get('relasi-4', function(){

    #Mencari data mahasiswa yang memiliki nama vinaTN
    $novay = Mahasiswa::where('nama','=','vinaTN')->first();

    #Menampilkan seluruh data hobi Mahasiswa yang bernama vinaTN 
    foreach($novay->hobi as $temp)
    echo'<li>' . $temp->hobi.'</li>';
});

Route::get('relasi-5',function(){
    #Mencari Data hobi mandi hujan 
    $mandi_hujan = Hobi::where('hobi','=','Mandi Hujan')->first();
    #Menampilakan semua mahasiswa yang mempunyai hobi mandi hujan 
    foreach($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama : ' .$temp->nama .'<strong>'
    .$temp->nim . '</strong></li>';
});

Route::resource('daftarsiswa','SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
