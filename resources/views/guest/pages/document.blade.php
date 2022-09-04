@extends('guest.layouts.main')

@section('container')
    <div class="wrapper">
        <div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10" id="tupoksi">
            Semua Dokumen
        </div>
        <div class="py-10 px-3">

            @foreach ($documents as $document)
                
                {{-- row --}}
                <div class="max-w-lg md:max-w-7xl m-auto rounded-lg overflow-hidden shadow-lg mb-3">
                    <div class="px-6 py-4 grid grid-cols-1 justify-items-start md:justify-items-center gap-4  md:grid-cols-4 ">
                        <div class="inline-flex justify-self-start  h-50 self-center"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class=" " width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>   
                        </div>
                        <div class=" flex items-center space-x-3 md:col-span-2 ">
                            <div class="mx-auto md:text-center">
                                <p>{{ $document->name}}</p>
                                @php
                                    $date = date_create($document->create_date)
                                @endphp
                                <p class="text-gray-500 text-sm font-semibold tracking-wide">{{  date_format($date, "j - F - o")  }}</p>
                            </div>
                        </div>                        
                        <a href="/document/download/{{ $document->source }}" type="download" class=" flex items-center space-x-3 ">
                            <div class="mx-auto">
                                <span class="text-white text-sm w-1/3 pb-1 bg-blue-600 font-semibold px-2 rounded-full cursor-pointer">    
                                    Download
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection