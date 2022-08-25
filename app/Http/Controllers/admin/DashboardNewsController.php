<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.berita.berita',[
            'title' => 'semua berita',
            'news' => News::latest()->filter(request(['search','category']))->paginate(7)->withQueryString(),
            'newsCount' =>News::latest()->filter(request(['search','category']))->count(),
            'pageAction' => 'Berita'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.pages.berita.tambah-berita', [
            'title' => 'Tambah Berita',
            'pageAction' => 'Tambah Berita',
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
        // return response()->json($request);

        $validated = $request->validate([
            'title' => 'required|max:100',
            'slug' => 'required',
            'body' => 'nullable',
            'image' => 'nullable|file',
            'publish_at' => 'nullable',
            'category' => 'required',
        ]);

        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('news-src');
        }

        //untuk mengakali user id
        $validated['user_id'] = auth()->user()->id;

        News::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        return response()->json([$validated, 'success' => true]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $beritum)
    {
        return response()->json([$beritum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $beritum)
    {
        return view('admin.pages.berita.edit-berita',[
            'title' => 'Edit Berita',
            'pageAction' => 'Edit '.$beritum->title,
            'news' => $beritum
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $beritum)
    {
        // return response()->json(['request' => $request->all()]);
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:news,slug,'.$beritum->id, //untuk melakukan ignore dengan data yang akan diubah
            'image' => 'nullable|file',
            'body' => 'nullable'
        ]);
        
        if($request->hasFile('image')){ //bila file gammbar ada ada maka hapus, jika tidak maka gunakan gambar lama (tidak ditimpa)
            $validated['image'] = $request->file('image')->store('news-src');
            Storage::delete($request->oldImage);
        }else{
            $validated['image'] = $request->oldImage;
        }

        News::where('id', $beritum->id)->update($validated);
        $request->session()->flash('success', 'data berhasil diubah'); //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        return response()->json([$validated, 'success' => true]); //respon menggunakan json
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $beritum)
    {
        if($beritum->image){
            Storage::delete($beritum->image);
        }
        News::destroy($beritum->id);
        return redirect('/admin/berita')->with('success', 'data telah berhasil dihapus');
    }
}
