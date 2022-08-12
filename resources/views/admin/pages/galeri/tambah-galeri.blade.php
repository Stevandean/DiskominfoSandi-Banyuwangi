@extends('admin.layouts.main')

@section('container')
  <!--data-->
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <a href="/admin/galeri" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Tambah Galeri
      </a>
    </div>
    <hr>
    <form class="p-5" action="/admin/dokumen" method="post">
      <div class="mb-6">
        <x-admin.input inputName="Judul" formName="title" />
      </div>
      <div class="mb-6"><!--password-->
        <x-admin.input inputName="Slug" formName="slug" />
      </div>
      <div class="mb-6">
        <x-admin.input-select inputName="Tipe" formName="type" info="test" >
          <option value="gambar" selected>Gambar</option>
          <option value="video">Video</option>
        </x-admin.input-select>
      </div>
      <div class="mb-6">
        <x-admin.input inputName="Source" formName="source" />
      </div>
      <div id="wrp" class="mb-6">
        <x-admin.input-upload type="image" inputName="File Gambar" formName="source" :isReadOnly=false :isError=false >
          hanya file gambar, untuk video bisa dimasukan kedalam input text
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.body-editor inputName="Body" formName="body" />
      </div>
      <div class="mb-6">
        <x-admin.form-button :isAjax=true>
          tambah
        </x-admin.form-button>
      </div>
    </form>
  </div>
@endsection

@push('upload-script')
    <script>

      //-------- untuk perubahan tipe galeri ------
      if(tipe.input)
    </script>
    
@endpush


  
