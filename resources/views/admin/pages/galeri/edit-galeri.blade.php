@extends('admin.layouts.main')

@section('container')
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <a href="/admin/galeri" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Edit {{ $galery->title }}
      </a>
    </div>
    <hr>
    <form class="p-5" action="/admin/galeri/{{ $galery->id }}" method="post">
      @method('put')
      @csrf
      <div class="mb-6">
        
        <!--title galery-->
        <x-admin.input inputName="Title" formName="title" inputValue="{{ $galery->title }}"  />
        <!-- pesar error -->
        <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
        <!-- akhir pesar error -->
      </div>
      <div class="mb-6">
        <!--title galery-->
        <!-- pesar error -->
        <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
        <!-- akhir pesar error -->
      </div>
      <div class="mb-6">
        <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Tipe*</label>
        <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" inputValue="{{ $galery->source }}">
          <option value="image">Gambar</option>
          <option value="video">Video</option>
        </select>
        <p class="mt-1 text-sm text-gray-500 ">pilih antara gambar dan video, bila video hrus menggunakan upload tersendiri</p>
      </div>
      <!-- <div id="wrp" class="mb-6"> -->
        <!--upload file / sumber-->
        <!-- <div class="mb-6"> -->
          <!--upload file-->
          <!-- <p class="block mb-2 text-sm font-medium text-gray-900 ">File</p>
          <div class="flex justify-center items-center w-full">
            <label id="drop-area" for="dropzone-file" class=" relative flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer after:absolute  after:inset-0 after:opacity-40">
              <div class="relative flex flex-col justify-center items-center pt-5 pb-6">
                <div id="action-desc">
                  <svg aria-hidden="true" class=" mx-auto mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                  <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 text-center">only PDF (.pdf)</p>
                </div>
                <p class="file-info hidden mb-2 text-sm text-gray-500"><span class="font-semibold">hayoo</span></p>
              </div>
              <input id="dropzone-file" type="file" class="hidden" />
            </label>
          </div> -->
          <!-- pesar error -->
          <!-- <p id="err-upload" class="hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- akhir pesar error -->
        <!-- </div> 
      </div> -->
      <div class="mb-6">
        <x-admin.input inputName="Source" formName="source" inputValue="{{ $galery->source }}"  />
      </div>
      <div class="mb-6">
        <p class="block mb-2 text-sm font-medium text-gray-900 ">Body</p>
        <input Value="{{ $galery->body }}" type="hidden" name="body" id="body">
        <trix-editor input="body"></trix-editor>
      </div>
      <div class="mb-6">
        <button class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-4 px-12 rounded-md w-full sm:w-auto" type="submit">
          <div class="flex items-center justify-center h-full table-fixed">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
              </svg>
            edit
          </div>
        </button>
      </div>
    </form>
  </div>
@endsection