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
  <nav class="p-5 bg-white shadow md:flex  md:justify-between">
    <div class="flex justify-between items-center">
      <img class="h-12 inline mr-5"
        src="https://www.asliindonesia.net/wp-content/uploads/2015/04/hasil2BTKD2BCPNS2BKabupaten2BBanyuwangi2B2014.png">
      <span class="text-xl max-w-sm font-[Poppins] cursor-pointer text-center">
        Dinas Komunikasi Informatika dan Persandian Kabupaten Banyuwangi
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-50 md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-blue-600 duration-500">Beranda</a>
      </li>

      <!-- Dropdown Profil -->
      <div class="dropdown relative">
        <a
          class="
            dropdown-toggle
            px-6
            py-2.5
            text-black-600
            text-xl
            leading-tight
            hover:text-blue-600
            focus:underline
            active:text-red-800
            transition duration-500 ease-in-out
            flex
            items-center"
            href="#"
            id="dropdownMenuButton2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
          Profil
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="caret-down"
            class="w-2 ml-2"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512">
            <path
            fill="currentColor"
            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
          </svg>
        </a>
        <ul
          class="
            dropdown-menu
            min-w-max
            absolute
            hidden
            bg-white
            text-base
            z-50
            float-left
            py-2
            list-none
            text-left
            rounded-lg
            shadow-lg
            mt-1
            hidden
            m-0
            bg-clip-padding
            border-none"
            aria-labelledby="dropdownMenuButton2">
          <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100"
            href="#"
            >Diskominfo & Sandi
          </a>
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100"
              href="#"
            >Visi Misi
          </a>
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100"
              href="#"
            >Tupoksi
          </a>
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100"
              href="#"
            >Galery
          </a>
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100"
              href="#"
            >Struktur Organisasi
          </a> 
        </li>
      </div>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-blue-600 duration-500">PPID</a>
      </li>

      <!-- Dropdown Info -->
      <div class="dropdown relative">
        <a
          class="
            dropdown-toggle
            px-6
            py-2.5
            text-black-600
            text-xl
            leading-tight
            hover:text-blue-600
            focus:underline
            active:text-red-800
            transition duration-500 ease-in-out
            flex
            items-center"
            href="#"
            id="dropdownMenuButton2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
          Info
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="caret-down"
            class="w-2 ml-2"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512">
            <path
            fill="currentColor"
            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
          </svg>
        </a>
        <ul
          class="
            dropdown-menu
            max-w-none
            absolute
            hidden
            bg-white
            text-base
            z-50
            float-center  
            py-2
            list-none
            text-left
            rounded-lg
            shadow-lg
            mt-1
            hidden
            m-0
            bg-clip-padding
            border-none"
            aria-labelledby="dropdownMenuButton2">
          <li>
            <a
              class="
                dropdown-item
                text-sm
                py-2
                px-4
                font-normal
                block
                w-25px
                whitespace-nowrap
                bg-transparent
                text-gray-700
                hover:bg-gray-100"
              href="#"
              >Info
            </a>
          </li>
          <li>
            <a
              class="
                dropdown-item
                text-sm
                py-2
                px-4
                font-normal
                block
                w-full
                whitespace-nowrap
                bg-transparent
                text-gray-700
                hover:bg-gray-100"
              href="#"
              >Doc
            </a>
          </li>
        </ul>
      </div>      
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-blue-600 duration-500">Berita</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-blue-600 duration-500">Layanan</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-blue-600 duration-500">Kontak</a>
      </li>
      <!-- <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        Get started
      </button> -->
    </ul>
  </nav>


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