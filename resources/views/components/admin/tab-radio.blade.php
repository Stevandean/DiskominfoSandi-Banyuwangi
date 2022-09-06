<div>
    <ul id="radio-tab" class="flex flex-wrap justify-end  -mb-px">
        <li class="mr-2">
            <input id="image" type="radio" name="type" class="hidden" value="image"   checked>
            <label for="image" class="inline-block p-4 pt-2 rounded-t-lg border-b-2 text-blue-600 border-blue-600 active">Gambar</label>
        </li>
        <li class="mr-2">
            <input id="video" type="radio" name="type" class="hidden" value="video">
            <label for="video" class="inline-block p-4 pt-2 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">Video</label>
        </li>
    </ul>
</div>

{{-- karena saya yakin saya hanya menggunkan elemen ini sekali, maka
    saya akan membuatnya menjadi elemen statis, 
    ** tidak bisa dibuat banyak **
    --}}
@pushOnce('add-script')
    <script>
        class TabRadio{
            value = 'image'
            inputs
            form
            label
            isReadOnly

            constructor({active = 'image', isReadOnly = false}){
                this.active = active;
                this.isReadOnly = isReadOnly;
                this.readDom();
                this.setActive(this.active)
                this.setReadOnly(this.isReadOnly)
            }

            setReadOnly(con){
                if(con){
                    this.inputs.forEach(el => {
                        el.disabled = true
                    });
                    this.label.forEach(el => {
                        el.classList.remove('hover:text-gray-600','hover:border-gray-300')
                        // console.log(el)
                    })
                    this.readDom();
                    return
                }
                this.inputs.forEach(el => el.disabled = false);
                this.label.forEach(el => {
                    el.classList.add('hover:text-gray-600','hover:border-gray-300')
                    // console.log(el)
                })

            }

            readDom(){
                this.form = document.querySelector('#radio-tab');
                this.inputs = this.form.querySelectorAll('input');
                this.label = this.form.querySelectorAll('label')

                if(this.isReadOnly)return
                this.form.addEventListener('click', e => {
                    if(e.target.tagName == 'LABEL'){
                        this.setActive(e.target.previousElementSibling.value)
                        console.log(e.target.previousElementSibling)
                    }
                    
                    this.getValue();
                    // console.log(this.value)

                })
            }

            //berikut buka merupakan method yang modular
            setActive(label){ //label ini adalah value inputnya
                console.log('lablnya adalah'+label)
                this.label.forEach(lab => {
                    lab.classList = "inline-block p-4 pt-2 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                    if(lab.previousElementSibling.value == label){
                        lab.classList = "inline-block p-4 pt-2 rounded-t-lg border-b-2 text-blue-600 border-blue-600 active"
                        // lab.previousElementSibling.checked = true
                        this.value = lab.previousElementSibling.value;
                        console.log(this.value)
                    }
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
        </script>
@endPushOnce

@push('var-script')
<script>
    let TabType = new TabRadio(JSON.parse('{!! $getAllAttribute() !!}'))
</script>
@endpush



{{-- 
## catatan progres ##

progress 1 
+ dapat menjadikan elemen menjadi interaktif, mana yang terseleksi dan mana yang tidak
+ dapat menjadikan state elemen lebih nyata
    
progress 4
+ perbedaan antara previousElementSibling dan previousSibling adalah yang satu mengembalikan text/ isinya, sementara satunya mengembalikan
  beserta tag pembukusnya
    
--}}