<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Link;
use App\Models\Service;
use Goutte\Client;

use Symfony\Component\HttpClient\HttpClient;

class HomeController extends Controller
{
    //data dan index
    private $result = [];
    private $a = 0;

    public function home(){
        // return $this->scraper();

        // return [
        //     'news' => News::latest()->limit(3)->get(),
        //     'scraps' => array_slice($this->scraper(), 0,3),
        //     'services' => Service::latest()->limit(5)->get(),
        //     'links' => Link::latest()->limit(16)->get()
        // ];
        return view('guest.pages.home', [
            'news' => News::latest()->limit(3)->get(),
            'scraps' => collect(array_slice($this->scraper(), 0,3)),
            'services' => Service::latest()->limit(5)->get(),
            'links' => Link::latest()->limit(16)->get()
        ]);


    }

    //untuk scrapping data
    public function scraper()
    {
        $client = new Client( HttpClient::create(["verify_peer"=>false, "verify_host"=>false]));
        $url = 'https://www.banyuwangikab.go.id/berita/kanal/umum';
        $page = $client->request('GET', $url);

        //index pertama
        $this->a = 0;


        //23 merupaka index karater berikut ---> ** (' **
        //----------------------- COBA 1 ------------------- 
        $page->filter('.ng-wrp-item')->each(function ($item){
            $title = $item->children()->last()->children()->first()->text();
            $image = $item->children()->first()->attr('style');
            $image = explode(';',$image)[3];
            $image = substr(trim($image), 23, -2);


            //untuk mendapat parent dari element ini
            $parent = $item->getNode(0)->parentNode->getAttribute('href');
            $this->results[$this->a++] = [
            'image' => $image,
            'title' => $title,
            'body' => $title,
            'link' => $parent
            ];
        });

        // return $results;
        return $this->results;
    }
}

//contoh menggunakan github
// https://github.com/rdehnhardt/skeleton/blob/master/app/Http/Controllers/Auth/LoginController.php