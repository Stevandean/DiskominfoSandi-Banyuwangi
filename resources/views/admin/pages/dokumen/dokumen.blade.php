@extends('admin.layouts.main')

@section('container')
  <div class="flex justify-between flex-wrap xl:flex-nowrap mx-2 sm:mx-0 gap-2 mb-7"> <!-- tool bar-->
    <x-admin.search-input inputValue="{{ request('search') }}" />
    <div class="mx-auto xl:mx-0"> <!-- untuk pagination -->
      {{ $documents->links('vendor.pagination.admin-pagination') }}
    </div>
  </div><!--akhir toolbar-->

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
      @if (request('search'))
      <span class="font-bold text-xl text-blue-kominfo">Hasil dari : {{ request('search') }}
      @else
      <span class="font-bold text-xl text-blue-kominfo">{{ $pageAction }}
      @endif
        <span class="text-blue-900 bg-blue-300 text-lg font-normal px-7 rounded-2xl">{{ $documentCount }} item</span>
      </span>
      <a href="/admin/dokumen/create" class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-2 px-8 rounded-md w-full sm:w-auto">
        <div class="flex items-center justify-center h-full table-fixed">
          <svg 
            class="inline"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
          </svg> 
          Tambah
        </div>
      </a>
    </div>
    <hr>
    <div class="overflow-x-auto relative">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="py-3 px-6">
                      #
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Nama
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Source
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Tanggal
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Download
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr class=" border-b ">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                      1
                  </th>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                      Dokumen Supersemar
                  </td>
                  <td class="py-4 px-6">
                      rahasia_negara.pdf
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-sky-200 hover:bg-sky-300 rounded-full px-8 py-0.5 border border-sky-600 text-blue-900 hover:cursor-pointer">Download</span>
                  </td>
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
              @foreach ($documents as $document)
              <tr class=" border-b ">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $loop->iteration }}
                </th>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $document->name }}
                </td>
                <td class="py-4 px-6">
                    {{ Str::limit($document->source, 20, '...') }}
                </td>
                <td class="py-4 px-6">
                  @php
                    $date = date_create($document->create_date)
                  @endphp
                  {{ date_format($date, "j - F - o") }}
                </td>
                <td class="py-4 px-6">
                  <a href="dokumen/download/{{ $document->source }}" class="bg-sky-200 hover:bg-sky-300 rounded-full px-8 py-0.5 border border-sky-600 text-blue-900 hover:cursor-pointer">Download</a>
                </td>
                <td class="py-4 px-6">
                  <div class="inline-flex">
                    <!-- delete -->
                    <button class="btn-delete btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all" data-id="{{ $document->id }}">
                      <svg 
                        class=" fill-red-700 "
                        fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                        </svg>
                      </button>  
              
                    <!-- ini untuk icon edit -->
                    <a href="/admin/dokumen/{{ $document->id }}/edit" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                      <svg
                        class="fill-amber-700"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                        <g id="surface125014719">
                        <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                        <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                        </g>
                      </svg>
                    </a> 
                    
                    <!-- ini untuk icon views -->
                    <button class="btn-detail btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all" data-id="{{ $document->id }}">
                      <svg 
                        class="stroke-green-700 "
                        height="20px" width="20px"
                        viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle class="fill-green-700" cx="40" cy="35" r="16" />
                      </svg>
                    </button> 
                  </div>
                </td>
            </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>

  <x-admin.modal-detail modelPath="dokumen" >
    <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-200 mx-5">
        <h3 class="text-xl font-semibold text-gray-900">
            Dokumen Terbaru
        </h3>
        <h3 class="text-lg text-center font-semibold">
            19 - July - 2022
        </h3>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-3">
        <div class="flex">
            <p class="text-base leading-relaxed font-semibold">
                Nama :
            </p>
            <p class="text-base leading-relaxed mx-2">
                <fill_name></fill_name>
            </p>
        </div>
        <div class="flex">
            <p class="text-base leading-relaxed font-semibold">
                Tanggal Dibuat :
            </p>
            <p class="text-base leading-relaxed mx-2">
              <fill_created_at></fill_created_at>
            </p>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base  leading-relaxed font-semibold">
                Source :
            </p>
            <p class="text-base leading-relaxed mx-2 break-all">
              <fill_source></fill_source>
            </p>
        </div>
    </div>
  </x-admin.modal-detail>
@endsection


@push('add-script')
    
@endpush
