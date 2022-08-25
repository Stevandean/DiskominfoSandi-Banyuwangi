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
          edit {{ $layanan -> name }}
      </span>
    </div>
    <hr>
    <form class="p-5" action="/admin/layanan/{{ $layanan ->id }}" method="post">
      @method ('put')
      @csrf
      <div class="mb-6">
        <!--title layanan-->
        <x-admin.input inputName="name" formName="name" inputValue="{{ $layanan->name }}"  />
        <!-- pesar error -->
        <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
        <!-- akhir pesar error -->
      </div>
      <div class="mb-6">
        <!--deskripsi Layanan-->
        <x-admin.input inputName="description" formName="description" inputValue="{{ $layanan->description }}"  />
        <!-- pesar error -->
        <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
        <!-- akhir pesar error -->
      </div>
      <div class="mb-6">
        <!--deskripsi Layanan-->
        <x-admin.input inputName="link" formName="link" inputValue="{{ $layanan->link }}"  />
        <!-- pesar error -->
        <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span> Some error message.</p>
        <!-- akhir pesar error -->
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



  
