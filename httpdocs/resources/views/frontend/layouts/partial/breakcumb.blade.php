<section id="page-title">
    <div class="container clearfix">
        <h1>{{ $breadcrumbs['name'] }}</h1>
        <nav id="breadcrumbs">
            <ul>
                @foreach ($breadcrumbs['list'] as $index => $item)

                    @if ($index + 1 == count($breadcrumbs['list']))
                        <li>{{ $item['name'] }}</li>
                    @else
                        <li><a href="{{ route($item['url']) }}">{{ $item['name'] }}</a> &rsaquo;</li>
                    @endif    
                @endforeach
            </ul>
        </nav>
    </div>
</section>
