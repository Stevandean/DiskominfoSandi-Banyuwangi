@extends('admin.layouts.main')

@section('container')
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <a href="/admin/dokumen" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Tambah dokumen
      </a>
    </div>
    <hr>
    <form id="form-upload" class="p-5" action="/admin/dokumen" method="post" enctype="multipart/form-data"> 
      @csrf
      <div class="mb-6"><!-- nama dokumen -->
        <x-admin.input inputName="Nama" formName="name" />
      </div>
      <div class="mb-6"><!--upload file-->
        <x-admin.input-upload type="pdf" inputName="Dokumen PDF" formName="source" :isReadOnly=false :isError=false >
        </x-admin.input-upload>
      </div>
      <div class="mb-6">
        <x-admin.form-button :isAjax=true>
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
    let form = document.querySelector('form#form-upload');
    form.addEventListener('submit', (e)=>{
      e.preventDefault();
      upload()
    })

    function upload(){
      let data =  new FormData(form);
      data.set('source', source.fileVal);
      data.set('_token', '{{csrf_token()}}');

      fetch('/admin/dokumen', {
        method: 'POST',
        body: data
      })
      .then(res => res.json())
      .then(result => {
        if(result.success){
          window.location = '/admin/dokumen'
        }
      })
    }
  </script>
@endpush




  
