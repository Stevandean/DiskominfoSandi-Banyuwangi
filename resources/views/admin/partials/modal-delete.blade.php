<div id="delete-modal" tabindex="-1" class=" overflow-y-auto overflow-x-hidden fixed  left-0 z-50 -z-20 inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full mx-auto h-auto">
        <div id="modal-content" class="relative bg-white rounded-lg shadow translate-y-[-120%] transition-all delay-75 border border-red-500">
            <button type="button" class=" close-delete-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div  class="p-6 text-center transition-all">
                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">Yakin ingin menghapus?</h3>
                
                {{-- hapus data --}}
                <form action="{{ url()->current() }}" method="POST">
                    @csrf
                    @method('delete') {{-- digunakan untuk menimpa method, jadi yang awalanya post mennjadi delete --}}
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-md text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Iya
                    </button>
                    <button data-modal-toggle="popup-modal" type="button" class="close-delete-modal text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-md border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 ">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>


@push('add-script')
    <script>
        let btnDelete = document.querySelectorAll('.btn-delete');
        let deleteModal = document.querySelector('#delete-modal');
        let closeModal = document.querySelectorAll('.close-delete-modal');
        let modalContent = deleteModal.querySelector('#modal-content');
        let formModal = modalContent.querySelector('form');
        let url = formModal.getAttribute('action');

        //-------- untuk hide dan show --------------
        let toggleModalDelete = () => {
            deleteModal.classList.toggle('-z-20')
            modalContent.classList.toggle('translate-y-[-120%]')
        }
        closeModal.forEach(el => el.addEventListener('click', (e) => toggleModalDelete()));
        deleteModal.addEventListener('click', (e) => e.target == e.currentTarget ? toggleModalDelete() : false)
        btnDelete.forEach(elm => {
            elm.addEventListener('click', function(e){
                formModal.setAttribute('action', url+'/'+this.getAttribute('data-id')); //nanti akan ditangani dengan http requet
                toggleModalDelete();
            })
        });
    </script>
@endpush