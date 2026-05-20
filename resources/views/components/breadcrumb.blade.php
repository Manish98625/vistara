@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<nav aria-label="Breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
            @foreach($breadcrumbs as $index => $crumb)
                <li class="breadcrumb-item{{ $loop->last ? ' active' : '' }}" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    @if(!$loop->last && isset($crumb['url']))
                        <a href="{{ $crumb['url'] }}" itemprop="item">
                            <span itemprop="name">{{ $crumb['name'] }}</span>
                        </a>
                    @else
                        <span itemprop="name">{{ $crumb['name'] }}</span>
                    @endif
                    <meta itemprop="position" content="{{ $index + 1 }}">
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@endif
