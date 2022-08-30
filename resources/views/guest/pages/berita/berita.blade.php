@extends('guest.layouts.main')

@section('container')
    <!-- Page Berita -->
    <div class="min-h-screen transition-all ease-in duration-500 ">
        <div class="container-berita container mx-auto columns-auto">
            <p class=" mx-auto text-4xl p-8 max-w-lg text-center">
                <span class="bg-white font-semibold px-2">
                    Berita terkini
                </span>
            </p>
            
            <!-- pencarian 🔍 -->
            <div class="container pb-10 px-5">
                <form class="px-5" action="/berita">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative max-w-2xl mx-auto">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                        <input type="search" name="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Berita Menarik" >
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-[#595cff] to-[#54b8ff] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
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
                        <img class="w-full" src="{{ Storage::exists($item->image ?? "null")? asset('/storage/'.$item->image) : '/images/null-image.png'  }}" >
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $item->title }}</div>
                        </div>
                        <p class="px-6 font-medium">{{ Str::limit(strip_tags($item->body), 200, '...') }}</p>
                        <a href="/berita/{{ $item->slug }}" class="inline-block mx-6 mt-2 mb-4 font font-normal hover:font-medium rounded-full text-sky-700">Lihat selengkapnya...</a>
                    </div>
                @endforeach
            </div>
            <div class="mx-auto p-5 max-w-6xl">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection





