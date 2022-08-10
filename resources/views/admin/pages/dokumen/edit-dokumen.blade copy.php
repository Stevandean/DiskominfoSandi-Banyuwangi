
            <!--data-->
            <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
              <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
                <span class="font-bold text-xl text-blue-kominfo inline-flex items-center">
                  <svg 
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
                    <polyline points="15 18 9 12 15 6"></polyline>
                  </svg>
                  Edit
                </span>
              </div>
              <hr>
              <form class="p-5" action="" method="post">
                <div class="mb-6"><!--password-->
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Dokumen</label>
                  <input type="password" id="password" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus-within:ring-blue-500 focus-within:outline-blue-500 focus:border-blue-500 block w-full p-2.5 " required><!--border-red-600-->
                  <!-- pesar error -->
                  <p id="filled_error_help" class=" hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
                  <!-- akhir pesar error -->
                </div>
                <div class="mb-6"><!--upload file akan diubah menjadi ifram untuk preview-->
                  <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dokumen</p>
                  <div class="flex justify-center items-center w-full">
                    <label id="drop-area" for="dropzone-file" class=" relative flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer after:absolute  after:inset-0 after:opacity-40">
                      <div class="relative flex flex-col justify-center items-center pt-5 pb-6">
                        <div id="action-desc">
                          <svg aria-hidden="true" class=" mx-auto mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                          <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">klik untuk upload</span> atau drag dan drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400 text-center">hanya PDF (.pdf)</p>
                        </div>
                        <p class="file-info hidden mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">hayoo</span></p>
                      </div>
                      <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                  </div>
                  <!-- pesar error -->
                  <p id="err-upload" class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
                  <!-- akhir pesar error -->
                </div>
                <div class="mb-6">
                  <button class="text-sm bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:ring-blue-300 py-4 px-12 rounded-md w-full sm:w-auto">
                    <div class="flex items-center justify-center h-full table-fixed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right">
                          <line x1="7" y1="17" x2="17" y2="7"></line>
                          <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                       Tambah
                    </div>
                  </button>
                </div>
              </form>
            </div>
