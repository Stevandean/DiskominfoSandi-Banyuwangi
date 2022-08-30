<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Service;
use Illuminate\Http\Request;

class DocumentandOtherController extends Controller
{
    public function index(){
        return view('guest.pages.document', [
            'documents' => Document::latest()->get(),
            'title' => 'Dokumen'
        ]);
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
