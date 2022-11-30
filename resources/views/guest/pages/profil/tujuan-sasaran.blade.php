@extends ('guest.layouts.main')

@section ('container')

<div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 pb-5 ">
    Tujuan dan Sasaran
</div>
<div class="pt-7 pr-9 grid grid-cols-4">
    <div></div>
    <div class=" m-auto rounded-lg overflow-hidden shadow-lg col-span-3 w-full">
        <div class="px-6 py-4 w-full">
            <div class="underline underline-offset-4 decoration-2 decoration-[#f6ca29] text-4xl font-bold pb-2">
                Tujuan
            </div>
            <p class="text-gray-700 text-base py-2">
                Meningkatkan Kepuasan Masyarakat Terhadap Pelayanan Publik
            </p>
        </div>
    </div>
</div>
<div class="pt-7 pl-7 grid grid-cols-4">
    <div class=" m-auto rounded-lg overflow-hidden shadow-lg col-span-3 w-full">
        <div class="px-6 py-4 max-w-5xl">
            <div class="underline underline-offset-4 decoration-2 decoration-[#f6ca29] text-4xl font-bold pb-2">
                Sasaran
            </div>
            <p class="text-gray-700 text-base py-2">
                Meningkatkan Kepuasan Masyarakat Terhadap Pelayanan Publik
            </p>
        </div>
    </div>
</div>

@endsection