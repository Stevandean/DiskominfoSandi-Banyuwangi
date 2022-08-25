<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; 

class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::latest()->filter(request(['search','type']))->paginate(7)->withQueryString();
        $serviceCount = Service::latest()->filter(request(['search', 'type']))->count();
        return view('admin.pages.layanan.layanan', [
            'service' => $service,
            'serviceCount' => $serviceCount,
            'title' => 'Layanan',
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
        return view ('admin.pages.layanan.tambah-layanan', [
            'title' => 'Tambah Layanan',
            'pageAction' => 'Tambah Layanan',
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
        //melakukan validasi
        $validated = $request -> validate ([
            'name' => 'required | max:225',
            'description' => 'required',
            'link' => 'required',
        ]);

        Service::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        return redirect('/admin/layanan')->with('success','data berhasil di tambah');
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
        return view ('admin.pages.layanan.edit-layanan', [
            'layanan' => $layanan,
            'title' => 'Edit Layanan',
            'pageAction' => 'Edit Layanan'
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
        //melakunan validasi
        $validated = $request -> validate ([
            'name' => 'required | max:225',
            'description' => 'required',
            'link' => 'required',
        ]);

        Service::where ('id', $layanan -> id)
                        ->update ($validated);
        $request -> session() -> flash ('success', 'data berhasil diubah');
        //supaya dapat menggunakan flash ketika diredirect menggunakan javascript

        return redirect('/admin/layanan') -> with ('success', 'data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $layanan)
    {
        Service::destroy($layanan -> id);

        return redirect('/admin/layanan')-> with ('success', 'data telah berhasil dihapus');
    }
}
