<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;

class NewsController extends Controller
{
    //untuk mengirimkan berita sekilas
    public function glances(){
        return view('guest.pages.home', [
            'news' => News::latest()->limit(6)->get(),
            'title' => 'home'
        ]);
    }

    public function index(){
        return view('guest.pages.berita.berita',[
            'news' => News::latest()->filter(request(['search', 'category']))->paginate(6)
            ->withQueryString(),
            'title' => 'Berita'
        ]);
    }

    //untuk info berita lengkpa
    public function show(News $news){
        return view('guest.pages.berita.berita-detail',[
            'news' => $news,
            'title' => $news->title
        ]);
    }
}
