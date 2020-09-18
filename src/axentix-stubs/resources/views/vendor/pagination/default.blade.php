@if ($paginator->hasPages())
    <ul class="pagination" role="navigation" aria-label="Pagination Navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li aria-disabled="true" aria-label="@lang('pagination.previous')" class="disabled">
                <a href="" aria-hidden="true">&larr;</a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                    aria-label="@lang('pagination.previous')"
                >
                    &larr;
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li aria-disabled="true">
                    <a href="">{{ $element }}</a>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li aria-current="page" class="active">
                            <a href="">{{ $page }}</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}"
                                aria-label="@lang('pagination.goto_page', ['page' => $page])"
                            >
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                    aria-label="@lang('pagination.next')"
                >
                    &rarr;
                </a>
            </li>
        @else
            <li aria-disabled="true" aria-label="@lang('pagination.next')" class="disabled">
                <a href="" aria-hidden="true">&rarr;</a>
            </li>
        @endif
    </ul>
@endif
