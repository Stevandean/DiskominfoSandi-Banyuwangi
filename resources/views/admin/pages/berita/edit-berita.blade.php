@extends('admin.layouts.main')

@section('container')
  <div class="md:shadow-md bg-white rounded-lg p-3 pt-4">
    <div class="flex flex-wrap md:flex-nowrap gap-3 justify-between items-center p-4 pt-1">
      <a href="/admin/berita" class="font-bold text-xl text-blue-kominfo inline-flex items-center">
        <svg 
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Edit {{ $news->title }}
      </a>
    </div>
    <hr>
    <form id="form-upload" class="p-5" action="/admin/berita/{{ $news->id }}" method="post" >
      @csrf
      <div class="mb-6">
        <x-admin.input input-name='Judul' form-name="title" input-value="{{ $news->title }}" />
      </div>
      <div class="mb-6">
        <x-admin.input input-name='Slug' form-name="slug" input-value="{{ $news->slug }}" />
      </div>
      <div class="mb-6">
        <x-admin.input-select input-name="kategori" form-name="category" >
          <option value="goverment" @selected($news->category == 'goverment')>Goverment</option>
          <option value="technology" @selected($news->category == 'technology')>Technology</option>
          <option value="berita" @selected($news->category == 'berita')>Berita</option>
        </x-admin.input-select>
      </div>
      <div id="wrp" class="mb-6"><!--upload file-->
        <x-admin.input-upload info-file-read-only="{{ $news->image }}" type="image" input-name="File Gambar" form-name="image" :is-filled=true :is-read-only=false :is-error=false >
          hanya file gambar
        </x-admin.input-upload>
        <input type="hidden" name="old-image" value="{{ $news->image }}">
      </div>
      <div class="mb-6">
        <x-admin.body-editor input-name="Body" form-name="body" input-value="{{strip_tags($news->body) }}" />
      </div>
      <div class="mb-6">
        <x-admin.form-button btn-name="send" :is-ajax=true >
          Edit
        </x-admin.form-button>
      </div>
    </form>
  </div>
@endsection
            

{{-- khusus upload diletakanpada script tertentu, supaya dapat mengambil varibel dari script input sebelumnya --}}
@push('upload-script') 
  <script>
    // ------- untuk handle slug -------------
    form_title_text.input.addEventListener('change', (e)=>{
      fetch("/admin/slug?title="+form_title_text.input.value)
      .then(res => res.json())
      .then(data => form_slug_text.input.value = data.slug)
    })

    //----- untuk aktifitas mengupload -----------
    let form = document.querySelector('#form-upload');
    let data; //untuk object formnanti
    console.log(form)
    console.log(typeof form_image_file.fileVal == 'undefined')

    function handleError(err){
      let keys = Object.keys(err.errors);
      let values = Object.values(err.errors);
      console.log(keys);
      console.log(values);

      keys.forEach(key => {
        switch(key){
          case 'title' :
            form_title_text.error(true, err.errors[key]);
            break;
          case 'slug' :
            form_slug_text.error(true, err.errors[key]);
            break;
          case 'image' :
            form_image_file.error(true, err.errors[key]);
            break;
          case 'category' :
            form_category_select.error(true, err.errors[key]);
            break;
          default :
            console.error('key tidak sesuai, harap masukan yg sesuai');
        }
      });
    }

    function fillForm(){
      data = new FormData();
      data.set('_token', '{{csrf_token()}}');
      data.set('_method', 'PUT')
      if(typeof form_image_file.fileVal != "undefined") { // saya tidak tahu mengapa harus melakuakn seperti ini ?
        data.set('image', form_image_file.fileVal)
      }
      data.set('slug', form_slug_text.input.value)
      data.set('title', form_title_text.input.value)
      data.set('body', form_body_editor.input.value)
      data.set('oldImage', document.querySelector('[name=old-image]').value)
      data.set('category', form_category_select.input.value)

      
    }

    function upload(){
      fillForm()

      fetch('/admin/berita/{{ $news->id }}',{
        method: 'POST',
        headers:{
          'Accept': 'application/json',
        },
        mode: 'same-origin',
        body: data
      })
      .then(async res => {
        return {
          status : res.status, 
          json : await res.json()
        }
      })
      .then(res => {
        console.log(res)
        if(res.status == 200 && res.json.success){
          window.location= '/admin/berita';
        }else if(res.status == 422){
          handleError(res.json)
        }
      })
      .finally(() => btn_send.setLoading(false))
      .catch(err => console.error(err))
    }

    form.addEventListener('submit',(e)=> {
      e.preventDefault();
      e.stopPropagation();
      upload()
      // console.log(form_body_editor.input.value)
      // fillForm();
      // console.log(data.get('body'))
    })
  </script>
@endpush




  
