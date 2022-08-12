<form action="{{ url()->current() }}" class="xl:basis-1/2 w-full"> <!-- pencarian -->
    <div class="flex flex-wrap sm:flex-nowrap gap-1">
        {{ $slot }} {{-- slot untuk dimasukanya select --}}
        <div class="relative w-full">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Cari</label>
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" name="search" value="{{ $inputValue }}" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 focus:bg-white bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus-within:outline-0" placeholder="Cari berdasarkan keyword" >
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Cari</button>
        </div>
    </div>
</form>
