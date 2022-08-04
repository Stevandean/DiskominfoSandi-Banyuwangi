<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Link;
use App\Models\Service;


class HomeController extends Controller
{
    public function home(){
        return view('guest.pages.home', [
            'news' => News::latest()->limit(6)->get(),
            'services' => Service::latest()->limit(5)->get(),
            'links' => Link::latest()->limit(16)->get()
        ]);
    }
}

//contoh menggunakan github
// https://github.com/rdehnhardt/skeleton/blob/master/app/Http/Controllers/Auth/LoginController.php