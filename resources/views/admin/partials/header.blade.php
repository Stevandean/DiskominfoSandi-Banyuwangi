<div class="header border-b bg-white w-full p-2">
    <div class="flex justify-between">
      <div class="inline-flex items-center">
        <!-- &#x1F5D9; -->
        <button class="text-slate-600 text-2xl w-10 h-10 hidden lg:block" onclick="toogleSidebar()">&#9776;</button>
        <button class="text-slate-600 text-2xl w-10 h-10 lg:hidden" onclick="toggleSidebar2()">&#9776;</button>
        <h1 class="text-lg md:text-2xl font-semibold">{{ $title }}</h1>
      </div>

      <!-- ## DROP DOWN ## -->
      <div class="relative inline-block text-left">
        <div>
          <button id="btn-dropdown" type="button"  class="border border-gray-300 rounded-full inline-flex justify-center w-full px-4 py-2 bg-white text-sm font-medium text-gray-700 " id="menu-button" aria-expanded="true" aria-haspopup="true"> 
            {{ auth() -> user() -> name }}
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div id="dropdown-header" class="hidden origin-top-right z-20 absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
          <div class="py-1" role="none">
            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
            <a href="#" class="text-gray-700 hover:bg-gray-200 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">{{ auth() -> user() -> name }}</a>
            <form action="/admin/logout" method="post">
              @csrf
              <button type="submit" class="text-gray-700 hover:bg-gray-200 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>