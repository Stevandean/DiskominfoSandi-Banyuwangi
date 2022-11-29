

<!-- detail modal -->
<div id="modal-detail" tabindex="-1" class="bg-[rgba(100,116,139,0.3)] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full inset-0 h-modal h-full justify-center items-center flex transition-all opacity-0 hidden" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-auto max-h-[75vh] overflow-y-auto">
        <!-- Modal content -->
        <div class="modal-detail-content relative overflow-y-auto bg-white rounded-lg shadow">
            <!-- Modal header dan body -->
            {{ $slot }}
            <!-- Modal footer -->
            <div class="flex items-center p-6 mx-5 space-x-2 rounded-b border-t border-gray-200">
                <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-md border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 close-modal-detail">Close</button>
            </div>
        </div>
    </div>
</div>


@push('add-script')
<script>

    class ModalDetail{
        openModal
        modalDetail
        modalContentDetail
        modalClose
        modalHeader
        modalBody 
        modalData
        modalField
        userData
        modelPath

        constructor(modelPath){

            //readDom and define later usable var
            this.openModal = document.querySelectorAll('.btn-detail'); //button untuk mentrigger kemunculan modal
            this.modalDetail = document.querySelector('#modal-detail'); //semmua modalnya
            this.modalContentDetail = this.modalDetail.querySelector('.modal-detail-content'); //wrapper untuk modal header dan body
            this.modalClose = document.querySelector('.close-modal-detail'); //tombol untuk menutup modal
            this.modalHeader = this.modalDetail.querySelectorAll('.modal-detail-content > div')[0];
            this.modalBody = this.modalDetail.querySelectorAll('.modal-detail-content > div')[1];
            this.modalData;
            this.modalField =[]; //data yang diekstrak dari elemen modal detail
            this.userData = {}; //ini hanya digunakan untuk menapikan tabel user pada berita
            this.modelPath = modelPath

            this.defineField();
            // if(modelPath == "berita") this.defineUserTable();
            this.visibilityEvent()
            this.defineEventShow()

        }

        //untuk visibility modal
        visibilityEvent(){
            this.modalClose.addEventListener('click', ()=> this.toggleModal());
            this.modalDetail.addEventListener('click',(e)=> {e.target == this.modalDetail ? this.toggleModal() : false});
        }


        //------------ function untuk toggle modal -----------
        toggleModal(){
            let modalDetail = this.modalDetail
            if(modalDetail.classList.contains('hidden')){
                modalDetail.classList.remove('hidden');
                setTimeout(() => {
                    modalDetail.classList.remove('opacity-0');
                }, 10);
            }else{
                modalDetail.classList.add('opacity-0');
                setTimeout(() => {
                    modalDetail.classList.add('hidden');
                }, 350);
            }
        }

        //function untuk mentukan banyak field yg tersedia, lalu menyimpanya menjadi sebuah array
        //digunakna untuk mempermudah filter
        defineField(){
            let keysElement = this.modalContentDetail.querySelectorAll('.fill-detail');
            keysElement.forEach(el => {
                this.modalField.push({name:el.getAttribute('data-key'), element: el});
            })
        }
        

        // ----------- update  modal ---------------
        updateDetailModal(data,model){

            let modalField = this.modalField
            let userData
            if(model == 'berita') {
                userData = this.userData
            }

            switch(model){
                case 'dokumen':
                    for(let key in data){
                        modalField
                            .filter(el => el.name == key)
                            .forEach(el =>{
                                el.element.innerHTML = data[key]
                                if(key == 'created_at') el.element.innerHTML = data[key].split('T')[0];
                            })
                    }
                    break;
                case 'galeri':
                    for(let key in data){
                        modalField
                            .filter(el => el.name == key)
                            .forEach(el =>{
                                el.element.innerHTML = data[key]
                                if(key == 'created_at') el.element.innerHTML = data[key].split('T')[0];
                                if(el.element.hasAttribute('data-preview') && key == 'source' && data.type != 'video') el.element.innerHTML = `<img src="/storage/${data[key]}" onerror="this.src = '/images/null-image.png'" />`
                                if(el.element.hasAttribute('data-preview') && key == 'source' && data.type == 'video'){
                                    let videoId = data[key]
                                        .split('/')
                                        .pop()
                                        .split('?')
                                        .pop()
                                        .split('&')[0]
                                        .split("=")
                                        .pop()
                                    el.element.innerHTML = `<iframe class="mx-auto" width="420" height="315" src="https://www.youtube.com/embed/${videoId}"> </iframe>`
                                }
                                if(key == 'type'){
                                    data[key] == 'image' ? el.element.innerHTML = `<p class="text-base  leading-relaxed bg-[#facc15] rounded-full px-3 mx-2">Image</p>` : 
                                    data[key] == 'video' ? el.element.innerHTML = `<p class="text-base  leading-relaxed bg-[#71FF40] rounded-full px-3 mx-2">Video</p>` :
                                    el.element.innerHTML = '<span class="text-red-500" >Ada yang error</span>'
                                }
                            })
                    }
                    break
                case 'berita':
                    for(let key in data){
                        modalField
                            .filter(el => el.name == key)
                            .forEach(el =>{
                                if(key == 'author'){//karean pada field athor menggunakan return untuk menghentikan loop, maka sebaiknya author diletakan di paling bawah
                                    userData.name.innerHTML = data[key].name
                                    userData.username.innerHTML = data[key].username
                                    userData.email.innerHTML = data[key].email
                                    return;
                                }
                                el.element.innerHTML = data[key]
                                if(key == 'created_at') el.element.innerHTML = data[key].split('T')[0];
                                if(el.element.hasAttribute('data-preview') && key == 'image') el.element.innerHTML = `<img src="/storage/${data[key]}" onerror="this.src = '/images/null-image.png'" />`
                                if(key == 'category'){
                                    data[key] == 'berita' ? el.element.innerHTML = `<p class="text-base  leading-relaxed bg-[#facc15] rounded-full px-3 mx-2">Berita</p>` : 
                                    data[key] == 'goverment' ? el.element.innerHTML = `<p class="text-base  leading-relaxed bg-[#71FF40] rounded-full px-3 mx-2">Goverment</p>` :
                                    data[key] == 'technology' ? el.element.innerHTML = `<p class="text-base  leading-relaxed bg-[#0091ff] rounded-full px-3 mx-2">Technology</p>` :
                                    el.element.innerHTML = '<span class="text-red-500" >Ada yang error</span>'
                                }
                                
                            })
                    }
                    break
    
                case 'link-terkait', 'layanan':
                for(let key in data){
                        modalField
                            .filter(el => el.name == key)
                            .forEach(el =>{
                                el.element.innerHTML = data[key]
                                if(key == 'created_at') el.element.innerHTML = data[key].split('T')[0]
                                if(key == 'category') el.element.innerHTML = (data[key]?.name || "deleted")
                            })
                    }
                    break
                
                case "kategori":
                    for(let key in data){
                        modalField
                            .filter(el => el.name == key)
                            .forEach(el =>{
                                el.element.innerHTML = data[key]
                                if(key == 'created_at') el.element.innerHTML = data[key].split('T')[0];
                                if(key == 'category') el.element.innerHTML = data[key].name ?? "deleted";
                                if(el.element.hasAttribute('data-preview') && key == 'icon') el.element.innerHTML = `<img class="mx-auto max-h-64" src="/storage/${data[key]}" onerror="this.src = '/images/null-icon.png'" />`
                            })
                    }
                    break
                default:
            }
        }


        //function untuk tabel user
        defineUserTable(){
            let userData = this.userData;
            let table = this.modalDetail.querySelector('#table-user')
            if(typeof table != 'undefined' || table === null){
                userData.name =  table.querySelector('#name-show')
                userData.username = table.querySelector('#username-show')
                userData.email = table.querySelector('#email-show')
            }
        }


        getData(modelPath,id){
            return fetch(`/admin/${modelPath}/${id}`)
                .then(res => res.json())
                .then(res => res)
                .catch(err => err)
        }
    

        //define button to trigger modal open
        defineEventShow(){
            //supaya variabelnya dapat diakses tanpa this didalam

            this.openModal.forEach( btn => {
                btn.addEventListener('click', async (e) => {
                    try{
                        this.modalData = await this.getData(this.modelPath ,btn.getAttribute('data-id'));
                        this.updateDetailModal(this.modalData[0],this.modelPath);
                        this.toggleModal();
                    }catch(err){
                        console.error(err);
                    }
                });
            })
        }

    }
    
    //membuat objectnya
    let modalDetail = new ModalDetail('{{ $modelPath }}')

</script>
@endpush
