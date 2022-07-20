@extends('layouts.main')

@section('container')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-6 md:col-span-6">
            <h1 class="text-3xl font-bold text-center py-10 underline underline-offset-8 decoration-2 decoration-sky-500">
                Dinas Komunikasi, Informatika, dan Persandian Banyuwangi
            </h1>
            <div class="img-kontak m-auto" style="background-image:url(/images/logo-kominfo.jpg)"></div>
            <h1 class="text-xl font-bold pt-5 px-10 underline underline-offset-2 decoration-2 decoration-sky-500">Alamat :</h1>
            <h1 class="px-10 text-xl">Jl. Kh. Agus Salim No 83, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416, Indonesia</h1>
            <h1 class="text-xl font-bold pt-3 px-10 underline underline-offset-2 decoration-2 decoration-sky-500">Email :</h1>
            <h1 class="px-10 text-xl">kominfosandi@banyuwangikab.go.id</h1>
            <h1 class="text-xl font-bold pt-3 px-10 underline underline-offset-2 decoration-2 decoration-sky-500">Telp :</h1>
            <h1 class="px-10 text-xl">(0333) 422400</h1>
            <h1 class="text-xl font-bold pt-3 px-10 underline underline-offset-2 decoration-2 decoration-sky-500">Fax :</h1>
            <h1 class="px-10 text-xl mb-5">(0333) 413437</h1>
        </div>
        <div class="lg:col-span-6 md:col-span-6 px-4 py-10">
            <div class="img-ppid" style="background-image:url(https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg)"></div>
        </div>
    </div>
@endsection