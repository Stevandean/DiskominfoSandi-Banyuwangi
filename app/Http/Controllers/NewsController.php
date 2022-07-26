<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;

class NewsController extends Controller
{
    //untuk mengirimkan berita sekilas
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

    //untuk info berita lengkpa
    public function show(){
        return view('berita-detail',[
            'news' => News::latest()->get(),
            'title' => "ini adalah judul berita"
        ]);
    }
}
