<?php

use App\Http\Controllers\admin\DashboardCategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\guest\HomeController;
use App\Http\Controllers\guest\NewsController;
use App\Http\Controllers\guest\PPIDController;
use App\Http\Controllers\guest\ProfilController;
use App\Http\Controllers\guest\DocumentandOtherController;


use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DashboardLinkController;
use App\Http\Controllers\admin\DashboardNewsController;
use App\Http\Controllers\admin\DashboardGalleryController;
use App\Http\Controllers\admin\DashboardServiceController;
use App\Http\Controllers\admin\DashboardDocumentController;


//------------------ ## GUEST ## ----------------------
// -- home --
Route::get('/', [HomeController::class, 'home']);

// -- profil --
Route::prefix('profil')->group(function(){
    Route::get('galeri', [ProfilController::class, 'galeri']);
    Route::get('show-galeri/{galeri}', [ProfilController::class, 'galeriShow']);
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
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{news:slug}', [NewsController::class, 'show']);
Route::get('/document', [DocumentandOtherController::class, 'index']);
Route::get('/document/download/document-src/{fileName}', [DocumentandOtherController::class, 'downloadDocument']); //download dokument
Route::get('/kontak', [DocumentandOtherController::class, 'kontak']);
Route::get('/layanan', [DocumentandOtherController::class, 'layanan']);




//------------------ ## ADMIN ## ----------------------
Route::redirect('/admin', '/admin/login');
Route::redirect('/login', '/admin/login');
Route::get('/admin/login',[LoginController::class, 'halamanLogin']) -> name('login')->middleware('guest');
Route::post('/admin/login',[LoginController::class, 'authenticate']);
Route::post('/admin/logout',[LoginController::class, 'logout']);

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'] ) -> name('home');
    Route::get('dokumen/download/document-src/{fileName}', [DashboardDocumentController::class, 'download']);
    Route::get('slug', [DashboardNewsController::class, 'checkSlug']);
    Route::resource('dokumen', DashboardDocumentController::class);
    Route::resource('galeri', DashboardGalleryController::class);
    Route::resource('berita', DashboardNewsController::class);
    Route::resource('layanan', DashboardServiceController::class);
    Route::resource('kategori', DashboardCategoryController::class);
});


