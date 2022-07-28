<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PPIDController;

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

// Route::get ('/', function () {
//     return view ('home');
// });

/*
Route::get ('/about', function () {
    return view ('about');
});

Route::get('/galeri', function () {
    return view ('galeri');
});



Route::get ('/ppid', function (){
    return view ('PPID.ppid');
});

Route::get('/latar-belakang-ppid', function () {
    return view ('PPID.latar-belakang-ppid');
});

Route::get('/pedoman-ppid-revisi', function () {
    return view ('PPID.pedoman-ppid-revisi');
});

Route::get('/dasar-hukum-ppid', function () {
    return view ('PPID.dasar-hukum-ppid');
});

Route::get ('/sk-ppid', function () {
    return view ('PPID.sk-ppid');
});

Route::get('/dip-ppid', function () {
    return view ('PPID.dip-ppid');
});

Route::get('/sop-ppid', function () {
    return view ('PPID.sop-ppid');
});
*/

// -- home --
Route::get('/', [NewsController::class, 'glances']);


// -- profil --
Route::prefix('profil')->group(function(){
    Route::get('galeri', [ProfilController::class, 'galeri']);
    Route::get('tupoksi', [ProfilController::class, 'tupoksi']);
    Route::get('struktur-organisasi', [ProfilController::class,'strukturOrganisasi']);
    Route::get('visi-misi', [ProfilController::class, 'visiMisi']);
});


// -- ppid --
Route::get ('/ppid',[PPIDController::class, 'index']);
Route::prefix('ppid')->group(function(){
    
    Route::get ('latar-belakang-ppid',[PPIDController::class, 'latarBelakang']);
    Route::get ('pedoman-ppid-revisi',[PPIDController::class, 'pedomanPPID']);
    Route::get ('dasar-hukum-ppid',[PPIDController::class, 'dasarHukum']);
    Route::get ('sk-ppid',[PPIDController::class, 'skPPID']);
    Route::get ('dip-ppid',[PPIDController::class, 'dipPPID']);
    Route::get ('sop-ppid',[PPIDController::class, 'sopPPID']);
});


// -- yang lain --
// ** NOTE **
//untuk yg ini masih optional, karena nantinya akan dibuat sebagai halaman dinamis
Route::get('/info', [InformationController::class, 'index']);

Route::get('/berita', [NewsController::class, 'index']);

Route::get('/berita/{news:slug}', [NewsController::class, 'show']);


Route::get('/document', [DocumentController::class, 'index']);

Route::get('/kontak', function () {
    return view ('kontak', [
        'title' => 'Kontak'
    ]);
});

Route::get('/layanan', function () {
    return view ('layanan',[
        'title' => 'Layanan'
    ]);
});

Route::get('/1', function () {
    return view ('home3',[
        'title' => 'Layanan'
    ]);
});
