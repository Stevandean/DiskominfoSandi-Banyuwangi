<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\General_Profile;
use App\Models\Profile_Pejabat;
use Illuminate\Http\Request;


//saya buat supaya lebih mudah untuk mengatur routnya
class ProfilController extends Controller
{
    public function galeri(){
        return view ('guest.pages.profil.galeri',[
            'title' => 'Galeri',
            'galleries' => Gallery::latest()->paginate(16)
        ]);
    }

    public function galeriShow(Gallery $galeri){
        return response()->json([$galeri]);
    }

    public function tupoksi(){
        return view ('guest.pages.profil.tupoksi', [
            'title' => 'Tupoksi'
        ]);
    }

    public function strukturOrganisasi(){
        $imgStrukturOrganisasi = General_Profile::where('key', 'img_struktur_organisasi')->first()->value ?? "empty-source";
        return view('guest.pages.profil.struktur-organisasi', [
            'title' => 'Struktur Organisasi',
            'imgStrukturOrganisasi' => $imgStrukturOrganisasi
        ]);
    }

    public function visiMisi(){
        $visi = General_Profile::where('key', 'visi')->first()->value ?? "";
        $misi = General_Profile::where('key', 'misi')->first()->value ?? "";
        return view('guest.pages.profil.visi-misi', [
            'title' => "Visi dan Misi",
            'visi' => $visi,
            'misi' => $misi
        ]);
    }

    public function sejarah(){
        $sejarahBody = General_Profile::where('key', 'sejarah_body')->first()->value;
        $imgSejarah1 = General_Profile::where('key', 'img_sejarah_1')->first()->value ?? "empty-source";
        $imgSejarah2 = General_Profile::where('key', 'img_sejarah_2')->first()->value ?? "empty-source";
        $imgSejarah3 = General_Profile::where('key', 'img_sejarah_3')->first()->value ?? "empty-source";
        return view('guest.pages.profil.sejarah',[
            'title' => 'sejarah',
            'imgSejarah1' => $imgSejarah1,
            'imgSejarah2' => $imgSejarah2,
            'imgSejarah3' => $imgSejarah3,
            'sejarahBody' => $sejarahBody
        ]);
    }
    public function profilPejabat(){
        return view('guest.pages.profil.profil-pejabat',[
            'title' => "profil pejabat",
            'profilPejabats' => Profile_Pejabat::latest()->get()
        ]);
    }
    public function tujuanSasaran(){
        $tujuan = General_Profile::where('key', 'tujuan')->first()->value ?? "";
        $sasaran = General_Profile::where('key', 'sasaran')->first()->value ?? "";
        return view ('guest.pages.profil.tujuan-sasaran',[
            'title' => 'tujuan dan sasaran',
            'tujuan' => $tujuan,
            'sasaran' => $sasaran
        ]);
    }
    public function organisasiTataKerja(){
        $pdfOrganisasiTataKerja = General_Profile::where('key', 'pdf_organisasi_tata_kerja')->first()->value ?? "empty-source";
        return view('guest.pages.profil.organisasi-tata-kerja',[
            'title' => "Organisasi Tata kerja",
            'pdfOrganisasiTataKerja' => $pdfOrganisasiTataKerja
        ]);
    }
}


