<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guest\HomeController;
use App\Http\Controllers\guest\NewsController;
use App\Http\Controllers\guest\PPIDController;
use App\Http\Controllers\guest\ProfilController;
use App\Http\Controllers\guest\DocumentandOtherController;

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


// -- home --
Route::get('/', [HomeController::class, 'home']);


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
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{news:slug}', [NewsController::class, 'show']);
Route::get('/document', [DocumentandOterController::class, 'index']);
Route::get('/kontak', [DocumentandOterController::class, 'kontak']);
Route::get('/layanan', [DocumentandOtherController::class, 'layanan']);

Route::get('/1', function () {
    return view ('home3',[
        'title' => 'Layanan'
    ]);
});
