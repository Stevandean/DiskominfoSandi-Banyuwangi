@extends('guest.layouts.main')
@push('additional-css')
	<link rel="stylesheet" href="/css/galery.css">
  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      font-family: Arial;
    }
    
    .header {
      text-align: center;
      padding: 32px;
    }
    
    .row {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      justify-content: center;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      padding: 0 50px;
    }
    
    /* Create four equal columns that sits next to each other */
    .column {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
      max-width: 50%;
      padding: 0 4px;
      margin: 10px;
    }
    
    .column img {
      margin-top: 8px;
      vertical-align: middle;
      width: 100%;
    }
    
    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
      .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
      }
    }
    
    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
      }
    }
    </style>
@endpush

@section('container')

  <!-- Header -->
  <div class="text-4xl font-semibold mt-5">
    <h1 class="text-center">Galeri</h1>
  </div>

  <!-- container, so the galleries doesn't change to much -->
  <div class="container mx-auto overflow-hidden">
    <!-- Photo Grid -->
    <div class="flex justify-center flex-wrap py-10 mx-auto gap-1">  <!-- row -->
    @php
        $countGalleries = count($galleries);
        $perCollumn = ceil( $countGalleries / 4);
        $gallery = $galleries[0];
    @endphp
  
    @for ($i = 0; $i < 4; $i++)
    <div class="sm:basis-2/3 lg:basis-1/4 max-w-full px-3 sm:max-w-[70%] md:max-w-[45%] py-1"> <!-- collumn -->
    {{-- <div class="basis-1/4 md:max-w-[50%] py-1 m-2"> <!-- collumn --> --}}
      @for($j = $perCollumn*$i; $j < $perCollumn*($i+1) ; $j++)
  
        {{-- jika sudah mencapai batas data, maka keluar dari loop --}}
        @if($j == $countGalleries)
          @break
        @endif
  
        <button class="btn-gallery relative group hover:z-10 w-full" data-id="{{ $galleries[$j]->id }}"> <!-- image -->
          <div class="inset-0 absolute z-10">
            <div class="flex items-center h-full justify-center">
              <h1 class="text-3xl text-center opacity-0 group-hover:text-red-400 group-hover:opacity-100 ease-in-out duration-300">{{ $galleries[$j]->title }}</h1>
            </div>
          </div>
            {{-- <img class="group-hover:blur-sm blur-none group-hover:scale-110 ease-in-out duration-300" src="https://images.unsplash.com/photo-1661344662582-81a5c6229d1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" style="width:100%"> --}}
            @if ($galleries[$j]->type == 'image')
              <img class="group-hover:blur-sm blur-none group-hover:scale-110 ease-in-out duration-300 w-full" src="{{ Storage::exists($galleries[$j]->source)? asset('/storage/'.$galleries[$j]->source) : '/images/null-image.png'  }}">
              @elseif($galleries[$j]->type == 'video')
              @php
                #untuk mendapatkan id video dan menjadikanya api untuk mendapat thumbnail (saya tidak bisa regex)
                $videoURL = $galleries[$j]->source;
                $vidString = '';
                if(filter_var($videoURL, FILTER_VALIDATE_URL)){
                  $vidId = explode("/",$videoURL);
                  $vidId = end($vidId);
                  $vidId = explode('?', $vidId);
                  $vidId = end($vidId);
                  $vidId = explode("&",$vidId)[0];
                  $vidId = explode("=",$vidId)[1];
                  $vidString = "https://img.youtube.com/vi/$vidId/mqdefault.jpg";
                }else{
                  $vidString = "../images/null-image.png";
                }
              @endphp
              <img class="group-hover:blur-sm blur-none group-hover:scale-110 ease-in-out duration-300 w-full" src="{{ $vidString }}">
            @endif
        </button>
          
      @endfor
    </div>
    @endfor
    </div>

    <div class="mx-auto p-5 max-w-6xl">
      {{ $galleries->links() }}
    </div>
  </div>

  @include('guest.partials.gallery-modal')
@endsection
