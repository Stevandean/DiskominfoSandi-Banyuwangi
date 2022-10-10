<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.kategori.kategori",[
            'title' => 'halaman kategori',
            'categories' => Category::latest()
                        ->filter(request(['search']))
                        ->withCount('services')
                        ->paginate(7)
                        ->withQueryString(),
            'categoriesCount' => Category::latest()->filter(request(['search']))->count(),
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
        return view("admin.pages.kategori.tambah-kategori",[
            'title' => "tambah kategori"
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
            'name' => 'required|max:400|unique:categories',
            'description' => 'nullable',
            'link' => 'nullable',
            'icon' => 'nullable | file'
        ]);

        if($request->hasFile('icon')){
            $validated['icon'] = $request->file('icon')->store('category-src');
        }

        Category::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        return response()->json([$validated, 'success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $kategori)
    {
        // return response()->json([$kategori, 'services' => $kategori->services()->get()]);
        return response()->json([array_merge($kategori->toArray(), ['services' => $kategori->services()->get()])]);
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $kategori)
    {
        return view ('admin.pages.kategori.edit-kategori', [
            'category' => $kategori,
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
    public function update(Request $request, Category $kategori)
    {
        $validated = $request->validate([
            'name' => 'required|max:400',
            'description' => 'nullable',
            'link' => 'nullable',
            'icon' => 'nullable | file'
        ]);

        if($request->hasFile('icon')){
            Storage::delete($request->oldIcon);
            $validated['icon'] = $request->file('icon')->store('category-src');
        }else{
            $validated['icon'] = $request->oldIcon;
        }

        Category::where('id', $kategori->id)->update($validated);
        $request->session()->flash('success', 'data berhasil diubah'); //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        return response()->json([$validated, 'success' => true]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kategori)
    {
        if($kategori->icon){
            Storage::delete($kategori->icon);
        }
        Category::destroy($kategori->id);
        return redirect('/admin/kategori')->with('success', 'data telah berhasil dihapus');
    }
}
