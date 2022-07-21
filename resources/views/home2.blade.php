{{-- <!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-stone-50 transition-all ease-in duration-500"> --}}


  @extends('layouts.main')

  @section('container')
    <!-- HOME Text -->
    <section class="section">
      <div style='width:0;height:0'>&nbsp;</div>{{-- ini hanya tes, jika gagal akan dihapus --}}
      {{-- tesnya berhasil, fungsi diatas digunakna supaya element parent tidak ikut terbawa saat melakukan margin oleh child --}}
      <div class="container">
        <span class="text1"> DiskominfoSandi</span>
        <span class="text2">
          Banyuwangi
        </span>
      </div>
    </section>
    <!-- Page Berita -->
    <div class="container-berita bg-white columns-auto">
      <h1 class="
        py-5
        text-black-600
        text-3xl
        text-center
        ">
        Berita Terkini
      </h1>

      <div class=" grid-cols-2 p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 gap-y-8">
        
        <!-- CARD 1 -->
        @foreach ($news as $new)
          <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
            <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" >
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">{{ $new->title }}</div>
              <p class="text-gray-700 text-base">
                {{ Str::limit(strip_tags($new->body), 300, "...") }}
              </p>
            </div>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $new->category->name }}</span>
            </div>
          </div>
        @endforeach
        <!-- END CARD -->

      </div>
    </div>
      
  @endsection


  


