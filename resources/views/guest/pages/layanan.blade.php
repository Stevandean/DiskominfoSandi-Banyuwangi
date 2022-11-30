@extends('guest.layouts.main')

@push('additional-css')
	<link rel="stylesheet" href="css/galery.css">
	
@endpush

@section('container')
		<div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10" id="tupoksi">
			{{ $title }}
		</div>
		<div class="flex flex-wrap relative justify-center gap-7 p-10 ">
			@foreach ($category->services as $service)
			<div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md basis-full  md:basis-1/3">
				<img class="max-w-20 h-20 mb-5" src="{{ Storage::exists($service->icon ?? "null")? asset('/storage/'.$service->icon) : '/images/null-layanan.svg'  }} ">
				<div>
					<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">{{ $service -> name }}</h5>
				</div>
				<p class="mb-3 font-normal text-gray-500 ">{{ Str::limit($service -> description, 90, '...') }}</p>
				<a href="{{ $service -> link }}" class="inline-flex items-center text-blue-600 hover:underline">
					Lihat Selengkapnya
					<svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
				</a>
			</div>
			@endforeach
			<div class="w-full">
				{{ $services -> links () }}
			</div>
		</div>
	
@endsection
