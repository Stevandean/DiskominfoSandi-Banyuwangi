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
    <form class="p-5" action="/admin/galeri" method="post">
      @csrf
      @error('title')
        {{ $message }}
      @endError
      <div class="mb-6">
        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
        <input type="text" id="judul" name="title" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus-within:ring-blue-500 focus-within:outline-blue-500 focus:border-blue-500 block w-full p-2.5 " >
        <!-- pesar error -->
        <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
        <!-- akhir pesar error -->
      </div>
      <div class="mb-6">
        <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Tipe*</label>
        <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          <option value="image" selected>Gambar</option>
          <option value="video">Video</option>
        </select>
        <p class="mt-1 text-sm text-gray-500 ">pilih antara gambar dan video, bila video hrus menggunakan upload tersendiri</p>
      </div>
      <div class="mb-6">
        <label for="source" class="block mb-2 text-sm font-medium text-gray-900">Source</label>
        <input type="text" name="source" id="source" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus-within:ring-blue-500 focus-within:outline-blue-500 focus:border-blue-500 block w-full p-2.5 ">
      </div>
      
      <div class="mb-6">
        <p class="block mb-2 text-sm font-medium text-gray-900 ">Body</p>
        <input type="hidden" name="body" id="body">
        <trix-editor input="body"></trix-editor>
      </div>
      <div class="mb-6">
        <button type="submit" class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-4 px-12 rounded-md w-full sm:w-auto">
          <div class="flex items-center justify-center h-full table-fixed">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
              </svg>
            Tambah
          </div>
        </button>
      </div>
    </form>
  </div>
@endsection

@push('add-script')
    <script>

      //-------- untuk perubahan tipe galeri ------
      let selector = document.querySelector('#type');

      let sourceElement = 
      `
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Sumber</label>
      <input type="password" id="password" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus-within:ring-blue-500 focus-within:outline-blue-500 focus:border-blue-500 block w-full p-2.5 " required><!--border-red-600-->
      <!-- pesar error -->
      <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
      <!-- akhir pesar error -->
      `

      selector.addEventListener('change', function(e){
        if(this.value == "gambar"){
          source.setHidden(false)
          return;
        }else if(this.value == 'video'){
          // wrapper.innerHTML = sourceElement;
          source.setHidden(true)
          return
        }
      })
    </script>
    
@endpush


  
