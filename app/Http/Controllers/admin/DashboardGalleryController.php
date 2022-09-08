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
        $validated = '';
        if($request->type == 'image'){
            $validated = $request->validate([
                'title' => 'required | max:225',
                'type' => 'required',
                'source' => 'required | file',
                'body' => 'nullable',
            ]);
        }else if($request->type == 'video'){
            $validated = $request->validate([
                'title' => 'min:2|required',
                'type' => 'required',
                'body' => 'nullable',
                'source' => 'required|url'
            ]);
        }else{
            return response(422)->json(['error' => 'ada error dengan typenya']);
        }

        if($request->hasFile('source')){
            if($request->type == 'image'){
                $validated['source'] = $request->file('source')->store('gallery-src');
            }else{
                return response(422)->json(["data tidak dapat diproses karean tipe tidak sesuai"]);
            }
        }

        // //memasuakn data ke database
        Gallery::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        return response()->json([$validated, 'success' => true]); //respon menggunakan json


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
    public function edit(Gallery $galeri)
    {
        return view ('admin.pages.galeri.edit-galeri', [
            'gallery' => $galeri,
            'title' => 'Edit Galery',
            'pageAction' => 'Edit Galery',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $galeri)
    {
        //melakukan validasi
        $validated = '';
        if($request->type == 'image'){
            $validated = $request->validate([
                'title' => 'min:2|required',
                'type' => 'required',
                'source' => 'nullable'
            ]);

            //mneghapus data lama dan mengubahnya dengan data baru, jika diberi data baru
            if($request->hasFile('source')){
                Storage::delete($request->oldSource);
                $validated['source'] = $request->file('source')->store('gallery-src');
            }
        }elseif($request->type == 'video'){
            $validated = $request->validate([
                'title' => 'min:2|required',
                'type' => 'required',
                'source' => 'nullable|url'
            ]);
        }else{
            return response(422)->json(['error' => 'ada error dengan typenya']);
        }

        

        Gallery::where('id', $galeri->id)->update($validated);
        $request->session()->flash('success', 'data berhasil diubah'); //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        return response()->json([$validated, 'success' => true]); //respon menggunakan json
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
            Storage::delete($galeri->source);
        }
        Gallery::destroy($galeri->id);
        return redirect('/admin/galeri')->with('success', 'data telah berhasil dihapus');
    }
}

