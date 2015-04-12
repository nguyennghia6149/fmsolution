<aside id="sidebar" class="one-fourth">
    <div class="widget">
        <h3>Menu</h3>
        <nav>
            <ul class="menu">
                @foreach ($sidebar as $item)
                    {{--*/ $act = isset($item['act']) ? 'class="current"' : '' /*--}}
                    <li {!! $act !!} ><a href="{{ route($item['link']) }}">{{ $item['name'] }}</a>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>