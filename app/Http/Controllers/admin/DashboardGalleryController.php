<?php

namespace App\Http\Controllers\admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->filter(request(['search','type']))->paginate(7)->withQueryString();
        $galleryCount = Gallery::latest()->filter(request(['search','type']))->count();
        return view('admin.pages.galeri.galeri', [
            'galleries' => $galleries,
            'galleryCount' => $galleryCount,
            'title' => 'Semua galeri',
            'pageAction' => 'Gallery'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.galeri.tambah-galeri',[
            'title' => 'Tambah galeri',
            'pageAction' => 'Tambah galeri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $galeri)
    {
        return response()->json([$galeri]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $galeri)
    {
        if($galeri->source){
            Storage::delete('gallery-src/'.$galeri->source);
        }

        Gallery::destroy($galeri->id);

        return redirect('/admin/galeri')->with('success', 'data telah berhasil dihapus');
    }
}
