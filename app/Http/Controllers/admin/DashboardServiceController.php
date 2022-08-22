<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.layanan.layanan', [
            'title' => 'halaman layanan',
            'services' => Service::latest()->filter(request(['search']))->paginate(7)->withQueryString(),
            'servicesCount' => Service::latest()->filter(request(['search']))->count(),
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
        return view('admin.pages.layanan.tambah-layanan', [
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
            'name' => 'required|max:400|unique:services',
            'description' => 'nullable',
            'link' => 'nullable'
        ]);

        Service::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        return response()->json([$validated, 'success' => true]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $layanan)
    {
        return response()->json([$layanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $layanan)
    {
        return view('admin.pages.layanan.edit-layanan', [
            'title' => 'Edit layanan',
            'pageAction' => 'Edit Layanan',
            'service' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $layanan)
    {
        // return response()->json([$request->all()]);
        $validated = $request->validate([
            'name' => 'required|max:400|unique:services,name,'.$layanan->id,
            'description' => 'nullable',
            'link' => 'nullable'
        ]);

        Service::where('id', $layanan->id)->update($validated);
        $request->session()->flash('success', 'data berhasil diubah');
        return response()->json([$validated, 'success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $layanan)
    {
        Service::destroy($layanan->id);
        return redirect('/admin/layanan')->with('success', 'data berhasil dihapus');
    }
}
