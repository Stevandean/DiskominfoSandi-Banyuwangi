<div id="input-{{ $formName }}-text">
    <label for="{{ $formName }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $inputName }}</label>
    <input name="{{ $formName }}" id="input-{{ $formName }}" @class(['bg-gray-50','border','border-gray-300' => !$isError, 'border-red-300' => $isError,'text-gray-900','text-sm','rounded-lg','focus-within:ring-blue-500','focus-within:outline-blue-500','focus-within:bg-white','focus:border-blue-500','block','w-full','p-2.5' ]) type="text" id="{{ $formName }}" value="{{ $inputValue }}" {{ $isRequired? "required" : "" }}>
    <!-- pesar error -->
    {{-- <p id="filled_error_help" class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">tempat error</span></p> --}}
    <!-- akhir pesar error -->

    <div class="err hidden">
        <p  class="hidden mt-2 text-xs text-red-600 "><span class="font-medium">when error</span></p>
    </div>
</div>

@pushOnce('add-script')
    <script>
        class InputForm{
            isError
            errMsg
            formName
            formError
            inputName
            isReadOnly
            formInput
            input //tempat inputnya
            inputType = 'text'

            readDOM(){
                this.formInput = document.querySelector(`#input-${this.formName}-text`);
                this.input = this.formInput.querySelector(`#input-${this.formName}`)
                this.formError = this.formInput.querySelector('.err')
            }

            constructor({formName, inputName, isReadOnly = false, isError = false, errMsg = ''}){
                this.isError = isError;
                this.errMsg = errMsg;
                this.formName = formName;
                this.inputName = inputName;
                this.isReadOnly = isReadOnly;
                

                this.readDOM();
            }

            setHidden(val){
                if(val){
                    this.formInput.classList.add('hidden')
                    return
                }
                this.formInput.classList.remove('hidden')
            }

            // error(con, msg = ""){
            //     if(!con){
            //         this.formInput.querySelector('p').classList.remove('hidden').firstChild.innerHtml = msg
            //         return
            //     };
            //     this.formInput.querySelector('p').classList.add('hidden').firstChild.innerHtml = msg
            // }

            error(con, msg=[]){
                if(con){
                    this.formError.classList.remove('hidden');
                    this.input.classList.add('border-red-300');
                    this.formError.innerHTML = '';
                    msg.forEach(msg => {
                        console.log('menambahkan error')
                        this.formError.innerHTML += `<p class="mt-1 text-xs text-red-600 dark:text-red-400"><span class="font-medium">${msg}</span></p>`
                    })
                }else{
                    this.formError.querySelector('p').classList.add('hidden').innerHTML = '';
                    this.input.classList.remove('border-red-300');
                }
            }
        }
    </script>
@endPushOnce

@push('var-script')
    <script>
        let form_{{ $formName.'_text' }} = new InputForm(JSON.parse('{!! $getAllAttribute() !!}'));
    </script>
@endpush    

