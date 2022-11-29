@extends('admin.layouts.main')

@section('container')
  <div class="flex justify-between flex-wrap xl:flex-nowrap gap-2 mb-7 mx-2"> <!-- tool bar-->
    <!-- untuk pencaria -->
    <x-admin.search-input-dropdown inputValue="{{ request('search') }}" >
      <select 
        id="category" 
        name="category" 
        class="sm:basis-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-5 focus-within:outline-0"
        >
        <option value="" selected>semua</option>
        <option value="berita" @selected(request('category') == 'berita')>berita</option>
        <option value="goverment" @selected(request('category') == 'goverment')>goverment</option>
        <option value="technology" @selected(request('category') == 'technology')>technology</option>
      </select>
    </x-admin.search-input-dropdown>

    <div class="mx-auto xl:mx-0"> <!-- untuk pagination -->
      {{ $news->links('vendor.pagination.admin-pagination')}}
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
      
      <!-- info data -->
      <span class="font-bold text-xl text-blue-kominfo">
      @if(request('category') && request('search'))
      {{ request('category') }} : {{ request('search') }}
      @elseif(request('category'))
      Jenis : {{ request('category') }}
      @elseif (request('search'))
      Hasil dari : {{ request('search') }}
      @else
        {{ $pageAction }}
      @endif
        <span class="text-blue-900 bg-blue-300 text-lg font-normal px-7 rounded-2xl">{{ $newsCount }} item</span>
      </span>
      <!-- info data -->

      <a href="/admin/berita/create" class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-2 px-8 rounded-md w-full sm:w-auto">
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
      <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="py-3 px-6">
                      #
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Thumbnail
                  </th>
                  <th scope="col" class="py-3 px-6 min-w-[20rem]">
                      Judul
                  </th>
                  <th scope="col" class="py-3 px-6">
                      tanggal
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Jenis
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
              @foreach ($news as $news)
                <tr class="border-b">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    {{ $loop->iteration }}
                  </th>
                  <td class="py-4 px-6 ">
                      {{-- <img class="w-24" src="../images/cliff.jpg" alt=""> --}}
                      @if (isset($news->image))
                        <img class="w-24" src="{{ Storage::exists($news->image )? asset('/storage/'.$news->image) : '../images/null-image.png' }}" alt="">
                      @else
                        <img class="w-24" src="/images/null-image.png" alt="null image">
                      @endif
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900">
                    {{$news->title}}
                  </td>
                  <td class="py-4 px-6 whitespace-nowrap">
                    @php
                    $date = date_create($news->create_date)
                    @endphp
                    {{ date_format($date, "j - F - o") }}
                  </td>
                  <td class="py-4 px-6">
                    @switch($news->category)
                        @case('berita')
                          <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Berita</span>
                            @break
                        @case('goverment')
                          <span class="bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Goverment</span>
                            @break
                        @case('technology')
                          <span class="bg-sky-200 rounded-full px-8 py-0.5 border border-sky-600 text-sky-900">Technology</span>
                          @break
                        @default
                          <span class="bg-gray-200 rounded-full px-8 py-0.5 border border-gray-600 text-gray-900">No Data</span>
                    @endswitch
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <button data-id="{{ $news->id }}" class="btn-delete btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                        </button>  
                
                      <!-- ini untuk icon edit -->
                      <a href="/admin/berita/{{ $news->id }}/edit" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
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
                      <button data-id="{{ $news->id }}" class="btn-detail btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
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
    
  <x-admin.modal-detail modelPath="berita" >
    <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-200 mx-5">
        <h3 class="text-xl font-semibold text-gray-900">
          <span class="fill-detail" data-key="title"></span>
        </h3>
        <h3 class="text-lg text-center font-semibold">
          <span class="fill-detail" data-key="created_at"></span>
        </h3>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-3">
        <div class="flex flex-wrap">
            <p class="text-base leading-relaxed font-semibold">
                Judul :
            </p>
            <p class="text-base leading-relaxed mx-2">
              <span class="fill-detail" data-key="title"></span>
            </p>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base leading-relaxed font-semibold">
                Slug :
            </p>
            <p class="text-base leading-relaxed mx-2">
              <span class="fill-detail" data-key="slug"></span>
            </p>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base leading-relaxed font-semibold">
                Kategori :
            </p>
            <span class="fill-detail" data-key="category"></span>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base leading-relaxed font-semibold">
                Tanggal Dibuat :
            </p>
            <p class="text-base leading-relaxed mx-2">
              <span class="fill-detail" data-key="created_at"></span>
            </p>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base  leading-relaxed font-semibold">
                Gambar :
            </p>
            <p class="text-base leading-relaxed mx-2 break-all">
              <span class="fill-detail" data-key="image" data-preview="true"></span>
            </p>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base  leading-relaxed font-semibold">
                Gambar-source :
            </p>
            <p class="text-base leading-relaxed mx-2 break-all">
              <span class="fill-detail" data-key="image"></span>
            </p>
        </div>
        <div class="flex flex-wrap">
            <p class="text-base  leading-relaxed font-semibold">
                Body :
            </p>
            <p class="text-base leading-relaxed mx-2 break-all">
              <span class="fill-detail" data-key="body"></span>
            </p>
        </div>
        <span class="fill-detail" data-key="author"></span>
    </div>
  </x-admin.modal-detail>
@endsection




  
