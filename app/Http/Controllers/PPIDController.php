<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPIDController extends Controller
{
    public function index(){
        return view('PPID.ppid',[
            'title' => 'PPID'
        ]);
    }

    public function latarBelakang(){
        return view('PPID.latar-belakang-ppid', [
            'title' => 'Latar Belakang PPID'
        ]);
    }

    public function pedomanPPID(){
        return view ('PPID.pedoman-ppid-revisi',[
            'title' => 'Pedoman PPID'
        ]);
    }

    public function dasarHukum(){
        return view ('PPID.dasar-hukum-ppid',[
            'title' => 'Dasar Hukum'
        ]);
    }

    public function skPPID(){
        return view ('PPID.sk-ppid', [
            'title' => 'SK PPID'
        ]);
    }

    public function dipPPID(){
        return view ('PPID.dip-ppid',[
            'title' => 'DIP PPID'
        ]);
    }

    public function sopPPID(){
        return view ('PPID.sop-ppid',[
            'title' => 'SOP PPID'
        ]);
    }
}
