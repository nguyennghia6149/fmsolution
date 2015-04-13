<nav class="navbar navbar-default navbar-static-top" role="navigation">
    @include('admin_layouts.topmenu')
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                 @foreach ($menu as $key => $parent)
                    {{--*/ $act = isset($parent['act']) ? 'class="active"' : '' /*--}}
                    {{--*/ $arrow = isset($parent['sub']) ? '<span class="fa arrow"></span>' : '' /*--}}
                    <li {!! $act !!}><a href="{{ route($parent['link']) }}" >{{ $parent['name'] }}  {!!  $arrow !!} </a>
                    @if (isset($parent['sub']) && count($parent['sub']) > 0)
                        <ul class="nav nav-second-level">
                            @foreach ($parent['sub'] as $sub)
                                <li><a href="{{ route($sub['link']) }}">{{ $sub['name'] }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>