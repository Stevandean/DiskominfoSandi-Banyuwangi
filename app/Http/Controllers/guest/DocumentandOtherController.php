<?php

namespace App\Http\Controllers\guest;

use App\Models\Service;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DocumentandOtherController extends Controller
{
    public function index(){
        return view('guest.pages.document', [
            'documents' => Document::latest()->get(),
            'title' => 'Dokumen'
        ]);
    }

    public function downloadDocument($fileName){
        return Storage::download('document-src/'.$fileName);
    }

    public function layanan(){
        return view('guest.pages.layanan', [
            'title' => 'layanan',
            'services' => Service::latest () -> paginate(9)
        ]);
    }

    public function kontak(){
        return view('guest.pages.kontak', [
            'title' => 'kontak'
        ]);
    }
}
