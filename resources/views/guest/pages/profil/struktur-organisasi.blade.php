@extends('guest.layouts.main')

@section('container')
    <div class="px-4 pb-8">
        <div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
            Struktur Organisasi
        </div>

        <div class="pt-10">
            <div class="m-auto max-w-5xl rounded-lg overflow-hidden shadow-lg">
                <div class="px-8 py-4">
                    <img src="{{ Storage::exists($imgStrukturOrganisasi)? asset('/storage/'.$imgStrukturOrganisasi) : '/images/null-image.png' }}">
                </div>
            </div>
        </div>
    </div>
@endsection
