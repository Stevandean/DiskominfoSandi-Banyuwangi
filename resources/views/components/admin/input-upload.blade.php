<div id="input-{{ $formName }}-upload">
    <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $inputName }}</p>
    <div class="flex justify-center items-center w-full">
        <label id="drop-area" for="dropzone-file-{{ $formName }}" class=" relative flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 {{ $isError? "border-red-500" : "" }} border-dashed cursor-pointer after:absolute  after:inset-0 after:opacity-40">
        <div class="relative flex flex-col justify-center items-center pt-5 pb-6">
            <div id="action-desc">
            <svg aria-hidden="true" class=" mx-auto mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
            <div id="wr">
              <p class="mb-2 text-sm text-gray-500 text-center"><span class="font-semibold">klik untuk upload</span> atau drag dan drop</p>
              <p class="text-xs text-gray-500 text-center">{{ $slot }}</p>
            </div>
            <div id="filled-only">
              {{-- <p class="mb-2 text-sm text-gray-500 text-center"><span class="font-semibold">ini adalah input read only</span></p> --}}
              <p class="mb-2 text-sm text-gray-500 text-center"><span class="font-semibold">{{ $infoFileReadOnly }}</span></p>
            </div>
            </div>
            <p class="file-info hidden mb-2 text-sm text-gray-500"><span class="font-semibold">file info</span></p>
        </div>
        <input name="{{ $formName }}" id="dropzone-file-{{ $formName }}" type="file" class="hidden" />
        </label>
    </div>
    
    <!-- pesar error -->
    <!-- <p id="err-upload" class="{{-- $isError?"":"hidden" --}} mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{-- $errMsg --}}</span></p> -->
    <!-- akhir pesar error -->
    
    <!-- error terbaru -->
    <div class="err hidden">
      <p  class="hidden mt-2 text-xs text-red-600 "><span class="font-medium">when error</span></p>
    </div>

</div>

@pushOnce('add-script')
<script>
  class InputUpload{
    
    formError
    formName //nama formnya
    inputType = 'file'
    input //file inputnya
    dropArea 
    actionDesc 
    fileInfo 
    errUpload 
    formInput;
    fileVal; //untuk menyimpan varibel file [file sesungguhnya]
    isFilled
    type;
    extPattern = /\.([0-9a-z]+)(?=[?#])|(\.)(?:[\w]+)$/gmi //regex untuk mengesktak ekstensi
    
    constructor(formName,isFilled, type){
      this.formName = formName;
      this.isFilled = isFilled;
      this.type = type;
      this.main()
    }

    readElement(){
      this.formInput = document.querySelectorAll(`form #input-${this.formName}-upload`)[0];
      this.input = this.formInput.querySelector(`#dropzone-file-${this.formName}`);
      this.dropArea = this.formInput.querySelector('#drop-area');
      this.actionDesc = this.dropArea.querySelector('#action-desc');
      this.fileInfo = this.dropArea.querySelector('.file-info span');
      this.errUpload = this.formInput.querySelector('#err-upload');
      this.formError = this.formInput.querySelector(`.err`);
    }

    error(con, msg=[]){
      if(con){
        this.formError.classList.remove('hidden');
        this.dropArea.classList.add('border-red-300');
        msg.forEach(msg => {
            this.formError.innerHTML += `<p class=" mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">${msg}</span></p>`
        })
      }else{
        this.formInput.querySelector('.err p').classList.add('hidden').innerHTML = '';
        this.dropArea.classList.remove('border-red-300');
      }
    }


    addEvent(){
      this.input.addEventListener('change', function(e){
        // console.log(this.files);
        this.cekFile(this.files);
        // console.log(this.value)
      })
      this.dropArea.addEventListener('dragover', (event) => {
        event.stopPropagation();
        event.preventDefault();
        // Style the drag-and-drop as a "copy file" operation.
        event.dataTransfer.dropEffect = 'copy';
        this.dropArea.classList.add('bg-gray-100', 'border-sky-400')
      });
      this.dropArea.addEventListener('dragleave', function(){
        this.classList.remove('bg-gray-100', 'border-sky-400')
      });
      this.dropArea.addEventListener('drop', (event) => {
        event.stopPropagation();
        event.preventDefault();
        let file = event.dataTransfer.files
        this.cekFile(file, this.isFilled);
      });
    }

    cekExtention(file, type){
      let ext = {
          'image': ['.jpg', '.jpeg', '.jpe', '.jif', '.jfif', '.png'],
          'pdf': ['.pdf']
      }
      if(ext[type]){
          return ext[type].some(ex => {
            if((file).match(this.extPattern) == ex){
              return true;
            }
          })
      }
      return false;
    }

    cekFile(file, isFilled = this.isFilled){
      // if(isFilled) return false; //jika hanya readonly maka akan meloncati functionya

      const fileList = file;
      this.dropArea.classList.remove('bg-gray-100', 'border-sky-400')
      //test 1
      console.log('Test 1 -->',fileList);
      
      if(this.cekExtention(fileList[0].name, this.type)){
        //test 2
        console.log('test 2 -->', fileList[0])

        //tambah nama
        this.fileInfo.innerHTML = fileList[0].name;

        //simpan nilai filelist kedalam varibel untuk dikirim menggunakan AJAX
        this.fileVal = fileList[0];
        
        //ubah tampilan
        this.dropArea.classList.remove('border-red-500')
        this.fileInfo.parentElement.classList.remove('hidden')
        this.actionDesc.classList.add('hidden');
        return;
      }
      //jika gagal maka hapus file
      this.input.value = null;
      //tampilkan pesan gagal
      this.errUpload.innerHTML = `file bukan ${this.type}, mohon masukan file yg sesuai`
      this.errUpload.classList.toggle('hidden')
      this.dropArea.classList.add('border-red-500')
      
      console.log(this.input.value)
    }
    setFilled(val){
      if(val){
        this.dropArea.querySelector('#wr').classList.add('hidden')
        this.dropArea.querySelector('#filled-only').classList.remove('hidden')
      }else{
        this.dropArea.querySelector('#wr').classList.remove('hidden')
        this.dropArea.querySelector('#filled-only').classList.add('hidden')
      }
    }

    setHidden(val){
      console.log(this.formInput)
      console.log(val)
      if(val){
        this.formInput.classList.add('hidden')
        console.log('ini seharusnya menghapusnua')
        return
      }
      this.formInput.classList.remove('hidden')
    }

    main(){
      console.log('test untuk menjalankan class')
      this.readElement();
      this.setFilled(this.isFilled)
      // if(!this.isFilled)
      this.addEvent();
      console.log(this.formInput)
    }
  }

</script>
@endPushOnce

@push('var-script')
    <script>
      const form_{{ $formName ."_file" }} = new InputUpload("{{ $formName }}",{{ $isFilled? 'true' : 'false' }}, "{{ $type }}");
    </script>
@endpush