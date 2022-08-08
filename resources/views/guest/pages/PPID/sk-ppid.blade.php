@extends('guest.layouts.main')

@section('container')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-4 md:col-span-6">
            @include ('guest.partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                SK PPID
            </div>
            <div class="p-5">
                <iframe src="/pdf/sk_PPID.pdf" frameBorder="0" scrolling="auto" height="550px" width="700px" ></iframe>
            </div>
            <div class="p-5">
                <iframe src="/pdf/SK123.pdf" frameBorder="0" scrolling="auto" height="550px" width="700px" ></iframe>
            </div>
        </div>
    </div>
    
@endsection
