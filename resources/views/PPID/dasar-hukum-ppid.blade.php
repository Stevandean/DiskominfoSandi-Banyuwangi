@extends('layouts.main')

@section('container')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-4 md:col-span-6">
            @include ('partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                Dasar Hukum Pembentukan PPID
            </div>   

            <div class="pt-5">
                <div class=" max-w-4xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <p class="text-xl font-bold mb-5 ">
                            Dasar Hukum Pembentukan 
                        </p>
                        <div class="font-bold text-xl">
                            1.  Peraturan Yang Mendasari Pembentukan PPID : 
                        </div>
                        <p class="text-gray-700 text-base pt-3 ml-10">
                            1. Undang - Undang RI No. 14/2008 tentang keterbukaan informasi publik
                        </p>
                        <p class="text-gray-700 text-base pt-3 ml-10">
                            2. Peraturan pemerintah RI No. 61/2010 tentang pelaksanaan undang - undang No. 14/2008
                        </p>
                        <p class="text-gray-700 text-base pt-3 ml-10">
                            3. Peraturan komisi informasi No. 1/2010 tentang standart layanan informasi publik
                        </p>
                        <p class="text-gray-700 text-base pt-3 ml-10">
                            4. Peraturan menteri dalam negeri No. 2/2010 tentang pedoman pengelolaan layanan informasi dan dokumentasi di lingkungan kementrian dalam negeri
                        </p>
                        <p class="text-gray-700 text-base mb-5 pt-3 ml-10">
                            5. Peraturan menteri komunikasi dan informatika No. 10/2010 tentang pedoman pengelolaan pelayanan informasi dan dokumentasi di lingkungan kementrian komunikasi dan infomatika
                        </p>
                        <div class="font-bold text-xl">
                            2.  Peraturan Yang Mendasari Pembentukan PPID Kabupaten Banyuwangi : 
                        </div>
                        <p class="text-gray-700 text-base pt-3">
                            1. Surat keputusan bupati nomor : 199/511/KEP/429.011/2012 tentang pembentukan tim penyusun rancangan peraturan bupati tentang pedoman pengelolaan layanan informasi dan dokumentasi di Kabupaten Banyuwangi
                        </p>
                        <p class="text-gray-700 text-base mb-5 pt-3">
                            2. Peraturan bupati Banyuwangi nomor 19 tahun 2012 tanggal 25 Juni 2012 tentang pedoman pelayanan informasi dan dokumentasi di lingkungan pemerintahan Kabupaten Banyuwangi
                        </p>
                        <div class="font-bold text-xl ">
                            3.  Peraturan Yang Mendasari Pembentukan PPID Pembantu Diskominfo dan Persandian Kabupaten banyuwangi : 
                        </div>
                        <p class="text-gray-700 text-base pt-3">
                            1. Keputusan kepala dinas kominfo dan persandian Kabupaten Banyuwangi nomor : 891/169/429.118/2017 tentang pejabat pengelola informasi dan dokumentasi (PPID) pembantu pada komunikasi, informatika dan persandian Kabupaten Banyuwangi
                        </p>
                        <p class="text-gray-700 text-base mb-5 pt-3">
                            2. Keputusan kepala dinas kominfo dan persandian Kabupaten Banyuwangi nomor 119/11/KEP/429.116/2020 tentang pejabat pengelola informasi dan dokumentasi (PPID) pembantu pada dinas kominikasi, informatika dan persandian Kabupaten Banyuwangi
                        </p>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
    
@endsection
