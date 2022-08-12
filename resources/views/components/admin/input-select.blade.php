<div id="{{ $formName }}">
    <label for="{{ $formName }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $inputName }}</label>
    <select name={{ $formName }} id="{{ $formName }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        {{ $slot }}
    </select>
    <p class="mt-1 text-sm text-gray-500 ">{{ $info }}</p>
</div>

@pushOnce('add-script')
    <script>
        class SelectInput{
            isError
            errMsg
            formName
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
                this.input = this.formInput.querySelectorAll('select')[0];
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

            test(){
                console.log(this.selectData);
            }
            
        }
    </script>
@endPushOnce

@push('var-script')
    <script>
        if({{ $formName }}){
            const {{ $formName }} = new SelectInput(JSON.parse('{!! $getAllAttribute() !!}'))
        }else{
            const {{ $formName."Select" }} = new SelectInput(JSON.parse('{!! $getAllAttribute() !!}'))
        }
    </script>
@endpush