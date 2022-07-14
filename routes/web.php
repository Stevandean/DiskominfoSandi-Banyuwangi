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

Route::get ('/', function () {
    return view ('home');
});

Route::get ('/about', function () {
    return view ('about');
});

Route::get('/galeri', function () {
    return view ('galeri');
});

Route::get('/info', function () {
    return view ('info');
});

Route::get('/berita', function () {
    return view ('berita');    
});

Route::get('/document', function () {
    return view ('document');
});

Route::get('/kontak', function () {
    return view ('kontak');
});

Route::get('/tupoksi', function () {
    return view ('tupoksi');
});

Route::get('/visi-misi', function () {
    return view ('visi-misi');
});

Route::get('/struktur-organisasi', function () {
    return view ('struktur-organisasi');
});

Route::get('/layanan', function () {
    return view ('layanan');
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