@extends('admin.layouts.main')

@section('container')
  <!--data-->
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <span class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Tambah Galeri
      </span>
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
        <x-admin.input-select inputName="Tipe*" formName="type" info="test" >
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
        <p class="block mb-2 text-sm font-medium text-gray-900 ">Body</p>
        <input type="hidden" name="body" id="body">
        <trix-editor input="body"></trix-editor>
      </div>
      <div class="mb-6">
        <button class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-4 px-12 rounded-md w-full sm:w-auto">
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
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sumber</label>
      <input type="password" id="password" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus-within:ring-blue-500 focus-within:outline-blue-500 focus:border-blue-500 block w-full p-2.5 " required><!--border-red-600-->
      <!-- pesar error -->
      <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
      <!-- akhir pesar error -->
      `

      selector.addEventListener('change', function(e){
        if(this.value == "gambar"){
          source.setHidden(false)
          return;
        }else if(this.value == 'video'){
          source.setHidden(true)
          return
        }
      })
    </script>
    
@endpush


  
