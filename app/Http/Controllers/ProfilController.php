<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//saya buat supaya lebih mudah untuk mengatur routnya
class ProfilController extends Controller
{
    public function galeri(){
        return view ('profil.galeri',[
            'title' => 'Galeri'
        ]);
    }

    public function tupoksi(){
        return view ('profil.tupoksi', [
            'title' => 'Tupoksi'
        ]);
    }

    public function strukturOrganisasi(){
        return view('profil.struktur-organisasi', [
            'title' => 'Struktur Organisasi'
        ]);
    }

    public function visiMisi(){
        return view('profil.visi-misi', [
            'title' => "Visi dan Misi"
        ]);
    }
}
