<aside class="absolute -translate-x-full z-20 lg:translate-x-0 lg:relative transition-all">
    <div class="h-screen overflow-y-auto  w-64  shadow-md bg-side transition-all py-2 px-3 drop-shadow-md">
      <h1 class="admin-title text-center font-sans font-semibold text-xl py-6 mb-6 text-slate-200 border-b border-gray-500">ADMIN</h1>
      <h1 class="admin-title text-center font-sans font-semibold text-xl py-6 mb-6 text-slate-200 border-b border-gray-500 hidden">A</h1>
      <ul class="mx-auto">
        <li class="{{ Request::is('admin/dashboard*')? "is-active" : '' }} " >
          <a href="/admin/dashboard" class=" flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright justify-center">
            <svg 
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
              xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
              <span class="side-list flex-1 ml-3 ">Dashboard</span>
          </a>
       </li>
       <li class="{{ Request::is('admin/dokumen*')? "is-active" : '' }}">
          <a href="/admin/dokumen" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright  justify-center">
            <svg 
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
              xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            <span class="side-list flex-1 ml-3 whitespace-nowrap">Dokumen</span>
          </a>
       </li>
       <li class="{{ Request::is('admin/galeri*')? "is-active" : '' }}">
          <a href="/admin/galeri" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright  justify-center">
            <svg
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
              xmlns="http://www.w3.org/2000/svg"  viewBox="-2 -2 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
              <circle cx="8.5" cy="8.5" r="1.5"></circle>
              <polyline points="21 15 16 10 5 21"></polyline>
            </svg>
            <span class="side-list flex-1 ml-3 whitespace-nowrap">Galeri</span>
          </a>
       </li>
       <li class="{{ Request::is('admin/berita*')? "is-active" : '' }}">
          <a href="/admin/berita" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright  justify-center">
            <svg 
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
              xmlns="http://www.w3.org/2000/svg" fill="currentColor"  viewBox="-2 -2 20 20">
              <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
              <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
            </svg>
            <span class="side-list flex-1 ml-3 whitespace-nowrap">Berita</span>
          </a>
       </li>
       <li class="{{ Request::is('admin/layanan*')? "is-active" : '' }}">
          <a href="/admin/layanan" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright  justify-center">
            <svg 
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
              xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
            <span class="side-list flex-1 ml-3 whitespace-nowrap">Layanan</span>
          </a>
       </li>
       <li class="{{ Request::is('admin/kategori*')? "is-active" : '' }}">
          <a href="/admin/kategori" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright  justify-center">
            <svg 
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
              xmlns="http://www.w3.org/2000/svg"  viewBox="-2 -2 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
              <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
            <span class="side-list flex-1 ml-3 whitespace-nowrap">Kategori</span>
          </a>
       </li>
       <li class="{{ Request::is('admin/profil*')? "is-active" : '' }} dropdown">
          <div class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg  hover:bg-side-bright  justify-center">
            
            <svg 
            class="flex-shrink-0 w-6 h-6 text-gray-500 transition-all duration-75 group-hover:text-gray-900"
            width="134" height="170" viewBox="0 0 144 200" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect x="5" y="5" width="124" height="160" rx="8" stroke="currentColor" stroke-width="9"/>
              <rect x="19" y="44" width="19" height="19" rx="3" fill="currentColor"/>
              <rect x="57" y="44" width="19" height="19" rx="3" fill="currentColor"/>
              <rect x="95" y="44" width="19" height="19" rx="3" fill="currentColor"/>
              <path d="M18 92H94.88" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
              <path d="M18 113L111.248 113" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
              <path d="M18 135L95.376 135" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
            </svg>
  
            <span class="side-list flex-1 ml-3 whitespace-nowrap">Profil</span>
            <button data-open="{{ Request::is('admin/profil*')? "true" : 'false' }}" data-target-dropdown="1" class="side-list show-dropdown transition-all group">
              <svg class=" transition-all group-hover:stroke-[rgb(253,224,71)]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
          </div>
          {{-- <div class="flex flex-col bg-[rgba(253,223,71,0.39)] rounded-md text-white gap-1 p-2 pt-1 "> --}}
          <div data-dropdown-id="1" class="side-list flex flex-col transition-all rounded-md text-gray-500 gap-1 p-2 pr-0 pt-1 ">
            <ul class="ml-3 pl-3 max-h-96 max-h-0 border-l flex flex-col transition-all border-l-gray-500">
              <li class="{{ Request::is('admin/profil/visi-misi*')? "drop-active" : '' }} p-2 hidden opacity-0 hover:bg-side-bright rounded-md"> <a class="w-full block" href="/admin/profil/visi-misi">Visi Misi</a></li>
              <li class="{{ Request::is('admin/profil/tujuan-sasaran*')? "drop-active" : '' }} p-2 hidden opacity-0 hover:bg-side-bright rounded-md"> <a class="w-full block" href="/admin/profil/tujuan-sasaran">Tujuan Sasaran</a></li>
              <li class="{{ Request::is('admin/profil/sejarah*')? "drop-active" : '' }} p-2 hidden opacity-0 hover:bg-side-bright rounded-md"><a class="w-full block" href="/admin/profil/sejarah">Sejarah</a></li>
              <li class="{{ Request::is('admin/profil/struktur-organisasi*')? "drop-active" : '' }} p-2 hidden opacity-0 hover:bg-side-bright rounded-md"><a class="w-full block" href="/admin/profil/struktur-organisasi">Struktur Organisasi</a></li>
              <li class="{{ Request::is('admin/profil/profil-pejabat*')? "drop-active" : '' }} p-2 hidden opacity-0 hover:bg-side-bright rounded-md"><a class="w-full block" href="/admin/profil/profil-pejabat">Profil Pejabat</a></li>
              <li class="{{ Request::is('admin/profil/organisasi-tata-kerja*')? "drop-active" : '' }} p-2 hidden opacity-0 hover:bg-side-bright rounded-md"><a class="w-full block" href="/admin/profil/organisasi-tata-kerja">Organisasi Tatakerja</a></li>
            </ul>
          </div>
       </li>
      </ul>
    </div>
  </aside>

@push('view-layout')
    <script>
      //------------- toglle button for side dropdown --------------
      let showDropBtn = document.querySelectorAll('.show-dropdown');
      showDropBtn.forEach(btn => {
        let svg = btn.querySelector('svg');
        let target = document.querySelector(`[data-dropdown-id="${btn.dataset.targetDropdown}"]`);
        let ul = target.querySelector('ul')
        let lis = ul.querySelectorAll('li');
        
        //check if dropdown is open
        checkOpen(btn, {svg,target,ul,lis});

        btn.addEventListener('click',(e) => {
          e.preventDefault();
          btn.dataset.open === "true" ? btn.dataset.open = "false" : btn.dataset.open = "true"
          checkOpen(btn, {svg,target,ul,lis});
        })
      })

      //adjusting view from dataset
      function checkOpen(btn,{svg,target,ul,lis}){
        if(btn.dataset.open === "false"){
          svg.classList.remove('-rotate-90');
          lis.forEach(li => {
            li.classList.add("opacity-0")
          })
          ul.classList.add('max-h-0')
          setTimeout(() => {
            lis.forEach(li => {
              li.classList.add("hidden");
            })
          }, 150);
        }else{
          lis.forEach(li => {
              li.classList.remove("hidden");
          })
          svg.classList.add('-rotate-90');
          setTimeout(() => {
            ul.classList.remove('max-h-0')
            lis.forEach(li => {
              li.classList.remove("opacity-0")
            })
          }, 0);
        }
      }

    </script>
@endpush