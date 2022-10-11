<div id="gallery-modal" tabindex="-1" class="hidden bg-[rgba(100,116,139,0.3)] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full justify-center items-center flex transition-all"  role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto max-h-[75vh] overflow-y-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600 mx-5">
                <h3 data-key="title" class="fill-detail text-xl font-semibold text-gray-900">
                    title
                </h3>
                <h3 data-key="created_at"  class="fill-detail text-lg text-center font-semibold">
                create at
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-3">
                <div class="">
                    <p class="text-base leading-relaxed font-semibold">
                        Preview :
                    </p>
                    <div data-key="preview" class="fill-detail"></div>
                    {{-- <img src="" data-key="preview" class="fill-detail max-h-52 mx-auto" onerror="this.src = '/images/null-image.png'" /> --}}
                </div>
                <div class="flex flex-wrap">
                    <p class="text-base  leading-relaxed font-semibold">
                        Description :
                    </p>
                    <p data-key="body" class="fill-detail text-base leading-relaxed mx-2 break-all">
                        description
                    </p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 mx-5 space-x-2 rounded-b border-t border-gray-600">
                <button id="close-modal-detail" data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 close-modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('script-end')
    <script>
    let btnGalleries = document.querySelectorAll('.btn-gallery');
    let modalGallery = document.querySelector('#gallery-modal');
    //field pada modal yg akan diubah
    let modalField = [];

    //------------ function untuk toggle modal -----------
    function toggleModal(){
        if(modalGallery.classList.contains('hidden')){
            modalGallery.classList.remove('hidden');
            setTimeout(() => {
                modalGallery.classList.remove('opacity-0');
            }, 10);
        }else{
            modalGallery.classList.add('opacity-0');
            setTimeout(() => {
                modalGallery.classList.add('hidden');
            }, 350);
        }
    }

    function defineField(){
        let keysElement = modalGallery.querySelectorAll('.fill-detail');
        keysElement.forEach(el => {
            modalField.push({name:el.getAttribute('data-key'), element: el});
        })
    }
    defineField();

    function updateModal(data){
        //saya asumsikan datanya akan selalu seperti ini
        for (let key in data){
            modalField
                .filter(el => el.name == key)
                .forEach(el => {
                    el.element.innerHTML = data[key]
                    if(key == 'created_at')el.element.innerHTML = data[key].split('T')[0]
                })
        }
        //cek untuk preview
        if(data.type == 'image'){
            modalField.find(el => el.name == 'preview').element
            .innerHTML = `<img src="/storage/${data.source}" data-key="preview" class="fill-detail max-h-52 mx-auto" onerror="this.src = '/images/null-image.png'" />`;
        }else if (data.type == 'video'){
            //untuk mengekstrak video id
            let videoId = data.source
                .split('/')
                .pop()
                .split('?')
                .pop()
                .split('&')[0]
                .split("=")
                .pop()
            modalField.find(el => el.name == 'preview').element
            .innerHTML = `<iframe class="mx-auto" width="420" height="315" src="https://www.youtube.com/embed/${videoId}"> </iframe>`;
        }
    }

    function getData(id){
        return fetch(`/profil/show-galeri/${id}`)
            .then(res => {
                return res.json()
            })
            .then(res => res)
            .catch(err => err)
    }


    //----------- close modal ---------------------
    modalGallery.querySelector('#close-modal-detail').addEventListener('click', () => toggleModal());
    modalGallery.addEventListener('click', (e)=> e.target == modalGallery ? toggleModal() : false);

    btnGalleries.forEach(btn => {
        btn.addEventListener('click',async (e) => {
            let data = await getData(btn.getAttribute('data-id'));
            updateModal(data[0]);
            toggleModal();
        })
    });
    </script>
@endpush