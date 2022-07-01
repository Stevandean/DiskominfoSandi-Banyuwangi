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

Route::get ('/ppid', function (){
    return view ('PPID.ppid');
});

Route::get('/latar-belakang-ppid', function () {
    return view ('PPID.latar-belakang-ppid');
});

Route::get('/pedoman-ppid', function () {
    return view ('PPID.pedoman-ppid');
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