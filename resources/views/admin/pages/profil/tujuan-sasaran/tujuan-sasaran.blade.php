@extends('admin.layouts.main')

@section('container')

  {{-- alert --}}
  @if (session()->has('success'))
  <x-admin.alert type="success" msg="{{ session('success') }}"/>
  @endif
  @if (session()->has('error'))
  <x-admin.alert type="error" msg="{{ session('error') }}"/>
  @endif
  @if (session()->has('default'))
  <x-admin.alert type="default" msg="{{ session('default') }}"/>
  @endif

  <!--data-->
  <div class="shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
        <span class="font-bold text-xl text-blue-kominfo">Visi Misi</span>
      <a href="/admin/profil/tujuan-sasaran/edit" class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-2 px-8 rounded-md w-full sm:w-auto">
        <div class="flex items-center justify-center h-full table-fixed">
            <svg
            class="fill-white mr-2"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
            <g id="surface125014719">
            <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
            <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
            </g>
          </svg>
          Edit
        </div>
      </a>
    </div>
    <hr>
    <div class="overflow-x-auto relative">
        <div class="pair p-3 mb-3">
            <h3 class="font-bold mb-2">Tujuan</h3>
            <p class="bg-blue-100 p-2 rounded-md">{{ $tujuan }}</p>
        </div>
        <div class="pair p-3 mb-3">
            <h3 class="font-bold mb-2">Sasaran</h3>
            <p class="bg-blue-100 p-2 rounded-md">{{ $sasaran }}</p>
        </div>
    </div>
  </div>
@endsection
