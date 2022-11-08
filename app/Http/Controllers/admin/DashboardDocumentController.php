<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class DashboardDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::latest()->filter(request(['search']))->paginate(7)->withQueryString();
        $documentCount = Document::latest()->filter(request(['search']))->count();
        return view('admin.pages.dokumen.dokumen', [
            'documents' => $documents,
            'documentCount' => $documentCount,
            'title' => 'Semua dokumen',
            'pageAction' => 'Document'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.dokumen.tambah-dokumen',[
            'title' => 'Tambah Dokumen',
            'pageAction' => 'Tambah Dokumen'
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
        $validated = $request->validate([
            'name' => 'required|max:225',
            'source' => [
                'nullable', 
                File::types(['pdf'])
                    ->max(50*1024) //50 mb
            ]
        ]);

        //jika ada dokumen yang diupload
        //jika gambar ada, maka simpan pada folder berikut
        if($request->file('source')){
            $validated['source'] = $request->file('source')->storeAs('document-src', str_replace(' ', '-',$request->name).".pdf"); 
            //simpan nama file ke array validated, jadi bukan file yg disimpan
        }

        Document::create($validated);
        //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        $request->session()->flash('success', 'data berhasil ditambah'); 
        //respon menggunakan json
        return response()->json([$validated, 'success' => true]); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $dokuman)
    {
        return response()->json([$dokuman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $dokuman)
    {
        return view('admin.pages.dokumen.edit-dokumen',[
            'document' => $dokuman,
            'title' => 'Edit Dokumen',
            'pageAction' => 'Edit Dokumen'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $dokuman)
    {
        //melakukan validasi
        $validated = $request->validate([
            'name' => 'required|max:225',
        ]);

        Document::where('id', $dokuman->id)->update($validated);
        //supaya dapat menggunakan flash ketika diredirect menggunakan javascript
        $request->session()->flash('success', 'data berhasil diubah'); 
        //respon menggunakan json
        return response()->json([$validated, 'success' => true]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $dokuman) //disebabkan karena saya kurang konsisten dalam menamai route, sehingga menyebabkan laravel secara otomatis mengibah dependency menjadi bentuk kata tunggal jika dalam bahasa route saya diubah
    {
        var_dump($dokuman->id);
        if($dokuman->source){
            Storage::delete('document-src/'.$dokuman->source);
        }

        Document::destroy($dokuman->id);

        return redirect('/admin/dokumen')->with('success', 'data telah berhasil dihapus');
    }

    public function download($fileName){
        return Storage::download('document-src/'.$fileName);
    }
}
