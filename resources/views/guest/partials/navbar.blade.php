<nav class="p-5 bg-white shadow md:flex  md:justify-between z-50">
    <div class="flex justify-between items-center">
      <img class="h-12 inline mr-5"
        src="https://www.asliindonesia.net/wp-content/uploads/2015/04/hasil2BTKD2BCPNS2BKabupaten2BBanyuwangi2B2014.png">
      <span class="text-base lg:text-xl max-w-sm font-[Poppins] cursor-pointer text-center">
        Dinas Komunikasi Informatika dan Persandian Kabupaten Banyuwangi
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block z-[60]">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-50 md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="px-4 py-3 md:my-0">
        <a href="/" class="text-xl hover:text-blue-600 duration-500">Beranda</a>
      </li>
      
      <!-- Dropdown Profil -->
      <div class="dropdown relative">
        <a
          class="dropdown-toggle px-4 py-3 text-black-600 text-xl leading-tight hover:text-blue-600 focus:active:text-red-800 transition duration-500 ease-in-out flex cursor-pointer items-center"id="dropdownMenuButton2"data-bs-toggle="dropdown"aria-expanded="false"
          >
          Profil
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path
            fill="currentColor"
            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
          </svg>
        </a>
        <ul
          class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
          <li>
            <a
              class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/sejarah"
              >Sejarah
            </a>
            <a
              class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/visi-misi"
              >Visi Misi
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/tupoksi"
              >Tupoksi
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/galeri"
              >Galery
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/profil-pejabat"
              >Profil Pejabat
            </a> 
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/struktur-organisasi"
              >Struktur Organisasi
            </a> 
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/tujuan-sasaran"
              >Tujuan dan Sasaran
            </a> 
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/organisasi-tata-kerja"
              >Organisasi dan Tata Kerja
            </a> 
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/kontak"
              >Kontak
            </a>
          </li>
        </ul>
      </div>

       <!-- Dropdown Layanan -->
       <div class="dropdown relative">
        <a
          class="dropdown-toggle px-4 py-3 text-black-600 text-xl leading-tight hover:text-blue-600 focus:underline active:text-red-800 transition duration-500 ease-in-out flex cursor-pointer items-center" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"
          >
          Layanan
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path
            fill="currentColor"
            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
          </svg>
        </a>
        <ul
          class="dropdown-menu max-w-none absolute hidden bg-white text-base z-50 float-center   py-2 list-none text-left rounded-lg shadow-lg m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
          {{-- <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-25px whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/berita"
              >Bidang Informasi dan Komunikasi Publik
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/document"
              >Bidang Informatika
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/document"
              >Bidang Statistik dan Persandian
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/document"
              >Sekretariat
            </a>
          </li> --}}
          @php
            $kategori = session('categoryList');   
          @endphp
          @foreach ($kategori as $cat)
          <a
            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" 
            href="/layanan/{{ $cat->id }}"
            >{{ $cat->name }}
          </a>
          @endforeach
        </ul>
      </div>

        <!-- Dropdown Kinerja -->
        <div class="dropdown relative">
          <a
            class="dropdown-toggle px-4 py-3 text-black-600 text-xl leading-tight hover:text-blue-600 focus:active:text-red-800 transition duration-500 ease-in-out flex cursor-pointer items-center"id="dropdownMenuButton2"data-bs-toggle="dropdown"aria-expanded="false"
            >
            Kinerja
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path
              fill="currentColor"
              d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
            </svg>
          </a>
          <ul
            class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
            <li>
              <a
                class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/profil/sejarah"
                >Program
              </a>
              
            </li>
          </ul>
        </div>

      <!-- Dropdown Info -->
      <div class="dropdown relative">
        <a
          class="dropdown-toggle px-4 py-3 text-black-600 text-xl leading-tight hover:text-blue-600 focus:underline active:text-red-800 transition duration-500 ease-in-out flex cursor-pointer items-center" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"
          >
          Info
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path
            fill="currentColor"
            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
          </svg>
        </a>
        <ul
          class="dropdown-menu max-w-none absolute hidden bg-white text-base z-50 float-center py-2 list-none text-left rounded-lg shadow-lg m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-25px whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/berita"
              >Berita
            </a>
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-25px whitespace-nowrap bg-transparent text-gray-700 hover:text-blue-600 hover:bg-gray-100" href="/document"
              >Document
            </a>
          </li>
        </ul>
      </div>  
      
      <li class="px-4 py-3 md:my-0">
        <a href="/ppid" class="text-xl hover:text-blue-600 duration-500">PPID</a>
      </li>

      <!-- <li class="px-4 py-3 md:my-0">
        <a href="/kontak" class="text-xl hover:text-blue-600 duration-500">Kontak</a>
      </li> -->
      <!-- <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        Get started
      </button> -->
    </ul>
  </nav>

  {{-- dipindah di main layout --}}
  {{-- <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script> --}}
