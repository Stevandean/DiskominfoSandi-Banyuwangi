@extends('admin.layouts.main')

@section('container')
<div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
  <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
    <a href="/admin/layanan" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
      <svg 
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
        <polyline points="15 18 9 12 15 6"></polyline>
      </svg>
      Tambah Layanan
    </a>
  </div>
  <hr>
  <form id="form-upload" class="p-5" action="/admin/layanan" method="post" enctype="multipart/form-data"> 
    @csrf
    <div class="mb-6">
      <x-admin.input input-name="Nama" form-name="name" />
    </div>
    <div class="mb-6">
      <x-admin.input-select input-name="Kategori" form-name="category">
        @foreach ($categories as $category )
          <option value="{{ $category->id }}" @if ($loop->first) {{ "selected" }} @endif>{{ $category->name }}</option>
        @endforeach
      </x-admin.input-select>
    </div>
    <div class="mb-6">
      <x-admin.input input-name="Deskripsi" form-name="description" />
    </div>
    <div id="wrp" class="mb-6"><!--upload file-->
      <x-admin.input-upload type="image" input-name="File icon" form-name="icon" :is-filled=false :is-read-only=false :is-error=false >
        hanya file gambar (.jpg, .jpeg, .png, etc ) max 10mb
      </x-admin.input-upload>
    </div>
    <div class="mb-6">
      <x-admin.input input-name="Link" form-name="link" />
    </div>
    <div class="mb-6">
      <x-admin.form-button btn-name="send" :isAjax=true>
        Tambah
      </x-admin.form-button>
    </div>
  </form>
</div>
    
@endsection

@push('upload-script')
<script>

  let data
  let form = document.querySelector('#form-upload')

  //untuk menangani bila gerdapat error yg dilempar
  function handleError(err){
    let keys = Object.keys(err.errors);
    let values = Object.values(err.errors);

    keys.forEach(key => {
      switch(key){
        case 'name' :
          form_name_text.error(true, err.errors[key]);
          break;
        case 'description' :
          form_description_text.error(true, err.errors[key]);
          break;
        case 'link' :
          form_link_text.error(true, err.errors[key]);
          break;
        case 'icon':
          form_icon_file.error(true, err.errors[key]);
          break;
        default :
          console.error('key tidak sesuai, harap masukan yg sesuai');
      }
    });
  }

  //untuk mengisi form
  function fillForm(){
    data = new FormData();
    data.set('_token', '{{csrf_token()}}');
    data.set('category_id', form_category_select.input.value);
    data.set('name', form_name_text.input.value);
    data.set('description', form_description_text.input.value);
    data.set('link', form_link_text.input.value);
    if(typeof form_icon_file.fileVal != "undefined"){
      data.set('icon', form_icon_file.fileVal);
      console.log("data seharusnya sudah dimasukan")
    }
  }

  //untukmelakukan upload
  function upload(){
    fetch('/admin/layanan',{
      method: 'POST',
      headers:{'Accept': 'application/json',},
      mode: 'same-origin',
      body: data
    })
    .then(async res => {
      console.log(res)
      return {
        status: res.status, 
        json: await res.json()
      }
    })
    .then(res => {
      console.log(res)
      if(res.json.success && res.status == 200){
        window.location = '/admin/layanan'
      }else if(res.status == 422){
        handleError(res.json);
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



  
