<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Profile_Pejabat;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class DashboardProfilePejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profilePejabats = Profile_Pejabat::latest()->paginate(10);
        return view('admin.pages.profil.profil-pejabat.profil-pejabat',[
            'title' => "profile pejabat",
            'pageAction' => "daftar profil pejabat",
            'profilePejabats' => $profilePejabats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profil.profil-pejabat.tambah-profil-pejabat',[
            'title' => 'tambah profil pejabat',
            'pageAction' => 'text action'
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
        $validated = $request->validate([
            'name' => 'required|max:100',
            'image' => 'nullable|image|max:10000', //max 10 mb
            'profile_pdf' => 'required|mimes:pdf|max:20000', //max 20 mb
            'source_lkhpn' => "required|mimes:pdf|max:20000" //max 20 mb
        ]);

        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('profile-src/profile-pejabar-src/image-src');
        }
        if($request->hasFile('profile_pdf')){
            $validated['profile_pdf'] = $request->file('profile_pdf')->store('profile-src/profile-pejabar-src/profile_pdf-src');
        }
        if($request->hasFile('source_lkhpn')){
            $validated['source_lkhpn'] = $request->file('source_lkhpn')->store('profile-src/profile-pejabar-src/source_lkhpn-src');
        }

        Profile_Pejabat::create($validated);
        $request->session()->flash('success', 'data berhasil ditambah');
        return response()->json([$validated, 'success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile_Pejabat $profil_pejabat)
    {
        return view("admin.pages.profil.profil-pejabat.edit-profil-pejabat",[
            'title' => "Edit ".$profil_pejabat->id,
            'pageAction' => "Edit action",
            'profilPejabat' => $profil_pejabat

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile_Pejabat $profil_pejabat)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'image' => 'nullable|image|max:10000',              //max 10 mb
            'profile_pdf' => 'nullable|mimes:pdf|max:20000',    //max 20 mb
            'source_lkhpn' => "nullable|mimes:pdf|max:20000"    //max 20 mb
        ]);

        if($request->hasFile('image')){
            Storage::delete($profil_pejabat->image);
            $validated['image'] = $request->file('image')->store('profile-src/profile-pejabar-src/image-src');

        }
        if($request->hasFile('profile_pdf')){
            Storage::delete($profil_pejabat->profile_pdf);
            $validated['profile_pdf'] = $request->file('profile_pdf')->store('profile-src/profile-pejabar-src/profile_pdf-src');
        }
        if($request->hasFile('source_lkhpn')){
            Storage::delete($profil_pejabat->source_lkhpn);
            $validated['source_lkhpn'] = $request->file('source_lkhpn')->store('profile-src/profile-pejabar-src/source_lkhpn-src');
        }

        Profile_Pejabat::where('id', $profil_pejabat->id)->update($validated);
        $request->session()->flash('success', 'data berhasil diupdate');
        return response()->json([$validated, 'success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile_Pejabat $profil_pejabat)
    {
        if($profil_pejabat->source_lkhpn){
            Storage::delete($profil_pejabat->source_lkhpn);
        }

        if ($profil_pejabat->profile_pdf){
            Storage::delete($profil_pejabat->profile_pdf);
        }

        Profile_Pejabat::destroy($profil_pejabat->id);

        return redirect('/admin/profil/profil-pejabat')->with('success', 'data telah berhasil dihapus');
    }

    public function downloadLKHPN(Profile_Pejabat $profil_pejabat){
        return Storage::download($profil_pejabat->source_lkhpn, $profil_pejabat->name."_LKHPN.pdf");
    }
}
