<nav id="sidebar">
    <ul id="sidebar-list" class="clearfix">
        @foreach ($menu as $key => $parent)
            {{--*/ $act = isset($parent['act']) ? 'class="current"' : '' /*--}}
            {{--*/ $rel = isset($parent['sub']) ? 'rel="submenu' . $key . '"' : '' /*--}}
            <li {!! $act !!} ><a href="{{ route($parent['link']) }}" {!! $rel !!} >{{ $parent['name'] }}</a>
            @if (isset($parent['sub']) && count($parent['sub']) > 0)
                <ul id="subsidebar{{ $key }}" class="ddsubmenustyle">
                    @foreach ($parent['sub'] as $sub)
                        <li><a href="{{ route($sub['link']) }}">{{ $sub['name'] }}</a></li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </ul>
</nav>