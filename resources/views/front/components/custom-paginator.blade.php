@php
    $currentPage = $paginator->currentPage();
    $lastPage = $paginator->lastPage();
@endphp

<ul class="pagination">
    <!-- Previous Links -->
    @if ($currentPage > 1)
        <li><a href="{{ $paginator->url(1) }}" rel="prev">&lt;&lt;</a></li>
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&lt;</a></li>
    @else
        <li class="disabled"><span>&lt;&lt;</span></li>
        <li class="disabled"><span>&lt;</span></li>
    @endif

    <!-- Pagination Numbers -->
    @for ($i = 1; $i <= $lastPage; $i++)
        @if ($i == $currentPage)
            <li class="active"><span>{{ $i }}</span></li>
        @else
            <li><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
        @endif
    @endfor

    <!-- Next Links -->
    @if ($currentPage < $lastPage)
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&gt;</a></li>
        <li><a href="{{ $paginator->url($lastPage) }}" rel="next">&gt;&gt;</a></li>
    @else
        <li class="disabled"><span>&gt;</span></li>
        <li class="disabled"><span>&gt;&gt;</span></li>
    @endif
</ul>
