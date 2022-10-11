@extends('admin.layouts.main')

@section('container')
<div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
  <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
    <a href="/admin/kategori" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
      <svg 
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
        <polyline points="15 18 9 12 15 6"></polyline>
      </svg>
      Tambah Kategori untuk layanan
    </a>
  </div>
  <hr>
  <form id="form-upload" class="p-5" action="/admin/kategori" method="post" enctype="multipart/form-data"> 
    @csrf
    <div class="mb-6">
      <x-admin.input input-name="Nama" form-name="name" />
    </div>
    <div class="mb-6">
      <x-admin.input input-name="Deskripsi" form-name="description" />
    </div>
    <div id="wrp" class="mb-6">
      <x-admin.input-upload type="image" input-name="File Icon *optional" form-name="icon" :is-filled=false :is-read-only=false :is-error=false >
        hanya file icon
      </x-admin.input-upload>
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
    data = new FormData(document.querySelector('#form-upload'));
    data.set('_token', '{{csrf_token()}}');
    data.set('name', form_name_text.input.value);
    data.set('description', form_description_text.input.value)
    data.set('icon', form_icon_file.fileVal)
  }

  //untukmelakukan upload
  function upload(){
    fetch('/admin/kategori',{
      method: 'POST',
      headers:{'Accept': 'application/json'},
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
        window.location = '/admin/kategori'
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



  
