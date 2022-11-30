@extends('admin.layouts.main')

@section('container')
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <a href="./" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Tambah Profi Pejabat
      </a>
    </div>
    <hr>
    <form id="form-upload" class="p-5" action="/admin/dokumen" method="post" enctype="multipart/form-data"> 
      @csrf
      <div class="mb-6">
        <x-admin.input input-name="Nama Pejabat" form-name="name"  />
      </div>
      <div class="mb-6">
        <x-admin.input-upload  type="image" input-name="File Foto Pejabat" form-name="image" :is-filled=false :is-error=false>
          hanya file gambar (.jpg, .jpeg, .png, etc ) max 10mb.
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.input-upload type="pdf" input-name="File Profil Pejabat" form-name="profile_pdf" :is-filled=false :is-error=false>
          hanya file pdf, max 20mb 
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.input-upload type="pdf" input-name="Dokumen lkhpn" form-name="source_lkhpn" :is-filled=false :is-error=false>
          hanya file pdf, max 20mb 
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.form-button btn-name="send" isAjax={{ true }}>
          Tambah
        </x-admin.form-button>
      </div>
    </form>
  </div>
@endsection
            

{{-- khusus upload diletakanpada script tertentu, supaya dapat mengambil varibel dari script input sebelumnya --}}
@push('upload-script') 
  <script>

    // ----------- UPLOAD ------------
    let form = document.querySelectorAll('form#form-upload')[0];

    form.addEventListener('submit', (e)=>{
      e.preventDefault();
      upload()
    })

    function upload(){
      let data =  new FormData(form);
      data.set('_token', '{{csrf_token()}}');

      //keyword penyelesaian put di laavel :laravel response method not allowed when use PUT request from fetch()
      fetch('/admin/profil/profil-pejabat', {
        method: 'POST',
        headers:{
          "X-CSRF-Token": "{{ csrf_token() }}",
          'Accept': 'application/json'
        },
        mode: 'same-origin',
        body: data
      })
      .then(async res =>[res.status, await res.json()])
      .then(result => {
        console.log(result)
        if(result[1].success){
          window.history.back();
        }else if(res[0] == 422){
          form_name_text.error(true, res[0].errors.name); 
        }
      })
      .catch(err => console.error(err))
    }
  </script>
@endpush




  
