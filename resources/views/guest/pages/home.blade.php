
  @extends('guest.layouts.main')

  @section('container')
    <!-- HOME Text -->
    <div class="bg-[url('/images/bg.png')]"></div>  
    <div style='width:0;height:0'>&nbsp;</div>
    {{-- ini hanya tes, jika gagal akan dihapus --}}
    {{-- tesnya berhasil, fungsi diatas digunakna supaya element parent tidak ikut terbawa saat melakukan margin oleh child --}}
    <div class="con relative">
      <div class="h-40">
        <span class="text1 "> DiskominfoSandi</span>
        <span class="text2">
          Banyuwangi
        </span>
      </div>
      <form class="px-5">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative max-w-2xl mx-auto">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </div>
            <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Berita Menarik" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-[#595cff] to-[#54b8ff] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
        </div>
      </form>
    </div>
    <!-- Page Berita -->
    <div class="con-berita bg-white columns-auto px-6">
      <h1 class="
        py-5
        text-black-600
        text-3xl
        text-center
        ">
        Berita Terkini
      </h1>

      {{-- flex untuk berita dan twitter --}}
      <div class="flex flex-col md:flex-col-reverse md:gap-2 justify-center pb-5">
        <div class="p-8 md:px-80 md:p-0">
          <div class="h-full  ">
            <div class="wrap w-full px-2  max-h-screen overflow-y-scroll">
              <a class="twitter-timeline" href="https://twitter.com/kominfosandibwi?ref_src=twsrc%5Etfw">Tweets by kominfosandibwi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- <a class="twitter-timeline" data-width="1000" data-height="700" data-theme="light" href="https://twitter.com/kominfosandibwi?ref_src=twsrc%5Etfw">Tweets by kominfosandibwi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->

          </div>
        </div>
        
        <div class="content-start p-5 grid grid-cols-1 lg:grid-cols-3 gap-4 gap-y-8 items-start">
          <!-- CARD 1 -->
          @foreach ($news as $new)
            <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
              {{-- <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" > --}}
              <img class="w-full" src="/images/img1.jpg" >
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $new->title }}</div>
                <p class="text-gray-700 text-base">
                  {{ Str::limit(strip_tags($new->body), 300, "...") }}
                </p>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $new->category }}</span>
              </div>
            </div>
          @endforeach
          <!-- END CARD -->
  
        </div>

        
      </div>

    </div>

<!-- ** AWAL PELAYANAN ** -->
<div class="p-4 px-5 pb-40 pt-20 bg-gray-100">
      <h1 class=" py-5 text-black-600 text-4xl font-semibold text-center col-start-2">
        Layanan
      </h1>

      <div class="flex flex-wrap justify-center gap-6 md:gap-6 xl:gap-8">

        <!-- card -->
        <a href="/layanan" class="relative group block p-6  max-w-sm bg-gradient-to-r from-[#ebf4f5] to-[#b5c6e0] hover:from-[#29323c] hover:to-[#485563] rounded-lg border border-gray-200 shadow-md hover:text-[#F6F6F6]">
          <div class="border rounded-full bg-sky-500 group-hover:bg-white inline-block p-3 absolute -top-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-white group-hover:fill-sky-500" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
          </div>
          <h5 class="mb-2 text-lg font-bold tracking-tight group-hover:text-[#F6F6F6]">Noteworthy technology acquisitions 2021</h5>
          <p class="font-normal text-gray-700 text-base group-hover:text-gray-300">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </a>
        <!-- end card -->

        <!-- card [jangan dihapus, untuk logo] -->
        <a href="/layanan" class="group block p-6  max-w-sm bg-gradient-to-r from-[#ebf4f5] to-[#b5c6e0] hover:from-[#29323c] hover:to-[#485563] rounded-lg border border-gray-200 shadow-md">
          <h5 class="mb-2 text-lg font-bold tracking-tight group-hover:text-[#F6F6F6] ">Lihat Selengkapnya</h5>
          <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="mx-auto w-12 mt-6 group-hover:fill-gray-300" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
          </svg>
        </a>
        <!-- end card -->
      </div>
    </div>
    <!-- ** AKHIR PELAYANAN ** -->

    <!-- ** AWAL LINK TERKAIT ** -->
    <div class="px-20 pb-40 pt-10 ">
      <h1 class="py-5 text-black-600 text-4xl font-semibold text-center col-start-2">
        Link terkait
      </h1>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

        <!-- card -->
        <a href"http://sikd.banyuwangikab.go.id/" class="relative group block mx-auto p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md bg-gradient-to-r from-[#ebf4f5] to-[#b5c6e0] hover:from-[#29323c] hover:to-[#485563]">
          <div class="flex">
            <p class="text-center font-semibold text-lg text-gray-700 group-hover:text-[#F6F6F6] ">Sistem Informasi Keuangan Daerah.</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 flex-none group-hover:fill-sky-600" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg>
          </div>
        </a>
        <!-- end card -->
        
      </div>
    </div>
    <!-- ** AKHIR LINK TERKAIT ** -->  
    @endsection


  


