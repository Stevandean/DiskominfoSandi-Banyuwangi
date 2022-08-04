<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PPIDController extends Controller
{
    public function index(){
        return view('guest.pages.PPID.ppid',[
            'title' => 'PPID'
        ]);
    }

    public function latarBelakang(){
        return view('guest.pages.PPID.latar-belakang-ppid', [
            'title' => 'Latar Belakang PPID'
        ]);
    }

    public function pedomanPPID(){
        return view ('guest.pages.PPID.pedoman-ppid-revisi',[
            'title' => 'Pedoman PPID'
        ]);
    }

    public function dasarHukum(){
        return view ('guest.pages.PPID.dasar-hukum-ppid',[
            'title' => 'Dasar Hukum'
        ]);
    }

    public function skPPID(){
        return view ('guest.pages.PPID.sk-ppid', [
            'title' => 'SK PPID'
        ]);
    }

    public function dipPPID(){
        return view ('guest.pages.PPID.dip-ppid',[
            'title' => 'DIP PPID'
        ]);
    }

    public function sopPPID(){
        return view ('guest.pages.PPID.sop-ppid',[
            'title' => 'SOP PPID'
        ]);
    }
}
