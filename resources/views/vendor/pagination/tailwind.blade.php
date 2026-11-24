@if ($paginator->hasPages())
    <nav>
        <ul style="list-style-type: none; padding: 0; display: flex; gap: 10px;">
            @if ($paginator->onFirstPage())
                <li><span>&laquo; Назад</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}">&laquo; Назад</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><b>{{ $page }}</b></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}">Вперёд &raquo;</a></li>
            @else
                <li><span>Вперёд &raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif