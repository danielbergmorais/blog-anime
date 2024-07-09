@if ($paginator->hasPages())

<nav>
    <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a href="#">
            @lang('pagination.previous')
        </a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
            @lang('pagination.previous')
        </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next">
            @lang('pagination.next')
        </a>
        @else
        <a href="#">
            @lang('pagination.next')
        </a>
        @endif
    </ul>
</nav>
@endif
