@extends('admin.layouts.main')

@section('container')
  <div class="flex justify-between flex-wrap xl:flex-nowrap gap-2 mb-7"> <!-- tool bar-->
    <form class="xl:basis-1/2 w-full px-2"> <!-- pencarian dan select -->
      <div class="flex flex-wrap sm:flex-nowrap gap-1">
        <select id="countries" class="sm:basis-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
          <option selected>semua</option>
          <option value="gambar">gambar</option>
          <option value="video">video</option>
        </select>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 focus:bg-white bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus-within:outline-0" placeholder="tekan cari bila hanya mencari kategori" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
        </div>
      </div>
    </form>
    <div class="mx-auto xl:mx-0"> <!-- untuk pagination -->
      <nav class="h-full">
        <ul class="h-full inline-flex items-stretch">
          <li>
            <a href="#" class="hidden sm:inline-block h-full py-4 px-5 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
            <a href="#" class="sm:hidden inline-block h-full py-4 px-5 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">&laquo;</a>
          </li>
          <li>
            <a href="#" class="h-full inline-block py-4 px-5 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
          </li>
          <li>
            <a href="#" class="h-full inline-block py-4 px-5 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
          </li>
          <li>
            <a href="#" class="h-full inline-block py-4 px-5 leading-tight text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 ">3</a>
          </li>
          <li>
            <a href="#" class="h-full inline-block py-4 px-5 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
          </li>
          <li>
            <a href="#" class="h-full inline-block py-4 px-5 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
          </li>
          <li>
            <a href="#" class="h-full hidden sm:inline-block py-4 px-5 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">Next</a>
            <a href="#" class="h-full sm:hidden inline-block py-4 px-5 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">&raquo;</a>
          </li>
        </ul>
      </nav>
      
    </div>
  </div><!--akhir toolbar-->

  <!--data-->
  <div class="shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <span class="font-bold text-xl text-blue-kominfo">Galeri 
        <span class="text-blue-900 bg-blue-300 text-lg font-normal px-7 rounded-2xl">15 item</span>
      </span>
      <button class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-2 px-8 rounded-md w-full sm:w-auto">
        <div class="flex items-center justify-center h-full table-fixed">
          <svg 
            class="inline"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
          </svg> 
          Tambah
        </div>
      </button>
    </div>
    <hr>
    <div class="overflow-x-auto relative">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="py-3 px-6">
                      #
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Thumbnail
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Judul
                  </th>
                  <th scope="col" class="py-3 px-6">
                      tanggal
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Jenis
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                  </th>
                  <td class="py-4 px-6 ">
                      <img class="w-24" src="../img/cliff.jpg" alt="">
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                      pantai di selatan
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Gambar</span>
                    <span class=" hidden bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Video</span>
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
              <tr class="bg-gray-50 border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                  </th>
                  <td class="py-4 px-6 ">
                      <img class="w-24" src="../img/cliff.jpg" alt="">
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                      pantai di selatan
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Gambar</span>
                    <span class=" hidden bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Video</span>
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                  </th>
                  <td class="py-4 px-6 ">
                      <img class="w-24" src="../img/cliff.jpg" alt="">
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                      pantai di selatan
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Gambar</span>
                    <span class=" hidden bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Video</span>
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
              <tr class="bg-gray-50 border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                  </th>
                  <td class="py-4 px-6 ">
                      <img class="w-24" src="../img/cliff.jpg" alt="">
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                      pantai di selatan
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Gambar</span>
                    <span class=" hidden bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Video</span>
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                  </th>
                  <td class="py-4 px-6 ">
                      <img class="w-24" src="../img/cliff.jpg" alt="">
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                      pantai di selatan
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Gambar</span>
                    <span class=" hidden bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Video</span>
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
              <tr class="bg-gray-50 border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                  </th>
                  <td class="py-4 px-6 ">
                      <img class="w-24" src="../img/cliff.jpg" alt="">
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                      pantai di selatan
                  </td>
                  <td class="py-4 px-6">
                    11 - Maret - 1966
                  </td>
                  <td class="py-4 px-6">
                    <span class="bg-amber-200 rounded-full px-8 py-0.5 border border-amber-600 text-amber-900">Gambar</span>
                    <span class=" hidden bg-lime-200 rounded-full px-8 py-0.5 border border-lime-600 text-lime-900">Video</span>
                  </td>
                  
                  <td class="py-4 px-6">
                    <div class="inline-flex">
                      <!-- delete -->
                      <a href="#" class="btn-s inline-block rounded-full bg-red-200 hover:bg-red-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-red-300 transition-all">
                        <svg 
                          class=" fill-red-700 "
                          fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20px"><path d="M 6.496094 1 C 5.675781 1 5 1.675781 5 2.496094 L 5 3 L 2 3 L 2 4 L 3 4 L 3 12.5 C 3 13.324219 3.675781 14 4.5 14 L 10.5 14 C 11.324219 14 12 13.324219 12 12.5 L 12 4 L 13 4 L 13 3 L 10 3 L 10 2.496094 C 10 1.675781 9.324219 1 8.503906 1 Z M 6.496094 2 L 8.503906 2 C 8.785156 2 9 2.214844 9 2.496094 L 9 3 L 6 3 L 6 2.496094 C 6 2.214844 6.214844 2 6.496094 2 Z M 4 4 L 11 4 L 11 12.5 C 11 12.78125 10.78125 13 10.5 13 L 4.5 13 C 4.21875 13 4 12.78125 4 12.5 Z M 5 5 L 5 12 L 6 12 L 6 5 Z M 7 5 L 7 12 L 8 12 L 8 5 Z M 9 5 L 9 12 L 10 12 L 10 5 Z" />
                          </svg>
                      </a>  
                
                      <!-- ini untuk icon edit -->
                      <a href="#" class="btn-s inline-block rounded-full bg-amber-200 hover:bg-amber-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-amber-300 transition-all">
                        <svg
                          class="fill-amber-700"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" height="20px">
                          <g id="surface125014719">
                          <path  d="M 18.398438 4.398438 L 19.601562 5.601562 L 6.199219 19 L 5 19 L 5 17.800781 L 18.398438 4.398438 M 18.398438 2 C 18.101562 2 17.898438 2.101562 17.699219 2.300781 L 3 17 L 3 21 L 7 21 L 21.699219 6.300781 C 22.101562 5.898438 22.101562 5.300781 21.699219 4.898438 L 19.101562 2.300781 C 18.898438 2.101562 18.699219 2 18.398438 2 Z M 18.398438 2 "/>
                          <path  d="M 14.347656 5.6875 L 15.761719 4.273438 L 19.226562 7.738281 L 17.8125 9.152344 Z M 14.347656 5.6875 "/>
                          </g>
                        </svg>
                      </a> 
                      
                      <!-- ini untuk icon views -->
                      <a href="#" class="btn-s inline-block rounded-full bg-green-200 hover:bg-green-400 p-2 hover:fill-white mx-1 active:ring-2 active:ring-green-300 transition-all">
                        <svg 
                          class="stroke-green-700 "
                          height="20px" width="20px"
                          viewBox="0 0 80 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M76 39.5C76 19.6177 59.8823 3.5 40 3.5C20.1177 3.5 4 19.6177 4 39.5" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle class="fill-green-700" cx="40" cy="35" r="16" />
                        </svg>
                      </a> 
                    </div>
                  </td>
              </tr>
          </tbody>
      </table>
    </div>
  </div>
    
@endsection





  
