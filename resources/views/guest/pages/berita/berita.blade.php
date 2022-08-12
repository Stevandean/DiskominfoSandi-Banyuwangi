@extends('guest.layouts.main')

@section('container')
    <!-- Page Berita -->
    <div class="min-h-screen transition-all ease-in duration-500 ">
        <!-- gambar untuk latar belakang -->
        <!-- <img src="/images/gajah-oling.svg" alt="gambar gajah" srcset=""
            class="absolute right-0 -top-2 md:-top-20 lg:-top-[200px] -z-10 opacity-50 w-3/5"> -->
        <div class="container-berita container mx-auto columns-auto">
            <p class=" mx-auto text-4xl p-8 max-w-lg text-center">
                <span class="bg-white font-semibold px-2">
                    Berita terkini
                </span>
            </p>
            
            <!-- pencarian 🔍 -->
            <div class="container pb-10 ">
                <form action="/berita" class="flex items-center max-w-xl mx-auto">   
                    <!-- <select id="cateory" name="category" class="block p-2.5 basis-5/12 mr-1 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:outline-blue-500 focus:border-blue-500 ">
                        <option value="" selected>pilih kategory</option>
                        <option value="goverment">Goverment</option>
                        <option value="tecnology">Teknologi</option>
                        <option value="berita">Berita</option>
                    </select> -->
                    
                    <!-- <div class="relative w-full">
                        <input type="text" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-blue-500 focus-within:border-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                            placeholder="Cari Berita Menarik">
                            <button type="submit" class="inline">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                    </div> -->
                    <div class="relative mx-auto text-gray-600 w-full">
                        <input class="border-2 border-gray-300 bg-white h-10 rounded-full px-3 text-sm focus:outline-none w-full" type="text" name="search" id="simple-search"  placeholder="Cari Berita Menarik">
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve"
                                width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <!-- akhir pencarian -->

            <div class=" grid-cols-2 mb-6 p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 gap-y-8 items-start">

                {{-- <!-- CARD 1 -->
                <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
                    <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bersama Warga Desa, Bupati Ipuk Gelar Haul Bung Karno</div>
                    </div>
                </div> --}}

                @foreach ($news as $item)
                    <!-- CARD -->
                    <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto bg-white">
                        <img class="w-full" src="/images/img1.jpg" >
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $item->title }}</div>
                        </div>
                        <p class="px-6 font-medium">{{ Str::limit(strip_tags($item->body), 200, '...') }}</p>
                        <a href="/berita/{{ $item->slug }}" class="inline-block mx-6 mt-2 mb-4 font font-normal hover:font-medium rounded-full text-sky-700">Lihat selengkapnya...</a>
                    </div>
                @endforeach
            </div>

            <!-- pagination -->
            <!-- <div class="mx-auto mx-4">
                <nav aria-label="Page navigation example">
                    <ul class="flex justify-center -space-x-px">
                    <li>
                        <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                    </ul>
                </nav>
  
            </div> -->
            <div class="mx-auto p-5 max-w-6xl">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection





