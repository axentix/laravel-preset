@if ($paginator->hasPages())
    <ul class="pagination" role="navigation" aria-label="Pagination Navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li aria-disabled="true" class="disabled">
                <a href="" aria-hidden="true">
                    @lang('pagination.previous')
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                >
                    @lang('pagination.previous')
                </a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                >
                    @lang('pagination.next')
                </a>
            </li>
        @else
            <li aria-disabled="true" class="disabled">
                <a href="" aria-hidden="true">
                    @lang('pagination.next')
                </a>
            </li>
        @endif
    </ul>
@endif

