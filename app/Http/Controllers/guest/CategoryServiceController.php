<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;


class CategoryServiceController extends Controller
{
    // public function layanan(Category $kategori){
    public function layanan($categoriesId){
        $kategori = Category::find($categoriesId);
        // return json_encode([$kategori->services]);
        return view('guest.pages.layanan', [
            'title' => $kategori->name,
            'category' => $kategori,
            'services' => $kategori->services()->latest()->paginate(9),
        ]);
    }
}
