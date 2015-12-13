<div class="page-head">
    <div class="container">
        <div class="page-title">
            @foreach ( $breadcrumbs as $breadcrumb )
                @if ( $breadcrumb->last )
                    <h1>{{ $breadcrumb->title }}</h1>
                @endif
            @endforeach
        </div>
        <ul class="page-breadcrumb breadcrumb mt-lg pull-right hidden-xs">
            @foreach ( $breadcrumbs as $breadcrumb )
                @if( count( $breadcrumbs ) <= 2 && $breadcrumb->first )
                    <li>
                        <span>{{ $breadcrumb->title }}</span>
                    </li>
                @elseif( !$breadcrumb->first && !$breadcrumb->last )
                    <li>
                        <span>{{ $breadcrumb->title }}</span>
                    </li>
                @elseif ( !$breadcrumb->last )
                    <li>
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                        <i class="fa fa-circle"></i>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>