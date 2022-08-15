<div>
    <ul id="radio-tab" class="inline-flex flex-wrap -mb-px">
        <li class="mr-2">
            <input id="image" type="radio" name="type" value="image"  class="hidden" checked>
            <label for="image" class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 border-blue-600 active">Gambar</label>
        </li>
        <li class="mr-2">
            <input id="video" type="radio" name="type" value="video" class="hidden">
            <label for="video" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">Video</label>
        </li>
    </ul>
</div>

{{-- karena saya yakin saya hanya menggunkan elemen ini sekali, maka
    saya akan membuatnya menjadi elemen statis, 
    ** tidak bisa dibuat banyak **
    --}}
@push('add-script')
    <script>
        class TabRadio{
            value = 'image'
            inputs
            form
            label

            constructor(){
                this.readDom();
            }

            readDom(){
                this.form = document.querySelector('#radio-tab');
                this.inputs = this.form.querySelectorAll('input');
                this.label = this.form.querySelectorAll('label')

                this.form.addEventListener('click', e => {
                    // console.log(e.target.tagName);
                    // console.log(this.value)

                    if(e.target.tagName == 'LABEL'){
                        this.label.forEach(lab => {
                            lab.classList = "inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                        })
                        e.target.classList = "inline-block p-4 rounded-t-lg border-b-2 text-blue-600 border-blue-600 active"
                    }
                    
                    this.getValue();
                    // console.log(this.value)

                })
            }

            getValue(){
                this.inputs.forEach(input => {
                    if(input.checked){
                        this.value = input.value
                    }
                });
            }
        }
        let TabType = new TabRadio();
    </script>
@endpush


{{-- 
## catatan progres ##

progress 1 
+ dapat menjadikan elemen menjadi interaktif, mana yang terseleksi dan mana yang tidak
+ dapat menjadikan state elemen lebih nyata
    
    
    
--}}