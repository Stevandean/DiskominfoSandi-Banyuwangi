@extends('layouts.main')

@section('container')
    <div class="min-h-screen transition-all ease-in duration-500">
        <div class="container-berita columns-auto">
            <h1 class="
            py-8
            text-black-600
            text-3xl
            text-center
            ">
            Semua Informasi
            </h1>

            <div class=" grid-cols-2 p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 gap-y-8">
                {{-- <!-- CARD 1 -->
                <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
                    <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bersama Warga Desa, Bupati Ipuk Gelar Haul Bung Karno</div>
                    </div>
                </div> --}}
                @foreach ($data as $dat)    
                    <!-- CARD -->
                    <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
                        <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" >
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $dat->title }}</div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection