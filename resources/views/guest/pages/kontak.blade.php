@extends('guest.layouts.main')

@section('container')
    <div class="flex flex-col lg:flex-row gap-4">
        <div class="basis-1/2">
            <div class="p-5 sm:p-10">
                <h1 class="text-3xl font-bold text-center py-10 underline underline-offset-8 decoration-2 decoration-sky-500">
                    Dinas Komunikasi, Informatika, dan Persandian Banyuwangi
                </h1>
                <div class="img-kontak m-auto" style="background-image:url(/images/diskominfo-logo.png)"></div>
                <h1 class="text-xl font-bold pt-5  underline underline-offset-2 decoration-2 decoration-sky-500">Alamat :</h1>
                <h1 class=" text-xl">Jl. Kh. Agus Salim No 83, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416, Indonesia</h1>
                <h1 class="text-xl font-bold pt-3  underline underline-offset-2 decoration-2 decoration-sky-500">Email :</h1>
                <h1 class=" text-xl">kominfosandi@banyuwangikab.go.id</h1>
                <h1 class="text-xl font-bold pt-3  underline underline-offset-2 decoration-2 decoration-sky-500">Telp :</h1>
                <h1 class=" text-xl">(0333) 422400</h1>
                <h1 class="text-xl font-bold pt-3  underline underline-offset-2 decoration-2 decoration-sky-500">Fax :</h1>
                <h1 class=" text-xl">(0333) 413437</h1>
            </div>
        </div>
        <div class="basis-1/2 min-h-full p-5 sm:p-10 lg:p-20">
            <div class="h-72 lg:h-full max-w-full mx-auto">
                <iframe class="maps h-full w-full rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.1967443376473!2d114.35559952919267!3d-8.224165299630098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15ab50b1c7791%3A0xb3c98689e07581b1!2sDinas%20Komunikasi%20Informatika%20dan%20Persandian!5e0!3m2!1sid!2sid!4v1657774478202!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection