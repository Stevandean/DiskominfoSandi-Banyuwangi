{{-- @dd($news) --}}
@extends('guest.layouts.main')

@section('container')
    <!-- Page Berita -->
    <div class="min-h-screen relative overflow-hidden transition-all ease-in duration-500">
        <!-- gambar untuk latar belakang -->
        <img src="/images/gajah-oling.svg" alt="gambar gajah" srcset=""
            class="absolute bottom-[18%] right-[5%] md:bottom-[21%] lg:bottom-0 md:-right-[20%] -z-10 opacity-50 w-full md:w-3/5"
        >
        <div class="container mx-auto px-12 md:px-32 lg:px-52  xl:px-80 py-10">

            <div class="header mb-3">
                <h1 class="text-4xl font-semibold mb-3">{{ $news->title }}</h1>
                @php
                    //membuat object tanggal
                    $date = date_create($news->date)
                @endphp
                <p class="font-light mb-2" >
                    at <span class="font-medium">{{  date_format($date, "j - F - o")  }}</span>
                </p>
                <a href="https://www.facebook.com/Diskominfo-Banyuwangi-106801383996172" type="button" class="rounded-full border-2 bg-blue-800 text-white leading-normal uppercase hover:bg-blue-700  focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 ">
                    <svg aria-hidden="true" class="w-2 h-full mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                      fill="currentColor"
                      d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                    ></path>
                    </svg>
                </a>
                <a href="https://twitter.com/kominfosandibwi" type="button" class="rounded-full border-2 bg-sky-400 text-white leading-normal uppercase hover:bg-sky-500  focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 ">
                    <svg aria-hidden="true" class="w-3 h-full mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            fill="currentColor"
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                        ></path>
                        </svg>
                </a>
                <a href="https://www.instagram.com/kominfobanyuwangi/" type="button" class="rounded-full border-2 bg-pink-600 text-white leading-normal uppercase hover:bg-pink-700  focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 ">
                    <svg 
                    class="w-3 h-full mx-auto"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                    >
                    <path
                        fill="currentColor"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                    ></path>
                    </svg>
                </a>
            </div>
              
            <!-- ukuran gambar  --> 
            <img class="max-w-full max-h-[420px] mx-auto mb-4 rounded-lg" src="/images/img1.jpg" alt="" srcset="">
            {{-- <div class="w-full h-72 bg-center" style="background-image: url(/images/img1.jpg)"></div> --}}
            <div class="max-w-3xl mx-auto mb-5"> <!--wrapper untuk text body -->
                 {!! $news->body !!}
            </div>

            <hr class="my-5">

            <h1 class="text-2xl font-semibold mb-3">Berita lainya</h1>
            <div class="flex flex-wrap gap-2"><!-- wrapper untuk card berita lainya -->
            
                <a href="#" class=" flex items-center bg-white rounded-lg border shadow-md flex-col md:flex-row max-w-full hover:scale-105 hover:bg-gray-100 ">
                    {{-- <img class="object-cover h-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/images/img1.jpg" alt=""> --}}
                    <div class="h-32 lg:basis-1/3 md:h-full shrink w-full bg-[url('/images/img1.jpg')] rounded-t-lg md:rounded-l-lg bg-center bg-cover"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#" class=" flex items-center bg-white rounded-lg border shadow-md flex-col md:flex-row max-w-full hover:scale-105 hover:bg-gray-100 ">
                    {{-- <img class="object-cover h-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/images/img1.jpg" alt=""> --}}
                    <div class="h-32 lg:basis-1/3 md:h-full shrink w-full bg-[url('/images/img1.jpg')] rounded-t-lg md:rounded-l-lg bg-center bg-cover"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#" class=" flex items-center bg-white rounded-lg border shadow-md flex-col md:flex-row max-w-full hover:scale-105 hover:bg-gray-100 ">
                    {{-- <img class="object-cover h-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/images/img1.jpg" alt=""> --}}
                    <div class="h-32 lg:basis-1/3 md:h-full shrink w-full bg-[url('/images/img1.jpg')] rounded-t-lg md:rounded-l-lg bg-center bg-cover"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                
            </div>
            <div class="wrapper mt-5 font-bold">
                <a href="/berita" class="mx-auto inline-block p-3  ">
                    < Kembali Ke Beranda Berita
                </a>
            </div>
        </div>
    </div>
@endsection





