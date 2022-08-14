@extends('admin.layouts.main')

@section('container')
  <!--data-->
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <a href="/admin/galeri" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Tambah Galeri yang baru
      </a>
    </div>
    <hr>
    <form id="form-upload" class="p-5" action="/admin/galeri" method="post">
      @csrf
      <div class="mb-6">
        <x-admin.input inputName="Judul" formName="title" />
      </div>
      <div class="mb-6"><!--password-->
        <x-admin.input inputName="Slug" formName="slug" />
      </div>
      <div class="mb-6">
        <x-admin.input-select inputName="Tipe" formName="type" info="test" >
          <option value="image" selected>Gambar</option>
          <option value="video">Video</option>
        </x-admin.input-select>
      </div>
      <div class="mb-6">
        <x-admin.input inputName="Source" formName="source" />
      </div>
      <div id="wrp" class="mb-6">
        <x-admin.input-upload type="image" inputName="File Gambar" formName="source" :isReadOnly=false :isError=false >
          hanya file gambar, untuk video bisa dimasukan kedalam input text
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.body-editor inputName="Body" formName="body" />
      </div>
      <div class="mb-6">
        <x-admin.form-button :isAjax=true>
          tambah
        </x-admin.form-button>
      </div>
    </form>
  </div>
@endsection

@push('upload-script')
    <script>

      let title
      let slug
      let type
      let source
      let body
      let form = document.querySelector('form#form-upload');
      let data = new FormData(form);

      //secara default gambar selected dan form text source hidden
      source = form_source_file.fileVal
      form_source_text.setHidden(true)

      //untuk membuat elemen source menjadi dinamis
      form_type_select.input.addEventListener('change', (e)=> {
        console.log(e.target.value)
        if(e.target.value == 'image'){
          form_source_file.setHidden(false)
          form_source_text.setHidden(true)
        }else{
          form_source_file.setHidden(true)
          form_source_text.setHidden(false)
        }
      });

      //untuk mengisi form
      function fillForm(){
        title = form_title_text.input.value
        slug = form_slug_text.input.value
        body = form_body_editor.input.value 
        type = form_type_select.input.value
        if(form_type_select.input.value == 'image'){
          source = form_source_file.fileVal || ""
        }else if(form_type_select.input.value == 'image'){
          source = form_source_text.input.value || ""
        }

        data.set('_token', '{{csrf_token()}}');
        data.set('title', title);
        data.set('slug', slug);
        data.set('type', type);
        data.set('source', source);
        data.set('body', body);
      }

      //untukmelakukan upload
      console.log('ini adalah console..og sebelum upload')
      function upload(){
        fetch('/admin/galeri',{
          method: 'POST',
          headers:{
            // "X-CSRF-Token": "{{ csrf_token() }}",
            'Accept': 'application/json',
            // 'Content-Type': 'multipart/form-data'
          },
          mode: 'same-origin',
          body: data
        })
        .then(res => res.json())
        .then(res => {
          console.log(res)
          if(res.success){
            window.location = '/admin/galeri'
          }
        })
        .catch(err => console.error(err));
      }

      //event bila form di kirim (akan melakuakn upload)
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        fillForm()
        console.log(source);
        
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
  terima yaitu json. hal ini supaya error saat validasi dapat diterima.
  

  ## dokumentasi no 4 ##
  suapya data yang dihasilkan dari error validasi tidak menghasilkan error di fetch request,
  maka perlu dikakukan untuk penangkapan error.
  stackoverflow:
  https://stackoverflow.com/questions/33137946/laravel-ajax-422-unprocessable-entity-even-when-token-is-matching 
  
  --}}


  
