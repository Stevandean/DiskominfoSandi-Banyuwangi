@extends('admin.layouts.main')

@section('container')

  <h1 class="text-2xl p-5 bg-white rounded-lg border-8 border-yellow-200">
    Hallo, selamat datang kembali admin {{ auth() -> user() -> name }} 🙂🙂🙂
  </h1>

  <h2 class="mt-5">
    <span class="text-2xl font-bold">Terbaru</span>
    <span class="text-sm text-sky-700">*beberapa daftar terbaru setiap field</span>
  </h2>

  <div class="flex flex-wrap gap-6 mt-3"> <!-- flex 2 table (card)-->
    <!-- card tabel dokumen -->
    <div class="grow max-w-full">
      <div class="shadow-md bg-white rounded-lg p-3 pt-4">
        <div class="flex justify-between items-center p-4 pt-1">
          <span class="font-semibold text-lg text-blue-kominfo">Dokumen terbaru</span>

          <span class="sm:hidden inline text-md text-sky-600">
            <svg class="stroke-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </span>
          <span class="hidden sm:inline text-sm text-sky-600">
            Lihat selengkapnya...
          </span>
        </div>
        <hr>
        <div class="overflow-x-auto relative">
          <table class="w-full text-sm text-left text-gray-500 ">
              <tbody>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div> <!-- end overflow relative -->
      </div>
    </div>
    <!-- card tabel berita-->
    <div class="grow max-w-full">
      <div class="shadow-md bg-white rounded-lg p-3 pt-4">
        <div class="flex justify-between items-center p-4 pt-1">
          <span class="font-semibold text-lg text-blue-kominfo">Berita terbaru</span>
          <span class="sm:hidden inline text-md text-sky-600">
            <svg class="stroke-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </span>
          <span class="hidden sm:inline text-sm text-sky-600">
            Lihat selengkapnya...
          </span>
        </div>
        <hr>
        <div class="overflow-x-auto relative">
          <table class="w-full text-sm text-left text-gray-500 ">
              <tbody>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:block">
                        <a href="/berita?category=programing" class="bg-sky-200 hover:bg-sky-300 rounded-full px-2 py-0.5 border border-sky-600 text-blue-900">Informatika</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:block">
                        <a href="/berita?category=programing" class="bg-sky-200 hover:bg-sky-300 rounded-full px-2 py-0.5 border border-sky-600 text-blue-900">Informatika</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:block">
                        <a href="/berita?category=programing" class="bg-sky-200 hover:bg-sky-300 rounded-full px-2 py-0.5 border border-sky-600 text-blue-900">Informatika</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:block">
                        <a href="/berita?category=programing" class="bg-sky-200 hover:bg-sky-300 rounded-full px-2 py-0.5 border border-sky-600 text-blue-900">Informatika</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div> <!-- end overflow relative -->
      </div>
    </div>
  </div><!-- akhir 2 card-->

  <div class="flex flex-wrap gap-6 mt-6"> <!-- flex 2 table (card)-->
    <!-- card Logo kominfo -->
    <div class="basis-full xl:basis-1/4 max-w-full">
      <div class="shadow-md bg-white rounded-lg p-3 pt-4">
        <svg 
          class="max-w-[12rem] xl:max-w-full mx-auto"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 248.43 246.93" xmlns:v="https://vecta.io/nano">
          <path d="M126.92 164.657s3.288 3.057 2.68 4.78c-1.395 3.964-7.64 5.806-11.696 4.71-6.474-1.75-12.394-9.188-12.336-15.894.085-9.842 10.15-17.808 18.504-23.01 8.6-5.355 19.526-6.81 29.654-6.643 11.027.184 22.795 2.27 32.027 8.303 5.138 3.358 9.38 8.67 11.387 14.47 1.138 3.288 0 10.438 0 10.438s9.06-12.508 12.336-19.453c3.904-8.278 9.637-17.01 8.54-26.096-.502-4.16-3.253-8.2-6.643-10.676-10.872-7.908-25.705-9.28-39.142-9.726-13.89-.46-28.015 2.5-41.04 7.354-8.873 3.3-17.56 7.965-24.435 14.47-7.743 7.326-15.164 16.24-17.792 26.57-1.704 6.695-1.34 14.537 1.898 20.64 2.924 5.51 8.684 9.536 14.47 11.862 5.667 2.278 12.455 3.3 18.267 1.423 3.845-1.24 9.125-3.79 9.252-7.83.187-5.947-5.93-5.694-5.93-5.694z" fill="#18d1ff"/><path d="M123.7 168.157s-.858-2.645-.125-3.594c1.19-1.537 3.87-1.954 5.7-1.272 2.642 1 5.007 4 5.012 6.82.006 3.622-3.176 7.137-6.405 8.778-7.05 3.583-16.242 2.563-23.723 0-6.345-2.173-12.56-6.518-15.894-12.336-4.84-8.44-5.97-19.46-3.796-28.942 2.22-9.684 9.432-17.796 16.37-24.91 7.458-7.648 16.483-14.13 26.333-18.267 11.283-4.737 23.855-6.003 36.06-6.88 10.5-.754 21.21-.536 31.553 1.423 6.487 1.23 13.05 3.058 18.74 6.405 2.238 1.317 5.783 5.22 5.783 5.22s-1.556-19.97-4.596-29.417c-2.633-8.18-5.428-17.057-11.624-23.01-4.387-4.216-10.657-6.302-16.606-7.575-11.3-2.416-23.274-1.835-34.635.22-13.272 2.4-26.097 7.57-37.988 13.937-11.13 5.96-21.613 13.465-30.574 22.36-7.34 7.287-14.262 15.476-18.504 24.91-4.274 9.505-6.475 20.18-6.405 30.602.056 8.345 1.782 16.942 5.456 24.435 3.437 7.01 8.945 13.037 14.946 18.03 5.222 4.344 11.366 7.734 17.792 9.934 6.054 2.072 12.59 3.24 18.98 2.876 7.475-.425 15.982-1.01 21.682-5.863 3.33-2.836 5.737-7.6 5.398-11.96-.238-3.055-2.427-6.08-5.032-7.694-2.845-1.764-6.74-2.85-9.974-1.982-3 .804-5.516 2.413-5.895 4.92-.18 1.19 1.984 2.833 1.984 2.833z" fill="#0166fe"/><g fill="#0100cc"><path d="M124.7 170.277s-4.6-.93-5.798-2.65c-1.72-2.487-1.6-5.994.088-8.5 2.78-4.126 8.733-5.707 13.704-5.9 8.405-.345 18.675 1.48 23.915 8.06 4.373 5.493 5.257 14.697 2.082 20.96-3.186 6.285-11.454 8.726-18.204 10.748-10.566 3.165-22.156 3.33-33.052 1.612-11.256-1.775-22.25-6.153-31.976-12.1-10.716-6.544-20.543-15.115-27.945-25.258-7.94-10.88-13.868-23.635-16.66-36.8-2.525-11.917-2.173-24.6.27-36.543A107.23 107.23 0 0 1 46.977 46.01c5.857-8.73 13.734-16.2 22.302-22.302 7.704-5.48 16.57-9.34 25.527-12.36 7.273-2.453 14.905-4.163 22.57-4.568 9.523-.503 19.173.62 28.482 2.687 7.8 1.732 15.5 4.325 22.57 8.06 8.33 4.407 22.84 16.66 22.84 16.66s-29.422-2.812-43.8-.27c-16.94 2.997-33.665 9.068-48.365 18.003-10.946 6.653-20.6 15.7-28.482 25.795-6.313 8.085-11.336 17.384-14.5 27.14-3.218 9.9-4.918 20.52-4.3 30.9.42 7.026 2.26 14.108 5.374 20.42 3.106 6.3 7.623 12.023 12.898 16.66a71.93 71.93 0 0 0 23.377 13.704c6.918 2.436 14.43 3.316 21.765 3.224 6.272-.08 12.956-.368 18.54-3.224 4.68-2.394 9.686-6 11.285-11.017 1.302-4.075.513-9.393-2.286-12.63-2.762-3.194-7.786-4.03-12.008-4.03-3.1-.001-6.572.817-8.815 2.956-1.252 1.194-1.897 2.727-1.44 4.395.52 1.892 4.194 4.07 4.194 4.07l.003-.003zm-84.232 37.68l-10.54 10.122-3.947 3.993q5.618 6.408 11.283 12.77l3.76 4.643v.232l-2.554-.14-2.6.14q-.743-1.068-1.58-2.136-.8-1.114-1.625-2.1l-10.122-11.84q-.232-.185-.604-.232-.186.044-.186.093v16.204l-2.043-.14-2.043.14v-31.76l2.043.14 2.043-.14v14.347q.046.185.418.093.418-.093.8-.372.37-.325 1.532-1.44.418-.418.882-.836l11.425-11.79 1.857.14z"/><use xlink:href="#B"/><path d="M114.712 207.957h.975q.975 9.24 1.207 11.33.743 6.825 1.207 10.633.5 3.76 1.347 9.797l-2.182-.14-2.182.14q-.418-4.643-.8-8.87-.325-4.225-.8-8.358-.418-4.132-.8-6.733-2.832 5.107-4.922 8.915-2.414 4.457-4.04 7.708-1.764 3.575-3.204 6.825h-.5l-2.554-5.247q-1.672-3.482-2.972-6-1.3-2.554-3.204-6.175-1.625-3.018-3.204-6.036-.8 6.64-1.532 13.418-.743 6.78-.743 10.54l-1.625-.14-1.672.14q.975-6.036 2.554-17.133 1.58-11.144 1.904-14.626h1.2q2.414 4.736 3.947 7.754 1.857 3.575 4.4 8.218 2.786 5.06 4.782 8.358 6.686-12.165 13.372-24.33zm11.474 31.777v-31.76l2.043.14 2.043-.14v31.76l-2.043-.14zm40.064-31.777v31.76h-1.393l-2.414-2.832-20.058-22.194h-.464v25.027l-1.3-.14-1.3.14v-31.76h1.8l22.055 23.912h.464v-23.912l1.3.14zm8.7 31.777v-31.76h16.483l-.14 1.393.14 1.393q-1.393-.28-2.275-.372-.882-.14-1.904-.14l-4.643-.093h-3.575V221.8h7.197q.882 0 2.322-.093 1.486-.14 1.8-.14l-.14 1.207.14 1.3q-.836 0-2.322-.093-1.486-.14-1.8-.14h-7.197v15.88l-2.043-.14z"/><use xlink:href="#B" x="152.206"/></g><defs ><path id="B" d="M73.994 223.454q0-3.157-.604-5.572-.604-2.46-2.322-4.643-1.718-2.182-4.272-3.343-2.507-1.16-5.386-1.16-6.083 0-9.61 4.272-3.482 4.225-3.482 11.33 0 6.825 3.715 10.726 3.482 3.622 8.96 3.622 6.547 0 10.168-5.665 2.832-4.41 2.832-9.565zm-13.14 16.76q-7.754 0-12.443-4.457-4.643-4.504-4.643-11.98 0-7.475 4.968-12.12 4.782-4.457 12.212-4.457 7.243 0 12.072 3.76 5.525 4.318 5.525 12.12 0 7.708-4.922 12.443-4.922 4.7-12.77 4.7z"/></defs>
        </svg>
      </div>
    </div>
    <!-- card tabel Galeri-->
    <div class="grow max-w-full">
      <div class="shadow-md bg-white rounded-lg p-3 pt-4">
        <div class="flex justify-between items-center p-4 pt-1">
          <span class="font-semibold text-lg text-blue-kominfo">Galeri terbaru terbaru</span>
          <span class="sm:hidden inline text-md text-sky-600">
            <svg class="stroke-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </span>
          <span class="hidden sm:inline text-sm text-sky-600">
            Lihat selengkapnya...
          </span>
        </div>
        <hr>
        <div class="overflow-x-auto relative">
          <table class="w-full text-sm text-left text-gray-500 ">
              <tbody>
                  <tr class="bg-white border-b ">
                      <td class="hidden lg:block py-4 px-6">
                        <img src="../img/zidan.png" class="w-16 mx-auto" alt="" srcset="">
                      </td>
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:table-cell">
                        <a href="/berita?category=programing" class="bg-sky-200 hover:bg-sky-300 rounded-full px-2 py-0.5 border border-sky-600 text-blue-900">gambar</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <td class="hidden lg:block py-4 px-6">
                        <img src="../img/cliff.jpg" class="w-16 mx-auto" alt="" srcset="">
                      </td>
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:table-cell">
                        <a href="/berita?category=programing" class="bg-sky-200 hover:bg-sky-300 rounded-full px-2 py-0.5 border border-sky-600 text-blue-900">gambar</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                      <td class="hidden lg:block py-4 px-6">
                        <img src="../img/cliff.jpg" class="w-16 mx-auto" alt="" srcset="">
                      </td>
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="py-4 px-6">
                          15 - maret - 2022
                      </td>
                      <td class="py-4 px-6 hidden sm:table-cell">
                        <a href="/berita?category=programing" class="bg-green-200 hover:bg-green-300 rounded-full px-2 py-0.5 border border-green-600 text-lime-900">Video</a>
                      </td>
                      <td class="py-4 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div> <!-- end overflow relative -->
      </div>
    </div>
  </div><!-- akhir 2 card-->

  <div class="flex flex-wrap shadow-md mt-6 divide-x-2 bg-white pt-4 rounded-md">
    <div class="grow xl:basis-1/2 p-3 max-w-full">
      <div class="flex justify-between items-center p-4 pt-1">
        <span class="font-semibold text-lg text-blue-kominfo">Link terbaru terbaru</span>
        <span class="sm:hidden inline text-md text-sky-600">
          <svg class="stroke-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </span>
        <span class="hidden sm:inline text-sm text-sky-600">
          Lihat selengkapnya...
        </span>
      </div>
      <hr>
      <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 ">
            <tbody>
                <tr class="bg-white border-b ">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 px-6">
                        https://ini-adalah-link-dummy/sub-1/sub...
                    </td>   
                    <td class="py-4 px-6">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </td>
                </tr>
                <tr class="bg-white border-b ">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 px-6">
                        https://ini-adalah-link-dummy/sub-1/sub..
                    </td>   
                    <td class="py-4 px-6">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </td>
                </tr>
                <tr class="bg-white border-b ">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 px-6">
                        https://ini-adalah-link-dummy/sub-1/sub..
                    </td>   
                    <td class="py-4 px-6">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </td>
                </tr>
                <tr class="bg-white border-b ">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 px-6">
                        https://ini-adalah-link-dummy/sub-1/sub...
                    </td>   
                    <td class="py-4 px-6">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </td>
                </tr>
            </tbody>
        </table>
      </div> <!-- end overflow relative -->
    </div>
    <div class="grow xl:basis-1/2 p-3 max-w-full">
      <div class="flex justify-between items-center p-4 pt-1">
        <span class="font-semibold text-lg text-blue-kominfo">Layanan terbaru terbaru</span>
        <span class="sm:hidden inline text-md text-sky-600">
          <svg class="stroke-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </span>
        <span class="hidden sm:inline text-sm text-sky-600">
          Lihat selengkapnya...
        </span>
      </div>
      <hr>
      <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 ">
          <tbody>
              <tr class="bg-white border-b ">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                      Apple MacBook Pro 17"
                  </th>
                  <td class="py-4 px-6">
                      https://ini-adalah-link-dummy/sub-1/sub...
                  </td>   
                  <td class="py-4 px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </td>
              </tr>
              <tr class="bg-white border-b ">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                      Apple MacBook Pro 17"
                  </th>
                  <td class="py-4 px-6">
                      https://ini-adalah-link-dummy/sub-1/sub..
                  </td>   
                  <td class="py-4 px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </td>
              </tr>
              <tr class="bg-white border-b ">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                      Apple MacBook Pro 17"
                  </th>
                  <td class="py-4 px-6">
                      https://ini-adalah-link-dummy/sub-1/sub..
                  </td>   
                  <td class="py-4 px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </td>
              </tr>
              <tr class="bg-white border-b ">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                      Apple MacBook Pro 17"
                  </th>
                  <td class="py-4 px-6">
                      https://ini-adalah-link-dummy/sub-1/sub...
                  </td>   
                  <td class="py-4 px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </td>
              </tr>
          </tbody>
        </table>
      </div> <!-- end overflow relative -->
    </div>
  </div>
            
@endsection


  
