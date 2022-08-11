<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\guest\HomeController;
use App\Http\Controllers\guest\NewsController;
use App\Http\Controllers\guest\PPIDController;
use App\Http\Controllers\admin\LoginController;

use App\Http\Controllers\guest\ProfilController;
use App\Http\Controllers\admin\DashboardLinkController;
use App\Http\Controllers\admin\DashboardNewsController;
use App\Http\Controllers\admin\DashboardGalleryController;
use App\Http\Controllers\admin\DashboardServiceController;
use App\Http\Controllers\guest\DocumentandOtherController;
use App\Http\Controllers\admin\DashboardDocumentController;


//------------------ ## GUEST ## ----------------------
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
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{news:slug}', [NewsController::class, 'show']);
Route::get('/document', [DocumentandOtherController::class, 'index']);
Route::get('/kontak', [DocumentandOtherController::class, 'kontak']);
Route::get('/layanan', [DocumentandOtherController::class, 'layanan']);




//------------------ ## ADMIN ## ----------------------
Route::redirect('/admin', '/admin/login');
    Route::get('/admin/login',[LoginController::class, 'halamanLogin']) -> name('login');
    Route::post('/admin/login',[LoginController::class, 'authenticate']);
    Route::post('/admin/logout',[LoginController::class, 'logout']);
//lupa membuat login😔

Route::prefix('admin')->group(function(){

    Route::get('dokumen/download/document-src/{fileName}', [DashboardDocumentController::class, 'download']);
    Route::get('dashboard', fn()=> view('admin.pages.dashboard',[
        'title' => 'dashboard'
    ])) -> middleware('auth') -> name('home');
    Route::resource('dokumen', DashboardDocumentController::class);
    Route::resource('galeri', DashboardGalleryController::class);
    Route::resource('link-terkait', DashboardLinkController::class);
    Route::resource('berita', DashboardNewsController::class);
    Route::resource('layanan', DashboardServiceController::class);
});


Route::get('/modal-dokumen', function () {
    return view ('modals.modal-dokumen');
});

Route::get('/modal-berita', function () {
    return view ('modals.modal-berita');
});

Route::get('/modal-galeri', function () {
    return view ('modals.modal-galeri');
});

Route::get('/modal-layanan', function () {
    return view ('modals.modal-layanan');
});

Route::get('/modal-link', function () {
    return view ('modals.modal-link');
});
