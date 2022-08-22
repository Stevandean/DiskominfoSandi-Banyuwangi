<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class DashboardLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.link-terkait.link-terkait', [
            'title' => 'halaman layanan',
            'links' => Link::latest()->filter(request(['search']))->paginate(7)->withQueryString(),
            'linksCount' => Link::latest()->filter(request(['search']))->count(),
            'pageAction' => 'Layanan'
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
            'title' => 'Tambah layanan',
            'pageAction' => 'Tambah Layanan'
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
        // return response()->json([$request->all()]);
        $validated = $request->validate([
            'name' => 'required|max:400|unique:links',
            'description' => 'nullable',
            'link' => 'nullable'
        ]);

        Link::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        return response()->json([$validated, 'success' => true]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link_terkait)
    {
        return response()->json([$link_terkait]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link_terkait)
    {
        return view('admin.pages.link-terkait.edit-link-terkait', [
            'title' => 'Edit layanan',
            'pageAction' => 'Edit Layanan',
            'link' => $link_terkait
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link_terkait)
    {
        // return response()->json([$request->all()]);
        $validated = $request->validate([
            'name' => 'required|max:400|unique:links,name,'.$link_terkait->id,
            'description' => 'nullable',
            'link' => 'nullable'
        ]);

        Link::where('id', $link_terkait->id)->update($validated);
        $request->session()->flash('success', 'data berhasil diubah');
        return response()->json([$validated, 'success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link_terkait)
    {
        Link::destroy($link_terkait->id);
        return redirect('/admin/link-terkait')->with('success', 'data berhasil dihapus');
    }
}
