@extends('admin.layouts.main')

@section('container')
  <!--data-->
  <div class="relative md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <div class="inline-block w-full text-sm font-medium text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <a href="/admin/galeri" class="static sm:absolute mb-2 font-bold text-xl text-blue-kominfo inline-flex items-center">
          <svg 
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
          Edit {{ $gallery->title }}
        </a>
        <x-admin.tab-radio active="{{ $gallery->type }}" :is-read-only=true />
      </div>
    </div>
    <form id="form-upload" class="p-5" action="/admin/galeri" method="post">
      @csrf
      <input id="old-source" type="hidden" name="oldSource" value="{{ $gallery->source }}">
      <div class="mb-6">
        <x-admin.input input-name="Judul" form-name="title" input-value="{{ $gallery->title }}" />
      </div>
      <div class="mb-6">
        <x-admin.input input-name="Source" form-name="source" input-value="{{ $gallery->source }}" />
      </div>
      <div id="wrp" class="mb-6">
        <x-admin.input-upload infoFileReadOnly="{{ $gallery->source }}" type="image" input-name="File Gambar" form-name="source" :is-filled=true :is-error=false >
          hanya file gambar (.jpg, .jpeg, .png, etc ) max 10mb, untuk video bisa dimasukan kedalam input text
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.body-editor input-value="{{ strip_tags($gallery->body) }}" input-name="Body" form-name="body" />
      </div>
      <div class="mb-6">
        <x-admin.form-button btn-name="send" :is-ajax=true>
          Ubah
        </x-admin.form-button>
      </div>
    </form>
  </div>
@endsection

@push('upload-script')
    <script>
      // ------- test untuk error -----------
      
      let title
      let type
      let source
      let body
      let form = document.querySelector('form#form-upload');
      let oldSource = document.querySelector('#old-source').value;
      let data = new FormData();


      //secara default source akan dibuat kosong
      // jadi ketika ada data yang dimasukan, baru nilanya akan beisi dan dapat digunakan untuk menimpa data yg ada
      //jadi seumpama user tidak menginputkan data, maka data akan tetap ada

      //untuk memnetukan form tergantung tipenya
      if(TabType.value == 'image'){
          form_source_file.setHidden(false)
          form_source_text.setHidden(true)
        }else{
          form_source_file.setHidden(true)
          form_source_text.setHidden(false)
      }


      //untuk menangani bila gerdapat error yg dilempar
      function handleError(err){
        let keys = Object.keys(err.errors);
        let values = Object.values(err.errors);

        keys.forEach(key => {
          switch(key){
            case 'title' :
              form_title_text.error(true, err.errors[key]);
              break;
            case 'slug' :
              form_slug_text.error(true, err.errors[key]);
              break;
            case 'source' :
              TabType.value == 'image'
              ? form_source_file.error(true, err.errors[key])
              : TabType.value == 'video' ? form_source_text.error(true, err.errors[key])
                : console.error('ada error dengan type saat melakukan validasi')
              break;
            default :
              console.error('key tidak sesuai, harap masukan yg sesuai');
          }
        });
      }

      //untuk mengisi form
      function fillForm(){
        title = form_title_text.input.value
        body = form_body_editor.input.value
        type = TabType.value
        if(TabType.value == 'image'){
          if(typeof form_source_file.fileVal != "undefined"){
            // source = form_source_file.fileVal || ""
            data.set('source', form_source_file.fileVal);
          }else{
            source = "";
          }
        }else if(TabType.value == 'video'){
          source = form_source_text.input.value || ""
          data.set('source',form_source_text.input.value );
        }

        data.set('_token', '{{csrf_token()}}');
        data.set('title', title);
        data.set('type', type);
        data.set('body', body);
        data.set('oldSource', oldSource);
        data.set('_method', 'PUT');

      }

      //untukmelakukan upload
      function upload(){
        fetch('/admin/galeri/{{ $gallery->id }}',{
          method: 'POST',
          headers:{
            // "X-CSRF-Token": "{{ csrf_token() }}",
            'Accept': 'application/json',
            // 'Content-Type': 'multipart/form-data'
          },
          mode: 'same-origin',
          body: data
        })
        .then(async res => {
          return [res.status, await res.json()]
        })
        .then(res => {
          console.log(res)
          if(res[1].success){
            window.location = '/admin/galeri'
          }else if(res[0] == 422){
            handleError(res[1]);
          }
        })
        .finally(() => btn_send.setLoading(false))
        .catch(err => console.error(err));
      }

      //event bila form di kirim (akan melakuakn upload)
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        fillForm()
        
        upload();
      })
    </script>
    
@endpush

{{-- 
  ## dokumentasi no 1 ##
  bila akan menggunakan ajax request, perlu diketahui bahwa laravel tidak
  bisa secara langsung megirimkan hasil dari return controllernya.

  perlu diproses untuk menjadi json dahulu ataupun bentuk lainya yg saya tidak ketahui caranya. 
  jadi bila ingin mengecek data, pastikan controllernya mereturn dalam bentuk json.
  
  bila tidak maka laravel hanya akan mereturn response object.
  ini yang membuat saya pusing 2 hari untuk menemukan solusinya :).
  
  
  ## doumentasi no 2 ##
  lebih baik header tidak diinputkan sendiri, karena browser nanti yang akan 
  memnetukan secara itimastis jenis formnya. bila menambahahi header 1 saja yg tidak perlu
  maka akan menjadikan sebuah error, karena semua key yang beruhubungan dari header harus diisi manual.
  berikut lebih jelasnya:
  https://stackoverflow.com/questions/40561738/php-message-warning-missing-boundary-in-multipart-form-data-post-data-in-unknow


  ## dokumentasi no 3 ##
  karena saya mengharapkan berupa json yng dikembalikan maka akan saya isi bahwa yang akan saya
  terima yaitu json (accept: application/json). hal ini supaya error saat validasi dapat diterima.
  

  ## dokumentasi no 4 ##
  suapya data yang dihasilkan dari error validasi tidak menghasilkan error di fetch request,
  maka perlu dikakukan untuk penangkapan error.
  stackoverflow:
  https://stackoverflow.com/questions/33137946/laravel-ajax-422-unprocessable-entity-even-when-token-is-matching 


  ## dokumentasi no 5 ##
  sekarang hasil yang ada dari backend laravel sudah berupa JSON, jadi saya akan menggunakan js sebagai 
  handlernya.
  
  --}}


  
