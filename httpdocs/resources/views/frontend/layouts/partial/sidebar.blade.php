<aside id="sidebar" class="one-fourth">
    <div class="widget">
        <h3>Menu</h3>
        <nav>
            <ul class="menu">
                @foreach ($sidebar as $key => $item)
                    {{--*/ $act = isset($item['act']) ? 'class="active"' : '' /*--}}
                    <li {!! $act !!} ><a href="..{{ $item['link'] }}">{{ $item['name'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>