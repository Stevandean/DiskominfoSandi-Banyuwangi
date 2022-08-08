 <!-- untuk pagination -->
 @if ($paginator->hasPages())
 <nav class="h-full">
    <ul class="h-full inline-flex items-stretch">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li>
                <div class="hidden sm:inline-block h-full py-4 px-5 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">Previous</div>
                <div class="sm:hidden inline-block h-full py-4 px-5 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">&laquo;</div>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="hidden sm:inline-block h-full py-4 px-5 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
                <a href="{{ $paginator->previousPageUrl() }}" class="sm:hidden inline-block h-full py-4 px-5 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">&laquo;</a>
            </li>
        @endif
        
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li>
                    <span class="h-full inline-block py-4 px-5 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <span class="h-full inline-block py-4 px-5 leading-tight text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 ">{{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}" class="h-full inline-block py-4 px-5 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="h-full hidden sm:inline-block py-4 px-5 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">Next</a>
                    <a href="{{ $paginator->nextPageUrl() }}" class="h-full sm:hidden inline-block py-4 px-5 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">&raquo;</a>
                </li>
            </li>
        @else
            <li>
                <span class="h-full hidden sm:inline-block py-4 px-5 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">Next</spam>
                <span class="h-full sm:hidden inline-block py-4 px-5 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">&raquo;</span>
            </li>
        @endif
    </ul>
 </nav>

 @endif
