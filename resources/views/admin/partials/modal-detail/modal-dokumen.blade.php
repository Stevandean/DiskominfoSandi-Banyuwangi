

<!-- detail modal -->
<div id="modal-detail" tabindex="-1" class="bg-[rgba(100,116,139,0.3)] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex transition-all opacity-0 hidden" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="modal-detail-content relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600 mx-5">
                <h3 class="text-xl font-semibold text-gray-900">
                    Dokumen Terbaru
                </h3>
                <h3 class="text-lg text-center font-semibold">
                    19 - July - 2022
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-3">
                <div class="flex">
                    <p class="text-base leading-relaxed font-semibold">
                        Nama :
                    </p>
                    <p class="text-base leading-relaxed mx-2">
                        Berkas_pebuatan_operator
                    </p>
                </div>
                <div class="flex">
                    <p class="text-base leading-relaxed font-semibold">
                        Tanggal Dibuat :
                    </p>
                    <p class="text-base leading-relaxed mx-2">
                        19 - July - 2022
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <p class="text-base  leading-relaxed font-semibold">
                        Source :
                    </p>
                    <p class="text-base leading-relaxed mx-2 break-all">
                        https://www.figma.com/file/X37dX16QiXeIzUgD9mSpMi/diskominfo-layouts?node-id=116%3A61
                    </p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 mx-5 space-x-2 rounded-b border-t border-gray-600">
                <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center ">Save</button>
                <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-md border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 close-modal-detail">Close</button>
            </div>
        </div>
    </div>
</div>

@push('add-script')
<script>
    let openModal = document.querySelectorAll('.btn-detail');
    let modalDetail = document.querySelector('#modal-detail');
    let modalClose = document.querySelector('.close-modal-detail');
    let modalHeader = modalDetail.querySelectorAll('.modal-detail-content > div')[0];
    let modalBody = modalDetail.querySelectorAll('.modal-detail-content > div')[1];
    let modalData;

    let modalBodySTR =``;
    let modalHeaderSTR = ``;

    //------------ function untuk toggle modal -----------
    function toggleModal(){
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

    //------------ menutup modal ----------------
    modalClose.addEventListener('click', ()=> toggleModal());
    modalDetail.addEventListener('click',(e)=> e.target == modalDetail? toggleModal() : false);

    // ----------- membuka modal ---------------
    function updateDetailModal(data){
        if(data != undefined){
            modalBodySTR = `
            <div class="flex">
                <p class="text-base leading-relaxed font-semibold">
                    Nama :
                </p>
                <p class="text-base leading-relaxed mx-2">
                    ${data.name}
                </p>
            </div>
            <div class="flex">
                <p class="text-base leading-relaxed font-semibold">
                    Tanggal Dibuat :
                </p>
                <p class="text-base leading-relaxed mx-2">
                    ${data.create_date.split(' ')[0]}
                </p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-base  leading-relaxed font-semibold">
                    Source :
                </p>
                <p class="text-base leading-relaxed mx-2 break-all">
                    ${data.source}
                </p>
            </div>
            `;
    
            modalHeaderSTR = `
            <h3 class="text-xl font-semibold text-gray-900">
                ${data.name}
            </h3>
            <h3 class="text-lg text-center font-semibold">
                ${data.create_date.split(' ')[0]}
            </h3>
            `;
        }else{
            modalBodySTR = 'ada masalah dengan dengan data'
        }

        
        modalHeader.innerHTML = modalHeaderSTR;
        modalBody.innerHTML = modalBodySTR;
    }

    function getData (id){
        return fetch(`/admin/dokumen/${id}`)
            .then(res => res.json())
            .then(res2 => {
                return res2;
            })
            .catch(err => err)
    }

    openModal.forEach( btn => {
        btn.addEventListener('click', async function(e){
            try{
                modalData = await getData(this.getAttribute('data-id'));
                updateDetailModal(modalData[0]);
                // modalDetail.classList.remove('hidden');
                toggleModal();
            }catch(err){
                console.error(err);
            }
        });
    })
</script>
@endpush
