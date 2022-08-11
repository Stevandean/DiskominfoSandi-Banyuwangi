<div>
    <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $inputName }}</p>
    <div class="flex justify-center items-center w-full">
        <label id="drop-area" for="dropzone-file" class=" relative flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 {{ $isError? "border-red-500" : "" }} border-dashed cursor-pointer after:absolute  after:inset-0 after:opacity-40">
        <div class="relative flex flex-col justify-center items-center pt-5 pb-6">
            <div id="action-desc">
            <svg aria-hidden="true" class=" mx-auto mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
            @if(!$isReadOnly)
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">klik untuk upload</span> atau drag dan drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400 text-center">{{ $slot }}</p>
            @else
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">ini adalah input read only</span></p>
            @endif
            </div>
            <p class="file-info hidden mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">file info</span></p>
        </div>
        <input name="source" id="dropzone-file" type="file" class="hidden" />
        </label>
    </div>
    
    <!-- pesar error -->
    <p id="err-upload" class="{{ $isError? "" : "hidden"}} mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{ $errMsg }}</span></p>
    <!-- akhir pesar error -->
    
</div>

@push('add-script')
<script>
  class InputUpload{
    
    inpFile
    dropArea 
    actionDesc 
    fileInfo 
    errUpload 
    form;
    fileVal; //untuk menyimpan varibel file
    isReadOnly = {{ $isReadOnly ? 'true' : 'false'}};
    extPattern = /\.([0-9a-z]+)(?=[?#])|(\.)(?:[\w]+)$/gmi //regex untuk mengesktak ekstensi
    

    readElement(){
      
      this.inpFile = document.querySelector('#dropzone-file');
      this.dropArea = document.querySelector('#drop-area');
      this.actionDesc = this.dropArea.querySelector('#action-desc');
      this.fileInfo = this.dropArea.querySelector('.file-info span');
      this.errUpload = document.querySelector('#err-upload');
      this.form = document.querySelectorAll('form#form-upload')[0];
    }

    addEvent(){
      this.inpFile.addEventListener('change', function(e){
        // console.log(this.files);
        cekFile(this.files);
        // console.log(this.value)
      })
      this.dropArea.addEventListener('dragover', (event) => {
        event.stopPropagation();
        event.preventDefault();
        // Style the drag-and-drop as a "copy file" operation.
        event.dataTransfer.dropEffect = 'copy';
        dropArea.classList.add('bg-gray-100', 'border-sky-400')
      });
      this.dropArea.addEventListener('dragleave', function(){
        this.classList.remove('bg-gray-100', 'border-sky-400')
      });
      this.dropArea.addEventListener('drop', (event) => {
        event.stopPropagation();
        event.preventDefault();
        let file = event.dataTransfer.files
        cekFile(file);
      });
    }

    cekExtention(file, type){
      let ext = {
          'image': ['.jpg', '.jpeg', '.jpe', '.jif', '.jfif', '.png'],
          'pdf': ['.pdf']
      }
      if(ext[type]){
          return ext[type].some(ex => {
            if((file).match(extPattern) == ex){
              return true;
            }
          })
      }
      return false;
    }

    cekFile(file, isReadOnly = this.isReadOnly){
      if(isReadOnly) return false; //jika hanya readonly maka akan meloncati functionya

      const fileList = file;
      dropArea.classList.remove('bg-gray-100', 'border-sky-400')
      //test 1
      console.log('Test 1 -->',fileList);
      
      if(cekExtention(fileList[0].name, "{{ $type }}")){
        //test 2
        console.log('test 2 -->', fileList[0])

        //tambah nama
        fileInfo.innerHTML = fileList[0].name;

        //simpan nilai filelist kedalam varibel untuk dikirim menggunakan AJAX
        fileVal = fileList[0];
        
        //ubah tampilan
        dropArea.classList.remove('border-red-500')
        fileInfo.parentElement.classList.remove('hidden')
        actionDesc.classList.add('hidden');
        return;
      }
      //jika gagal maka hapus file
      inpFile.value = null;
      //tampilkan pesan gagal
      errUpload.innerHTML = "file bukan pdf, mohon masukan file yg sesuai"
      errUpload.classList.toggle('hidden')
      dropArea.classList.add('border-red-500')
      
      console.log(inpFile.value)
    }

    main(){
      console.log('test untuk menjalankan class')
      this.readElement();
      console.log(this.inpFile)
      this.addEvent();
    }
  }

  // InputUpload.main();
  let upl = new InputUpload();
  upl.main();
</script>
@endpush