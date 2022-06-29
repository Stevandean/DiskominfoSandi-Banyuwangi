<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-stone-50">

  @include('partials.navbar')

  <!-- HOME Text -->
  <div class="container">
    <span class="text1"> DiskominfoSandi</span>
    <span class="text2">
      Banyuwangi
    </span>
  </div>

  <!-- Page Berita -->
  <div class="container-berita bg-white columns-auto">
    <h1 class="
      text-black-600
      text-3xl
      text-center
      ">
      Berita Terkini
    </h1>

    <div class=" grid-cols-2 p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 gap-y-8">
      
      <!-- CARD 1 -->
      <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
        <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" >
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Bersama Warga Desa, Bupati Ipuk Gelar Haul Bung Karno</div>
          <p class="text-gray-700 text-base">
            Warga Desa Kebondalem, Kecamatan Bangorejo, Banyuwangi memenuhi Masjid Al-Amien di kampung tersebut, Rabu (22/6/2022). Bersama Bupati Banyuwangi Ipuk Fiestiandani. 
            Mereka turut memanjatkan doa bersama dengan  dalam rangka memperingati Haul Bung Karno.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BungKarno</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BanyuwangiReborn</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#KabarBwi </span>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
        <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Bersama Warga Desa, Bupati Ipuk Gelar Haul Bung Karno</div>
          <p class="text-gray-700 text-base">
            Warga Desa Kebondalem, Kecamatan Bangorejo, Banyuwangi memenuhi Masjid Al-Amien di kampung tersebut, Rabu (22/6/2022). Bersama Bupati Banyuwangi Ipuk Fiestiandani. 
            Mereka turut memanjatkan doa bersama dengan  dalam rangka memperingati Haul Bung Karno.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BungKarno</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BanyuwangiReborn</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#KabarBwi </span>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
        <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Bersama Warga Desa, Bupati Ipuk Gelar Haul Bung Karno</div>
          <p class="text-gray-700 text-base">
            Warga Desa Kebondalem, Kecamatan Bangorejo, Banyuwangi memenuhi Masjid Al-Amien di kampung tersebut, Rabu (22/6/2022). Bersama Bupati Banyuwangi Ipuk Fiestiandani. 
            Mereka turut memanjatkan doa bersama dengan  dalam rangka memperingati Haul Bung Karno.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BungKarno</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BanyuwangiReborn</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#KabarBwi </span>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class=" max-w-sm rounded-lg overflow-hidden shadow-lg mx-auto">
        <img class="w-full" src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Bersama Warga Desa, Bupati Ipuk Gelar Haul Bung Karno</div>
          <p class="text-gray-700 text-base">
            Warga Desa Kebondalem, Kecamatan Bangorejo, Banyuwangi memenuhi Masjid Al-Amien di kampung tersebut, Rabu (22/6/2022). Bersama Bupati Banyuwangi Ipuk Fiestiandani. 
            Mereka turut memanjatkan doa bersama dengan  dalam rangka memperingati Haul Bung Karno.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BungKarno</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BanyuwangiReborn</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#KabarBwi </span>
        </div>
      </div>
    </div>
  </div>


  <!-- SCRIPT -->
  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>
</body>

</html>