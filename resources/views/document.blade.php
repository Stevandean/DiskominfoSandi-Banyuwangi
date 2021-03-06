@extends('layouts.main')

@section('container')
    <div class="wrapper">
        <div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10" id="tupoksi">
            Semua Dokumen
        </div>
        <div class="py-10">

            {{-- <div class=" max-w-7xl m-auto rounded-lg overflow-hidden shadow-lg">
                <div class="px-6 py-4 grid grid-cols-1 gap-4 md:grid-cols-4 ">
                    <div class="inline-flex w-60 h-50 mx-auto"> 
                        <img class=' grid grid-cols-1 object-cover rounded-xl' src='https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg'/> 
                    </div>
                    <div class="px-5 flex items-center space-x-3 md:col-span-2 ">
                        <div class="mx-auto text-center">
                            <p> Kunjungan ke panti asuhan sukorejo </p>
                            <p class="text-gray-500 text-sm font-semibold tracking-wide"> 12 - juni - 2020 </p>
                        </div>
                    </div>                        
                    <div class="px-5 flex items-center space-x-3 ">
                        <div class="mx-auto">
                            <span class="text-white text-sm w-1/3 pb-1 bg-blue-600 font-semibold px-2 rounded-full cursor-pointer">    
                                Details
                            </span>
                        </div>
                    </div>
                </div>
            </div> --}}

            @foreach ($documents as $document)
                
                {{-- row --}}
                <div class=" max-w-7xl m-auto rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4 grid grid-cols-1 gap-4 md:grid-cols-4 ">
                        <div class="inline-flex w-60 h-50 mx-auto"> 
                            <img class=' grid grid-cols-1 object-cover rounded-xl' src='https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg'/> 
                        </div>
                        <div class="px-5 flex items-center space-x-3 md:col-span-2 ">
                            <div class="mx-auto text-center">
                                <p>{{ $document->name}}</p>
                                @php
                                    $date = date_create($document->create_date)
                                @endphp
                                <p class="text-gray-500 text-sm font-semibold tracking-wide">{{  date_format($date, "j - F - o")  }}</p>
                            </div>
                        </div>                        
                        <div class="px-5 flex items-center space-x-3 ">
                            <div class="mx-auto">
                                <span class="text-white text-sm w-1/3 pb-1 bg-blue-600 font-semibold px-2 rounded-full cursor-pointer">    
                                    Details
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection