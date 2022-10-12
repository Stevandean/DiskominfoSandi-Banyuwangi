@extends('guest.layouts.main')

@section('container')
    <!-- Page Berita -->
    <div class="min-h-screen transition-all ease-in duration-500 ">
        <div class="container-berita container mx-auto columns-auto">
            <p class=" mx-auto text-2xl sm:text-4xl p-8 max-w-lg text-center">
                <span class="bg-white font-semibold px-2">
                    Berita terkini
                </span>
            </p>
            
            <!-- pencarian 🔍 -->
            <div class="container pb-10 px-5">
                <form class="" action="/berita">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative max-w-2xl mx-auto">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                        <input type="search" name="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:bg-white focus-within:outline-blue-500" placeholder="Cari Berita Menarik" >
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-[#595cff] to-[#54b8ff] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
                    </div>
                </form>
            </div>
            <!-- akhir pencarian -->

            <!-- section carrousell dan berita populer -->
            @if (session('search')  || session('search') == '')
            <div class=" flex flex-col lg:flex-row pb-10 gap-10 px-5 sm:px-10 2xl:px-20">
                <div class="md:basis-2/3 basis-full">
                    <div class="max-w-full lg:p-0 pb-10 mx-auto">
                        <div id="default-carousel" class="relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                @for ($i = 0; $i < 3; $i++)
                                    <a href="/berita/{{ $news[$i]->slug ?? "#" }}" class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <span class="z-20 absolute bottom-10 left-10 text-xl lg:text-2xl font-semibold text-white">{{ $news[$i]->title ?? "Title" }}</span>
                                        <div class="z-10 h-28  bg-gradient-to-t from-black opacity-50 absolute inset-x-0 bottom-0"></div>
                                        <div class="bg-white block absolute top-1/2 left-1/2 w-full min-h-full -translate-x-1/2 -translate-y-1/2">
                                            <img class="w-full" src="{{ Storage::exists($news[$i]->image ?? "null")? asset('/storage/'.$news[$i]->image) : '/images/null-image.png'  }}" class="" alt="...">
                                        </div>
                                    </a>
                                @endfor
                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>
                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    </div>
                </div>

                <!-- berita populer -->
                {{-- berita populer, walau sebenarnya ini hanyalah berita terbaru yg dijadikan seolah2 populer --}}
                <div class="md:basis-1/3 basis-full">
                    <div class="text-center text-[#f6ca29] font-bold text-2xl mx-auto mb-3">
                        <h1>Berita Populer</h1>
                    </div>
                    <div class=" rounded-lg md:h-64 xl:h-80 2xl:h-96 overflow-x-auto md:overflow-y-auto ">
                        <div class="h-fit wrapper">
                            <!-- berita --> 
                            <div class="flex flex-row md:flex-col divide-y-2">
                                @for ($i = 0; $i < 3; $i++)
                                <a href="/berita/{{ $news [$i] -> slug }}" class="flex gap-3 py-2 min-w-[20rem] max-w-xs md:max-w-full md:w-full">
                                    <img class="max-h-24 rounded max-w-[8rem]" src="{{ Storage::exists($news[$i]->image ?? "null")? asset('/storage/'.$news[$i]->image) : '/images/null-image.png'  }}" >
                                    <div class="h-full">
                                        <h1 class="font-semibold">{{ Str::limit(strip_tags($news[$i]->title ?? "Title"), 200, '...') }} </h1>
                                    </div>
                                </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endif

            <div class=" grid-cols-1 mb-6 p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 gap-y-8 items-start">

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





