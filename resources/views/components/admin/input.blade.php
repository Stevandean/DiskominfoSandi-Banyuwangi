<div id="{{ $formName }}">
    <label for="{{ $formName }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $inputName }}</label>
    <input id="input-{{ $formName }}" @class(['bg-gray-50','border','border-gray-300' => !$isError, 'border-red-300' => $isError,'text-gray-900','text-sm','rounded-lg','focus-within:ring-blue-500','focus-within:outline-blue-500','focus:border-blue-500','block','w-full','p-2.5' ]) name="name" type="text" id="{{ $formName }}" value="{{ $inputValue }}" {{ $isRequired? "required" : "" }}>
    <!-- pesar error -->
    <p id="filled_error_help" class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">tempat error</span></p>
    <!-- akhir pesar error -->
</div>

@pushOnce('add-script')
    <script>
        class InputForm{
            isError
            errMsg
            formName
            inputName
            isReadOnly
            formInput
            input //tempat inputnya
            inputType = 'text'

            readDOM(){
                this.formInput = document.querySelector(`#${this.formName}`);
                this.input = this.formInput.querySelector(`input-${this.formName}`)
            }

            constructor({formName, inputName, isReadOnly = false, isError = false, errMsg = ''}){
                this.isError = isError;
                this.errMsg = errMsg;
                this.formName = formName;
                this.inputName = inputName;
                this.isReadOnly = isReadOnly;
            }

            error(con, msg = ""){
                if(!con){
                    this.formInput.querySelector('p').classList.remove('hidden').firstChild.innerHtml = msg
                    return
                };
                this.formInput.querySelector('p').classList.add('hidden').firstChild.innerHtml = msg
            }
        }
    </script>
@endPushOnce

@push('var-script')
    <script>
        //mendapatkan data dari laravel
        if({{ $formName }}){
            let {{ $formName }} = new InputForm(JSON.parse('{!! $getAllAttribute() !!}'));
        }else{
            let {{ $formName.'Text' }} = new InputForm(JSON.parse('{!! $getAllAttribute() !!}'));
        }
    </script>
@endpush    

