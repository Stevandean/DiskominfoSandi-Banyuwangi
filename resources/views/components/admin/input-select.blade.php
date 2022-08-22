<div id="{{ $formName }}">
    <label for="{{ $formName }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $inputName }}</label>
    <select name={{ $formName }} id="{{ $formName }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        {{ $slot }}
    </select>
    <div class="err hidden">
        <p  class="hidden mt-2 text-xs text-red-600 "><span class="font-medium">when error</span></p>
    </div>
</div>

@pushOnce('add-script')
    <script>
        class SelectInput{
            isError
            errMsg
            formName
            formError
            inputName
            isReadOnly
            formInput
            input
            inputValue
            inputType = 'tselect'
            selectData = []

            constructor({formName, inputName,inputValue, isReadOnly = false, isError = false, errMsg = ''}){
                this.isError = isError;
                this.errMsg = errMsg;
                this.formName = formName;
                this.inputName = inputName;
                this.isReadOnly = isReadOnly;
                this.inputValue = inputValue;

                this.readDom();
                this.insertData();
                this.test()
            }

            readDom(){
                this.formInput = document.querySelector(`#${this.formName}`);
                this.input = this.formInput.querySelector('select');
                this.formError = this.formInput.querySelector('.err');
            }

            insertData(){
                //mendapat element select dari form [berupa html collection, jadi lebih sulit diolah]
                // let dt = this.formInput.children[1].children //->menghasilkan htmlcollection namun tidak bisa menggunakna perulangan
                let dt = this.input
                
                //jadi saya menggunakan for of
                for(let dat of dt){
                    this.selectData.push([dat.getAttribute('value'), dat.innerHTML]);
                    //dimasukan dalam pasangan [value : string_text]
                }
            }

            error(con, msg=[]){
                if(con){
                    this.formError.classList.remove('hidden');
                    msg.forEach(msg => {
                        this.formInput.innerHTML += `<p class=" mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">${msg}</span></p>`
                    })
                    this.input.classList.add('border-red-300')
                }else{
                    this.formInput.querySelector('p').classList.add('hidden').innerHTML = '';
                    this.input.classList.remove('border-red-300')
                }
            }

            test(){
                console.log(this.formInput);
                console.log(this.selectData);
                console.log(this.input)
                console.log(document.querySelector(`#${this.formName}`))
                
            }
            
        }
    </script>
@endPushOnce

@push('var-script')
    <script>
        const form_{{ $formName."_select" }} = new SelectInput(JSON.parse('{!! $getAllAttribute() !!}'))
    </script>
@endpush

{{-- 
## NOTE🗒️ ##

disini terdapat sebuah kondisi yang mungkin sepertinya kurang ingin dihasilkan.
ketika menggunakan query selector, yang dihasilkan bukanya "DOMElement" melainkan "HTML collection".
saya sudah berusaha mencarinya beberapa hari tapi masih belum menemukan jawaban yang jelas.
tapi untungnya hal ini tidak terlalu berpengaruh dengan jalannya program, sehingga masalah ini untuk
kedepanya akan saya langkahi terlebih dahulu, mungkin saja ditengah jalan saya menyempurnakan program ini,
saya mendapat pencerahan tentang masalah ini.

    
--}}