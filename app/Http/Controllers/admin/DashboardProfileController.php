<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General_Profile;
use Illuminate\Support\Facades\Storage;

class DashboardProfileController extends Controller
{
    
    // --------------- visi misi ---------------------------
    public function indexVisiMisi(){
        $visi = General_Profile::where('key', 'visi')->first()->value ?? "";
        $misi = General_Profile::where('key', 'misi')->first()->value ?? "";
        return view('admin.pages.profil.visi-misi.visi-misi',[
            'title' => "ini visi misi",
            'visi' => $visi->value,
            'misi' => $misi->value
        ]);
    }

    public function editVisiMisi(){
        $visi = General_Profile::where('key', 'visi')->first()->value ?? "";
        $misi = General_Profile::where('key', 'misi')->first()->value ?? "";
        return view('admin.pages.profil.visi-misi.edit-visi-misi',[
            'title' => "ini visi misi",
            'visi' => $visi->value,
            'misi' => $misi->value
        ]);
    }

    public function updateVisiMisi(Request $request){
        $visi = $request->visi;
        $misi = $request->misi;

        General_Profile::updateOrCreate(['key' => 'visi'],['value' => $visi]);
        General_Profile::updateOrCreate(['key' => 'misi'],['value' => $misi]);
        $request->session()->flash('success', 'data berhasil diedit');
        return response()->json([$request, 'success' => true]);
    }

    // ----------------- sejarah --------------------
    public function indexSejarah(){
        $sejarahBody = General_Profile::where('key', 'sejarah_body')->first()->value;
        $imgSejarah1 = General_Profile::where('key', 'img_sejarah_1')->first()->value ?? "empty-source";
        $imgSejarah2 = General_Profile::where('key', 'img_sejarah_2')->first()->value ?? "empty-source";
        $imgSejarah3 = General_Profile::where('key', 'img_sejarah_3')->first()->value ?? "empty-source";
        return view('admin.pages.profil.sejarah.sejarah',[
            'title' => 'sejarah',
            'imgSejarah1' => $imgSejarah1,
            'imgSejarah2' => $imgSejarah2,
            'imgSejarah3' => $imgSejarah3,
            'sejarahBody' => $sejarahBody
        ]);
    }

    public function editSejarah(){
        $sejarahBody = General_Profile::where('key', 'sejarah_body')->first()->value;
        $imgSejarah1 = General_Profile::where('key', 'img_sejarah_1')->first()->value ?? "empty-source";
        $imgSejarah2 = General_Profile::where('key', 'img_sejarah_2')->first()->value ?? "empty-source";
        $imgSejarah3 = General_Profile::where('key', 'img_sejarah_3')->first()->value ?? "empty-source";
        return view('admin.pages.profil.sejarah.edit-sejarah',[
            'title' => 'edit sejarah',
            'imgSejarah1' => $imgSejarah1,
            'imgSejarah2' => $imgSejarah2,
            'imgSejarah3' => $imgSejarah3,
            'sejarahBody' => $sejarahBody
        ]);
    }

    public function updateSejarah(Request $request){
        $sejarahBody = $request->sejarahBody;
        $imgSejarah1 = $request->imgSejarah1;
        $imgSejarah2 = $request->imgSejarah2;
        $imgSejarah3 = $request->imgSejarah3;

        // return json_encode([$sejarahBody,$imgSejarah1,$imgSejarah2,$imgSejarah3]);

        General_Profile::updateOrCreate(['key' => 'sejarah_body'],['value'=>$sejarahBody]);

        if($request->hasFile('imgSejarah1')){
            $fileName = $request->file('imgSejarah1')->store('profile-src/img');
            Storage::delete(General_Profile::where('key', 'img_sejarah_1')->first() ?? "empty-source");
            General_Profile::updateOrCreate(['key' => 'img_sejarah_1'],['value'=>$fileName]);
        }

        if($request->hasFile('imgSejarah2')){
            $fileName = $request->file('imgSejarah2')->store('profile-src/img');
            Storage::delete(General_Profile::where('key', 'img_sejarah_2')->first() ?? "empty-source");
            General_Profile::updateOrCreate(['key' => 'img_sejarah_2'],['value'=>$fileName]);
        }

        if($request->hasFile('imgSejarah3')){
            $fileName = $request->file('imgSejarah3')->store('profile-src/img');
            Storage::delete(General_Profile::where('key', 'img_sejarah_3')->first() ?? "empty-source");
            General_Profile::updateOrCreate(['key' => 'img_sejarah_3'],['value'=>$fileName]);
        }

        $request->session()->flash('success', 'data berhasil diedit');
        return response()->json([$request, 'success' => true]);
    }

    
    //------------------ struktur organisasi ------------------------
    public function indexStrukturOrganisasi(){
        $imgStrukturOrganisasi = General_Profile::where('key', 'img_struktur_organisasi')->first()->value ?? "empty-source";
        return view('admin.pages.profil.struktur-organisasi.struktur-organisasi',[
            'title' => "struktur organisasi",
            'imgStrukturOrganisasi' => $imgStrukturOrganisasi
        ]);
    } 

    public function editStrukturOrganisasi(){
        $imgStrukturOrganisasi = General_Profile::where('key', 'img_struktur_organisasi')->first()->value ?? "empty-source";
        return view('admin.pages.profil.struktur-organisasi.edit-struktur-organisasi',[
            'title' => "edit struktur organisasi",
            'imgStrukturOrganisasi' => $imgStrukturOrganisasi
        ]);
    }

    public function updateStrukturOrganisasi(Request $request){
        $fileName = null;
        if($request->hasFile('imgStrukturOrganisasi')){
            $fileName = $request->file('imgStrukturOrganisasi')->store('profile-src/img');
            if($fileName == null){return response()->json(['msg' => 'data bermasalah', 'success' => false]);};
            Storage::delete(General_Profile::where('key', 'img_struktur_organisasi')->first() ?? "empty-source");
            General_Profile::updateOrCreate(['key' => 'img_struktur_organisasi'],['value' => $fileName]);
        }

        if($fileName != null) { return response()->json(['request' => $fileName, 'success' => true]);}
        else { return response()->json(['msg' => "ada error", 'success' => false]);}
    }


    // ------------------ Tujuan sasaran -------------
    public function indexTujuanSasaran(){
        $tujuan = General_Profile::where('key', 'tujuan')->first()->value ?? "";
        $sasaran = General_Profile::where('key', 'sasaran')->first()->value ?? "";
        return view('admin.pages.profil.tujuan-sasaran.tujuan-sasaran',[
            'title' => "ini visi misi",
            'tujuan' => $tujuan,
            'sasaran' => $sasaran
        ]);
    }

    public function editTujuanSasaran(){
        $tujuan = General_Profile::where('key', 'tujuan')->first()->value ?? "";
        $sasaran = General_Profile::where('key', 'sasaran')->first()->value ?? "";
        return view('admin.pages.profil.tujuan-sasaran.edit-tujuan-sasaran',[
            'title' => "ini visi misi",
            'tujuan' => $tujuan,
            'sasaran' => $sasaran
        ]);
    }

    public function updateTujuanSasaran(Request $request){
        $tujuan = $request->tujuan;
        $sasaran = $request->sasaran;

        General_Profile::updateOrCreate(['key' => 'tujuan'],['value' => $tujuan]);
        General_Profile::updateOrCreate(['key' => 'sasaran'],['value' => $sasaran]);
        $request->session()->flash('success', 'data berhasil diedit');
        return response()->json([$request, 'success' => true]);
    }
}
