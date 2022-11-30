<?php

use App\Http\Controllers\admin\DashboardCategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\guest\HomeController;
use App\Http\Controllers\guest\NewsController;
use App\Http\Controllers\guest\PPIDController;
use App\Http\Controllers\guest\ProfilController;
use App\Http\Controllers\guest\DocumentandOtherController;
use App\Http\Controllers\guest\CategoryServiceController;


use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DashboardNewsController;
use App\Http\Controllers\admin\DashboardGalleryController;
use App\Http\Controllers\admin\DashboardServiceController;
use App\Http\Controllers\admin\DashboardDocumentController;
use App\Http\Controllers\admin\DashboardProfileController;
use App\Http\Controllers\admin\DashboardProfilePejabatController;


//------------------ ## GUEST ## ----------------------
// -- home --
Route::get('/', [HomeController::class, 'home'])->middleware('global-data-value');

// -- profil --
Route::middleware('global-data-value')->prefix('profil')->group(function(){
    Route::get('galeri', [ProfilController::class, 'galeri']);
    Route::get('show-galeri/{galeri}', [ProfilController::class, 'galeriShow']);
    Route::get('tupoksi', [ProfilController::class, 'tupoksi']);
    Route::get('struktur-organisasi', [ProfilController::class,'strukturOrganisasi']);
    Route::get('visi-misi', [ProfilController::class, 'visiMisi']);
});

// -- ppid --
Route::get ('/ppid',[PPIDController::class, 'index'])->middleware('global-data-value');
Route::middleware('global-data-value')->prefix('ppid')->group(function(){
    Route::get ('latar-belakang-ppid',[PPIDController::class, 'latarBelakang']);
    Route::get ('pedoman-ppid-revisi',[PPIDController::class, 'pedomanPPID']);
    Route::get ('dasar-hukum-ppid',[PPIDController::class, 'dasarHukum']);
    Route::get ('sk-ppid',[PPIDController::class, 'skPPID']);
    Route::get ('dip-ppid',[PPIDController::class, 'dipPPID']);
    Route::get ('sop-ppid',[PPIDController::class, 'sopPPID']);
});

// -- yang lain --
Route::get('/berita', [NewsController::class, 'index'])->middleware('global-data-value');
Route::get('/berita/{news:slug}', [NewsController::class, 'show'])->middleware('global-data-value');
Route::get('/document', [DocumentandOtherController::class, 'index'])->middleware('global-data-value');
Route::get('/document/download/document-src/{fileName}', [DocumentandOtherController::class, 'downloadDocument'])->middleware('global-data-value'); //download dokument
Route::get('/kontak', [DocumentandOtherController::class, 'kontak'])->middleware('global-data-value');
Route::get('/layanan/{categoriesId}', [CategoryServiceController::class, 'layanan'])->middleware('global-data-value');
// Route::get('/layanan/{categories}', [CategoryServiceController::class, 'layanan'])->middleware('global-data-value');




//------------------ ## ADMIN ## ----------------------
Route::redirect('/admin', '/admin/login');
Route::redirect('/login', '/admin/login');
Route::get('/admin/login',[LoginController::class, 'halamanLogin']) -> name('login')->middleware('guest');
Route::post('/admin/login',[LoginController::class, 'authenticate']);
Route::post('/admin/logout',[LoginController::class, 'logout']);

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'] ) -> name('home');
    Route::get('dokumen/download/document-src/{profil_pejabat}', [DashboardDocumentController::class, 'downloadLKHPN']);
    Route::get('slug', [DashboardNewsController::class, 'checkSlug']);
    Route::resource('dokumen', DashboardDocumentController::class);
    Route::resource('galeri', DashboardGalleryController::class);
    Route::resource('berita', DashboardNewsController::class);
    Route::resource('layanan', DashboardServiceController::class);
    Route::resource('kategori', DashboardCategoryController::class);
    
    Route::prefix('profil')->group(function(){
        // -- profil pejabat --
        Route::resource('profil-pejabat',DashboardProfilePejabatController::class);
        Route::get('profil-pejabat/downloadLKHPN/{profil_pejabat}',[DashboardProfilePejabatController::class, 'downloadLKHPN']);

        // -- visi misi --
        Route::get('visi-misi', [DashboardProfileController::class, "indexVisiMisi"]);
        Route::get('visi-misi/edit', [DashboardProfileController::class, "editVisiMisi"]);
        Route::put('visi-misi/edit', [DashboardProfileController::class, "updateVisiMisi"]);

        // -- sejarah --
        Route::get('sejarah', [DashboardProfileController::class, "indexSejarah"]);
        Route::get('sejarah/edit', [DashboardProfileController::class, "editSejarah"]);
        Route::put('sejarah/edit', [DashboardProfileController::class, "updateSejarah"]);

        // -- tujuan dan sasaran --
        Route::get('tujuan-sasaran', [DashboardProfileController::class, "indexTujuanSasaran"]);
        Route::get('tujuan-sasaran/edit', [DashboardProfileController::class, "editTujuanSasaran"]);
        Route::put('tujuan-sasaran/edit', [DashboardProfileController::class, "updateTujuanSasaran"]);

        // -- struktur organisasi --
        Route::get('struktur-organisasi',[DashboardProfileController::class, "indexStrukturOrganisasi"]);
        Route::get('struktur-organisasi/edit',[DashboardProfileController::class, "editStrukturOrganisasi"]);
        Route::put('struktur-organisasi/edit',[DashboardProfileController::class, "updateStrukturOrganisasi"]);
    });
});


