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
                            <div>
                                <span class="z-20 absolute bottom-10 left-10 text-xl lg:text-2xl font-semibold text-white">Ini Title</span>
                                <div class="z-10 h-28  bg-gradient-to-t from-black opacity-50 absolute inset-x-0 bottom-0"></div>
                                <div class="bg-white block absolute top-1/2 left-1/2 w-full min-h-full -translate-x-1/2 -translate-y-1/2">
                                    <img class="w-full h-full" src="/images/3554-IMG-20170303-WA0004.jpg" alt="">
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
                <p class="pb-5">
                    Peraturan Bupati tersebut mulai berlaku efektif sejak tanggal 1 Januari 2017. Pada saat itu, struktur di bawah Kepala Dinas terdapat Sekretariat dan tiga bidang diantaranya; Bidang Komunikasi, Bidang Teknologi Informatika, Bidang Statistik dan Persandian.
                </p>
                <p class="pb-5">
                    Tahun 2020, Perda nomor 8 Tahun 2016 diubah dengan Peraturan Daerah Kabupaten Banyuwangi nomor 10 Tahun 2019 sehingga berdampak diterbitkannya Peraturan Bupati Banyuwangi nomor 6 Tahun 2020 tentang Perubahan atas Peraturan Bupati Banyuwangi nomor 49 Tahun 2016 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Komunikasi Informatika dan Persandian Kabupaten Banyuwangi.
                </p>
                <p class="pb-5">
                    Perbup nomor 6 Tahun 2020 pada prinsipnya mengubah Bidang Komunikasi menjadi Bidang Informasi dan Komunikasi Publik yang membawahi tiga seksi di antaranya Seksi Informasi Publik, Seksi Komunikasi Publik, Seksi Dokumentasi dan Pemberitaan. Sedangkan struktur bidang yang lain tidak mengalami perubahan.
                </p>
                <p class="pb-5">
                    Kemudian, pada tahun 2021 terdapat perubahan yang dipicu terbitnya Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi nomor 25 Tahun 2021 tentang Penyederhanaan Struktur Organisasi pada Instansi Pemerintah. Perubahan itu mencakup disetarakannya jabatan eselon IV ke dalam jabatan fungsional.
                </p>
                <p class="pb-5">
                    Struktur baru tersebut diatur dalam Peraturan Bupati Banyuwangi nomor 68 Tahun 2021 tentang Kedudukan, Susunan Organisasi Tugas dan Fungsi serta Tata Kerja Dinas Komunikasi, Informatika dan Persandian Kabupaten Banyuwangi yang ditandatangani oleh Bupati Banyuwangi, Ipuk Fiestiandani Azwar Anas pada tanggal 31 Desember 2021. 
                </p>
            </div>

        </div>
    </div>

@endsection