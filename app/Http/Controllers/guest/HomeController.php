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
        // return response()->json($this->newskab()->data->items);
        return view('guest.pages.home', [
            'news' => News::latest()->limit(3)->get(),
            'scraps' => collect(array_slice($this->newskab()->data->items, 0,3)),
            'services' => Service::latest()->get(),
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

    //untuk consume api dari banuwangi kab
    public function newskab()
	{		
		$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYmFueXV3YW5naWthYi5nby5pZFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjk0NTQxMCwibmJmIjoxNjYyOTQ1NDEwLCJqdGkiOiJTQTI4ZkFzVzNmd1dPT0ZvIiwic3ViIjoyNiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.Irrj5qmQPe229cpZXHEQfnGzsVD7V8mz1naneyRmK9A';
		$auth = "Authorization: Bearer ".$token;
		$header = array('Content-type: application/json',$auth);
		
		
        $url = 'https://banyuwangikab.go.id/api/berita/newRelease';
        $ch = curl_init($url);


		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
		
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch); 
             
        curl_close($ch);
		return json_decode($result);
	}
}

//contoh menggunakan github
// https://github.com/rdehnhardt/skeleton/blob/master/app/Http/Controllers/Auth/LoginController.php