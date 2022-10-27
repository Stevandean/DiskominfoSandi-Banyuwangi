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
				<svg class="mb-2 w-10 h-10 text-gray-500" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M864 409.6a192 192 0 01-37.888 349.44A256.064 256.064 0 01576 960h-96a32 32 0 110-64h96a192.064 192.064 0 00181.12-128H736a32 32 0 01-32-32V416a32 32 0 0132-32h32c10.368 0 20.544.832 30.528 2.432a288 288 0 00-573.056 0A193.235 193.235 0 01256 384h32a32 32 0 0132 32v320a32 32 0 01-32 32h-32a192 192 0 01-96-358.4 352 352 0 01704 0zM256 448a128 128 0 100 256V448zm640 128a128 128 0 00-128-128v256a128 128 0 00128-128z"/></svg>
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
