<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/trix.css">
    <script src="/js/trix.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      //------- konfigurasi tailwind ---------
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'side': '#001B43',
              'side-bright': '#233A5C',
              'blue-kominfo' : '#0100CC'
            }
          }
        }
      }
    </script>
    <style>
        *::-webkit-scrollbar-track{
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: transparent;
        border-radius: 10px;
        border: 3px solid white;
      }

      *::-webkit-scrollbar{
        width: 6px;
        height: 5px;
      }
      *::-webkit-scrollbar:hover{
        width: 12px;
      }
      *::-webkit-scrollbar-thumb{
        background-color: #686868;
        border-radius: 10px;
        transition: all 1s;
      }
      *::-webkit-scrollbar-thumb:hover{
        background-color: #444343;
        border-radius: 0PX;
      }

      /*------- for active sidebar ---------*/
      .is-active::before{
        content: "";
        position: absolute;
        width: 2px;
        height: 40px;
        background-color: rgb(253, 224, 71);
        left: 0; /* <--- supaya bisa menempel dilayar yg sebelah kiri */
        
      }
      .is-active > a > span{
        color: rgb(209, 213, 219);
        /* color: rgb(156 163 175); */
      }
      .is-active > a > svg{
        color: rgb(253, 224, 71);
        font: rgb(253, 224, 71);
      }
      .is-active > a{
        background: linear-gradient(90deg, rgba(253,223,71,0.39) 0%, rgba(0,0,0,0) 100%);
      }

      /*-------- for table ------  */
      table tbody tr:nth-child(even){
        background-color: #f9fafb
      }
      table tbody tr:nth-child(odd){
        background-color: white
      }

      /*-------- for select input --------*/
      select {
        appearance: none;
        background: transparent;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>');
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: 50%;
      }
    </style>
        <title>{{ $title }}</title>
  </head>
  <body>
    <div class="page flex ">

      <!-- side bar -->
      @include('admin.partials.sidebar')
      <!-- Akhir sidebar-->

      <!--awal konten utama-->
      <div class="main w-full overflow-y-auto h-screen"> <!-- supaya konten dan header dapat di scroll dan tidak memengaruhi sidebar-->
        <div id="overLap" class="absolute hidden lg:hidden inset-0 bg-slate-400 opacity-50 z-10" onclick="toggleSidebar2()"></div><!-- overlap untuk dvice sm-->
        
        <!-- header -->
        @include('admin.partials.header')
        <!-- akhir header -->

        <!-- konten utama -->
        <div class="content sm:bg-slate-200 sm:px-5 md:px-10 py-5 min-h-full">
            <div class="container mx-auto">
                @yield('container')
            </div>
        </div>
      </div>
      <!--akhir konten utama-->

      <!-- modal delete -->
      <x-admin.modal-delete />
      <!-- akhir modal -->

    </div>

    @stack('add-script'){{-- for additional script and defining classs --}}
    @stack('var-script'){{-- for declare variable ins an instance of a class from above --}}
    @stack('upload-script'){{-- the logic how the form will be uploaded --}}
    <script>

      // --------- untuk tombol sidebar 1 [ketika lebar layar > 1024] -----------
      let asideDiv = document.querySelector('aside div')
      let sideList = document.querySelectorAll('.side-list')
      function toogleSidebar(){
        asideDiv.classList.toggle('w-64');
        sideList.forEach(el => {
          el.classList.toggle('hidden')
        })
        document.querySelectorAll('.admin-title').forEach(el => {
          el.classList.toggle('hidden')
        })
      }

      // -------- untuk tombol sidebar 2 [ketika lebar layar < 1024] ---------------
      let overlap = document.querySelector('#overLap');
      let aside =  document.querySelector('aside');
      function toggleSidebar2(){
        //-translate-x-full
       aside.classList.toggle('-translate-x-full');
       overlap.classList.toggle('hidden')
      }

      // --------------- Dfropdown 3 -------------------
      let dropdownItem = document.querySelector('#dropdown-header');
      let btnDropdown = document.querySelector('#btn-dropdown');
      ['click'].forEach(evt => {
        btnDropdown.addEventListener(evt, e => {
          if(evt == 'blur') {
            dropdownItem.classList.add('hidden');
            return;
          }
          dropdownItem.classList.toggle("hidden")
          console.log(e.target)
        })
      })
    </script>
  </body>
</html>

