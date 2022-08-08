<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Document;
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
            'title' => 'layanan'
        ]);
    }

    public function kontak(){
        return view('guest.pages.kontak', [
            'title' => 'kontak'
        ]);
    }
}
