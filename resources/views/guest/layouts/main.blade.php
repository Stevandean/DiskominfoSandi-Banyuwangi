<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  {{-- <link rel="stylesheet" href="/css/output.css"> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <!-- Link Swiper's CSS -->
  <link
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <style>
    *::-webkit-scrollbar-track{
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: transparent;
      border-radius: 10px;
      border: 3px solid white;
    }

    *::-webkit-scrollbar{
      width: 6px;
      height: 4px;
    }
    *::-webkit-scrollbar-thumb{
      width: 4px;
      height: 4px;
      background-color: #686868;
      border-radius: 10px;
      transition: all 150ms;
    }
    *::-webkit-scrollbar-thumb:hover{
      background-color: #444343;
      border-radius: 0PX;
    }

  </style>
  @stack('additional-css')
</head>

{{-- dibuat pecabangan uspaya halaman home dapat digunakan --}}
<body> 

  {{-- class wapper untuk menjadikan footer mejadi kebawah --}}
  <div class="min-h-screen">
    @include('guest.partials.navbar')
  
    {{-- konten utama --}}
    @yield('container')
    @include ('guest.partials.sampek-atas')
  </div>
  @include('guest.partials.footer')




  {{-- untuk script tambahan --}}
  @stack('script-end')
  {{-- scritp untuk navbar --}}
  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>
</body>

</html>