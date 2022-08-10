<div>
    <label for="{{ $formName }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $inputName }}</label>
    <input @class(['bg-gray-50','border','border-gray-300' => !$isError, 'border-red-300' => $isError,'text-gray-900','text-sm','rounded-lg','focus-within:ring-blue-500','focus-within:outline-blue-500','focus:border-blue-500','block','w-full','p-2.5' ]) name="name" type="text" id="{{ $formName }}" value="{{ $inputValue }}" {{ $isRequired? "required" : "" }}>
    <!-- pesar error -->
    @if($isError)
    <p id="filled_error_help" class=" mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{ $errMsg }}</span></p>
    @endIf
    <!-- akhir pesar error -->
</div>