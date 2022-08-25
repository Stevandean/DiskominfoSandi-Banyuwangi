

 @if ($paginator->hasPages())
    <nav class="h-full ">
        <ul class="h-full inline-flex items-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="mx-3 inline-block  py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] ml-0 leading-tight text-gray-500 bg-white rounded-full border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">&laquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="cursor-pointer mx-3 inline-block  py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] ml-0 leading-tight text-gray-500 bg-white rounded-full border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">&laquo;</a>
                </li>
            @endif
                
            {{-- Pagination Elements --}}
            <span class="wrap inline-flex items-center gap-1 border bg-gray-50 border-gray-300 rounded-full overflow-hidden">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li>
                            <span class=" rounded-full  inline-block py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700 ">{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <span class="rounded-full  inline-block py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] leading-tight text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">{{ $page }}</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}" class="cursor-pointer rounded-full  inline-block py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700 ">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </span>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="cursor-pointer mx-3 nline-block py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] leading-tight text-gray-500 bg-white rounded-full border border-gray-300 hover:bg-gray-100 hover:text-gray-700 cursor-default">&raquo;</a>
                </li>
            @else
                <li>
                    <span class="mx-3 inline-block py-2 px-3 sm:py-[.8rem] sm:px-[1.2rem] leading-tight text-gray-500 bg-white rounded-full border border-gray-300 hover:bg-gray-100 hover:text-gray-700 cursor-default">&raquo;</spam>
                </li>
            @endif
             
        </ul>
    </nav>
 @endif


