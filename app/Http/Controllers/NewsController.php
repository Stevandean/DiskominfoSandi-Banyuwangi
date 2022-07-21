<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;

class NewsController extends Controller
{
    //untuk mengirimkan berita sekilah
    public function glances(){
        return view('home', [
            'news' => News::latest()->limit(6)->get(),
            'title' => 'home'
        ]);

        // return News::latest()->limit(6)->get();

    }

    public function index(){
        return view('berita',[
            'news' => News::latest()->get(),
            'title' => 'Berita'
        ]);
    }
}
