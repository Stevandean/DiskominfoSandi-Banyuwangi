<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  @stack('additional-css')
</head>

{{-- dibuat pecabangan uspaya halaman home dapat digunakan --}}
<body @if(isset($title) && $title == 'home') class="bg-stone-50 transition-all ease-in duration-500" @endif> 

  {{-- class wapper untuk menjadkan navbar menjaduh --}}
  <div class="min-h-screen">
    @include('partials.navbar')
  
    {{-- konten utama --}}
    @yield('container')
  </div>
  @include('partials.footer')




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