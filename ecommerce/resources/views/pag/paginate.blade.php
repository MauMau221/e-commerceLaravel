{{-- Codigo customisado para gerar os links de paginação usando o marerialize --}}

@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled page-item"><i class="material-icons">Anterior</i></li>
        @else
            <li class="waves-effect page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i
                        class="material-icons">Anterior</i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled page-item">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active page-item">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="waves-effect page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="waves-effect page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i
                        class="material-icons">Próximo</i></a></li>
        @else
            <li class="disabled page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i
                        class="material-icons">Próximo</i></a></li>
        @endif
    </ul>
@endif
