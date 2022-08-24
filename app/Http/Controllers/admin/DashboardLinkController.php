<?php

namespace App\Http\Controllers\admin;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linkTerkait = Link::latest() -> filter (request (['search', 'type'])) -> paginate(7) -> withQueryString();
        $linkTerkaitCount = Link::latest() -> filter (request (['search', 'type'])) -> count();
        
        return view ('admin.pages.link-terkait.link-terkait', [
            'linkTerkait' => $linkTerkait,
            'linkTerkaitCount' => $linkTerkaitCount,
            'title' => 'Link Terkait',
            'pageAction' => 'Link Terkait',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.link-terkait.tambah-link-terkait', [
            'title' => 'Tambah Link Terkait',
            'pageAction' => 'Tambah Link Terkait'
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
        //Melakukan Validasi
        $validated = $request -> validate ([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        Link::create ($validated);
        $request -> session() -> flash ('success', 'Data berhasil ditambah');

        //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        return redirect ('/admin/link-terkait') ->with ('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Link $linkTerkait)
    {
        return response() -> json ([$linkTerkait]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $linkTerkait)
    {
        return view ('admin.pages.link-terkait.edit-link-terkait', [
            'linkTerkait' => $linkTerkait,
            'title' => 'Edit Link Terkait',
            'pageAction' => 'Edit Link Terkait',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $linkTerkait)
    {
        //melakukan validasi
        $validated = $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        Link::where ('id', $linkTerkait -> id) 
                        -> update ($validated);
        $request -> session() -> flash ('success', 'Data berhasil diubah');
        
        return redirect ('/admin/link-terkait') -> with ('success', 'Data berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(link $linkTerkait)
    {
        Link::destroy($linkTerkait -> id);

        return redirect ('/admin/link-terkait') -> with ('success', 'Data berhasil dihapus');
    }
}
