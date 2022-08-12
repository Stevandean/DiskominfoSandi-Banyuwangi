<div id="">
    <p class="block mb-2 text-sm font-medium text-gray-900 ">{{ $inputName }}</p>
    <input type="hidden" name="{{ $formName }}" id="{{ $formName }}" value="{{ $inputValue }}">
    <trix-editor input="{{ $formName }}"></trix-editor>
</div>

@pushOnce('add-script')
    <script>
        class BodyEditor{
            formName
            inputValue
            inputName
            input

            constructor({formName,inputValue,inputName}){
                this.formName = formName;
                this.inputValue = inputValue;
                this.inputName = inputName;
                this.readDom()
            }

            readDom(){
                this.input = document.querySelector(`input#${this.formName}`)
            }
        }
    </script>
@endPushOnce

@push('var-script')
    <script>
        if({{ $formName }}){
            const {{ $formName."Editor" }} = new BodyEditor((JSON.parse('{!! $getAllAttribute() !!}')));
        }else{
            const {{ $formName }} = new BodyEditor((JSON.parse('{!! $getAllAttribute() !!}')));
        }
    </script>
@endpush