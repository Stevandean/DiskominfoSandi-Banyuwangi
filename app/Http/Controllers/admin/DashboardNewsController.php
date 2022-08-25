<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $beritum = News::latest() -> filter (request(['search', 'type'])) -> paginate (7) -> withQueryString();
        $beritumCount = News::latest() -> filter (request (['search', 'type'])) -> count();

        return view ('admin.pages.berita.berita', [
            'news' => $beritum,
            'newsCount' => $beritumCount,
            'title' => 'Berita', 
            'pageAction' => 'Berita',
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
        // return response()->json([
        //     $request->all(),
        //     $request->file('image')
        // ]);
        //melakukan validasi
        $validated = $request -> validate ([
            'image' => 'required | image',
            'title' => 'required',
            'publish_at' => 'nullable',
            'category' => 'required',
            'body' => 'required',
            'slug' => 'required',
        ]);

        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('news-src');
        }

        $validated['user_id'] = auth()->user()->id;

        News::create ($validated);
        $request -> session() -> flash ('success', 'Data berhasil ditambah');

        //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        return redirect ('/admin/berita') -> with ('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $beritum)
    {
        return response() -> json ([$beritum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $beritum)
    {
        return view ('admin.pages.berita.edit-berita', [
            'news' => $beritum,
            'title' => 'Edit Berita',
            'pageAction' => 'Edit Berita',
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
        //melakukan validasi
        $validated = $request -> validate ([
            'image' => 'nullable | image',
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'slug' => 'required',
        ]);

        if($request->hasFile('image')){
            Storage::delete($request->oldImage);
            $validated['image'] = $request->file('image')->store('news-src');
        }

        News::where ('id', $beritum -> id) 
                    -> update ($validated);
        $request -> session() -> flash ('success', 'Data berhasil diubah');
        
        return redirect ('/admin/berita') -> with ('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $beritum)
    {
        News::destroy ($beritum -> id);

        return redirect ('/admin/berita') -> with ('success', 'Data berhasil dihapus');
    }
}
