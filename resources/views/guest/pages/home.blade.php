
  @extends('guest.layouts.main')
  {{-- @dd() --}}
  @section('container')
    <!-- HOME Text -->
    <div class="bg-[url('/images/bg.png')]"></div>  
    <div style='width:0;height:0'>&nbsp;</div>
    {{-- ini hanya tes, jika gagal akan dihapus --}}
    {{-- tesnya berhasil, fungsi diatas digunakna supaya element parent tidak ikut terbawa saat melakukan margin oleh child --}}
    <div class="con relative">
      <div class="h-40">
        <span class="text1 "> Dinas Kominfo</span>
        <span class="text2">
          Banyuwangi
        </span>
      </div>
      <form class="px-5" action="/berita">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative max-w-2xl mx-auto">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </div>
            <input type="search" id="default-search" name="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus-within:outline-blue-500" placeholder="Cari Berita Menarik" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-[#595cff] to-[#54b8ff] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
        </div>
      </form>
    </div>

        <!-- Carousels Layanan -->

    <div class=" px-5 pb-5 bg-white min-w-screen">
      <h1 class=" py-5 text-black-600 text-4xl font-semibold text-center col-start-2">
        Semua Layanan
      </h1>

      <!-- COBA MULTI SLIDER 2 -->
      <div class="flex justify-center">

        <!-- Slider controls -->
        <button class="p-5 self-center" id="prev-button" onclick="prev()">   
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>

        <div class="flex  md:p-5 gap-x-5 w-[72%] overflow-hidden cursor-pointer scroll-smooth" id="cardContainer">

        <!-- Content -->
        @foreach ($services as $service)
          <!-- Awal Content -->
          <a href="{{ $service->link }}" class="bg-white h-64 max-w-[200px] min-w-[200px] px-5 py-5 rounded-lg drop-shadow-xl">
            <div class="w-20 h-20 mb-3 bg-cover mx-auto">
              {{-- <img src="images/avatar.svg"> --}}
              <div class="max-h-full max-w-full">
                <img class="h-20 mx-auto" src="{{ Storage::exists($service->icon ?? "null")? asset('/storage/'.$service->icon) : 'images/avatar.svg'   }}">
              </div>
            </div>
            <h2 class="text-center text-xl font-bold text-md">
              {{ Str::limit($service->name, 50, "...") }}
            </h2>
            <div class="border-b-2 border-gray-200 my-3"></div>
            <p class="text-sm leading-tight text-center mb-5"> 
              {{ Str::limit($service->description, 50, "...") }}
            </p>
          </a>
          <!-- Akhir Content -->
        @endforeach
          
        </div>

        <!-- Slider controls -->
        <button class="p-5 self-center" id="next-button" onclick="next()">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>

      </div>

      
    </div>

    <!-- ** AKHIR PELAYANAN ** -->

    <!-- Page Berita -->
    <div class="con-berita bg-white columns-auto px-6">
      <h1 class=" py-10 text-black-600 text-3xl text-center ">
        Berita Terkini
      </h1>

      {{-- flex untuk berita dan twitter --}}
      <div class="flex flex-col md:flex-col-reverse md:gap-2 justify-center pb-5 ">
        <div class="p-8 md:px-80 md:p-0">
          <div class="h-full  ">
            <div class="wrap w-full px-2  max-h-screen overflow-y-scroll mb-9">
              <a class="twitter-timeline" href="https://twitter.com/kominfosandibwi?ref_src=twsrc%5Etfw">Tweets by kominfosandibwi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- <a class="twitter-timeline" data-width="1000" data-height="700" data-theme="light" href="https://twitter.com/kominfosandibwi?ref_src=twsrc%5Etfw">Tweets by kominfosandibwi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->

          </div>
        </div>
        
        <div class="content-start p-5 p-0 py-5 grid grid-cols-1 lg:grid-cols-3 gap-4 gap-y-8 items-start">
          <!-- CARD 1 -->
          @foreach ($news as $new)
            <a href="/berita/{{ $new->slug ?? "#" /*(isset($new->slug)? "/berita/ $new->slug " : isset($new->link)) ? $new->link : '#' */ }}" class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
              {{-- <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" > --}}
              <img class="mx-auto max-h-64" src="{{ Storage::exists($new->image ?? "null")? asset('/storage/'.$new->image) : '/images/null-image.png'  }}" >
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $new->title }}</div>
                <p class="text-gray-700 text-base">
                  {{ Str::limit(strip_tags($new->body ?? "error"), 300, "...") }}
                </p>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $new->category ?? "error" }}</span>
              </div>
            </a>
          @endforeach
          <!-- END CARD -->
          <!-- CARD 2 -->
          @foreach ($scraps as $scrap)
            <a href="https://banyuwangikab.go.id/berita/{{ $scrap->slug }}" class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
              <!-- {{-- <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" > --}} -->
              <img class="w-full max-h-64" src="https://banyuwangikab.go.id/media/berita/original/{{ $scrap->img_raw }}" onerror="this.src='/images/null-image.png'" >
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $scrap->title }}</div>
                <p class="text-gray-700 text-base">
                  {!! Str::limit(strip_tags($scrap->content ?? "error"), 300, "...") !!}
                </p>
              </div>
            </a>
          @endforeach
          <!-- END CARD -->
  
        </div>

        
      </div>

    </div>

  @endsection


@push('script-end')

<script>
  let pagination = 0;
  let itemShowCOntainer = 0;
  let cardContainer = document.querySelector ('#cardContainer')
  

  function next() {
    if(pagination < {{ $service->count() }} - itemShowCOntainer){
      pagination ++;
    }
    cardContainer.scroll (220 * pagination, 0)
  }

  function prev () {
    if (pagination > 0) {
      pagination --; 
    }
    cardContainer.scroll (220 * pagination, 0)
  }

  function getFixScrollStep(){
    let containerServiceLength = cardContainer.offsetWidth;
    itemShowCOntainer = Math.floor(containerServiceLength / 256);
  }
  getFixScrollStep()

  window.onresize = getFixScrollStep

  windo
</script>

@endpush