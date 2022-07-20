<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index(){
        return view('info', [
            'data' => Information::latest()->get()
        ]);
    }
}
