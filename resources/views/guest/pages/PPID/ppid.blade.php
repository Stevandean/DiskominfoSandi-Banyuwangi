@extends('guest.layouts.main')

@section('container')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-4 md:col-span-6">
            @include ('guest.partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4 text-center">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                PPID (Pejabat Pengelola Informasi dan Dokumentasi)
            </div>
            <div class="img-ppid" style="background-image:url(https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg)"></div>
        </div>
    </div>
@endsection
