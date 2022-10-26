<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
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
            'pageAction' => 'Tambah Layanan',
            'categories' => collect(Category::get())
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
            'link' => 'nullable',
            'icon' => 'nullable|file'
        ]);

        if($request->hasFile('icon')){
            $validated['icon'] = $request->file('icon')->store('category-src');
        }

        $category = Category::find($request->category_id);
        $category->services()->create($validated);

        // Service::create($validated);
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
            'service' => $layanan,
            'categories' => collect(Category::get())
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
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            'link' => 'nullable',
            'icon' => 'nullable|file'
        ]);

        if($request->hasFile('icon')){
            if($request->oldIcon){
                Storage::delete($request->oldIcon);
            }
            $validated['icon'] = $request->file('icon')->store('category-src');
        }else{
            $validated['icon'] = $request->oldIcon;
        }

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
