@if($paginator->hasPages())
<div class='met_pager'>
    {{--上一页--}}
    @if ($paginator->onFirstPage())
        <span class='PreSpan' style="display: none;">上一页</span>
    @else
        <span class='PreSpan'><a href="{{ $paginator->previousPageUrl() }}" rel="prev">上一页</a></span>
    @endif

    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <a href='#'>{{ $element }}</a>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a href='#' class='Ahover'>{{ $page }}</a>
                @else
                    <a href="{{ $url }}" >{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- 下一页 --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class='NextA'>下一页</a>
    @else
        <a href=# class='NextA' style="display: none;">下一页</a>
    @endif
</div>
@endif