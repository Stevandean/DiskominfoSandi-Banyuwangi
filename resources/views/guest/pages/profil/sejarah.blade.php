@extends('guest.layouts.main')

@section ('container')

    <div class="px-4 pb-8">
        <div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold py-10 ">
            Sejarah Dinas Kominfo Banyuwangi
        </div>
        <div class="w-3/4 m-auto">

            <div class="flex flex-col 2xl:flex-row gap-x-7">
                
                <!-- INI UNTUK CAROUSEL -->
                <div class="basis-2/5 w-full mb-5 2xl:mb-0">



                    <div id="default-carousel" class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative h-44 md:h-60 2xl:h-72 rounded-lg w-full md:w-2/3 2xl:w-full mx-auto">
                            <div  class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="z-20 absolute bottom-10 left-10 text-xl lg:text-2xl font-semibold text-white">Ini Title</span>
                                <div class="z-10 h-28  bg-gradient-to-t from-black opacity-50 absolute inset-x-0 bottom-0"></div>
                                <div class="bg-white block absolute top-1/2 left-1/2 w-full min-h-full -translate-x-1/2 -translate-y-1/2">
                                    <img class="w-full h-full" src="{{ Storage::exists($imgSejarah1)? asset('/storage/'.$imgSejarah1) : '/images/null-image.png' }}" alt="">
                                </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="z-20 absolute bottom-10 left-10 text-xl lg:text-2xl font-semibold text-white">Ini Title</span>
                                <div class="z-10 h-28  bg-gradient-to-t from-black opacity-50 absolute inset-x-0 bottom-0"></div>
                                <div class="bg-white block absolute top-1/2 left-1/2 w-full min-h-full -translate-x-1/2 -translate-y-1/2">
                                    <img class="w-full h-full" src="{{ Storage::exists($imgSejarah2)? asset('/storage/'.$imgSejarah2) : '/images/null-image.png' }}" alt="">
                                </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="z-20 absolute bottom-10 left-10 text-xl lg:text-2xl font-semibold text-white">Ini Title</span>
                                <div class="z-10 h-28  bg-gradient-to-t from-black opacity-50 absolute inset-x-0 bottom-0"></div>
                                <div class="bg-white block absolute top-1/2 left-1/2 w-full min-h-full -translate-x-1/2 -translate-y-1/2">
                                    <img class="w-full h-full" src="{{ Storage::exists($imgSejarah3)? asset('/storage/'.$imgSejarah3) : '/images/null-image.png' }}" alt="">
                                </div>
                            </div>
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



                    <!-- <img class="h-44 md:h-60 2xl:h-full mx-auto" src="/images/3554-IMG-20170303-WA0004.jpg" alt=""> -->
                </div>

                <div class="basis-3/5 w-full h-full">
                    <p class="pb-5">
                        Pada mulanya sejak tahun 2011, urusan pemerintahan di bidang komunikasi dan Informatika di lingkungan Pemerintah Kabupaten Banyuwangi dilaksanakan oleh Dinas Perhubungan, Komunikasi dan Informatika Kabupaten Banyuwangi sampai dengan tahun 2016.
                    </p>
                    <p class="pb-5">
                        Seiring waktu terjadilah dinamika perubahan perangkat daerah di Kabupaten Banyuwangi, pada tahun 2016 dibentuklah Dinas Komunikasi Informatika dan Persandian Kabupaten Banyuwangi dengan Peraturan Daerah Kabupaten Banyuwangi (Perda) nomor 8 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Banyuwangi.
                    </p>
                    <p class="pb-5">
                        Sebagai peraturan pelaksanaan dari perda tersebut, Bupati Banyuwangi lalu menerbitkan Peraturan Bupati Banyuwangi (Perbup) nomor 49 Tahun 2016 tentang Kedudukan Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Komunikasi, Informatika dan Persandian Kabupaten Banyuwangi yang ditandatangani pada tanggal 30 Oktober 2016.
                    </p>
                </div>
                
            </div>
            <div class="">
                <p>
                    {!! $sejarahBody  !!}
                </p>
            </div>

        </div>
    </div>

@endsection