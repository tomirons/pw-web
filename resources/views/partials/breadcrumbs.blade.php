<style>
    overrides
    page-title-color #34495e !important;
</style>
@if ( Request::is( 'admin*' ) )
    <div class="page-bar">
        @if ( $breadcrumbs )
            <ul class="page-breadcrumb">
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
        @endif
    </div>
    <h3 class="page-title page-title-color" >
        @foreach ( $breadcrumbs as $breadcrumb )
            @if ( $breadcrumb->last )
                <h3 class="page-title">{{ $breadcrumb->title }}</h3>
            @endif
        @endforeach
    </h3>
@else
    <div class="page-head" style="background-color:#34495e !important; color: #34495e !important;">
        <div class="container" style="background-color:#34495e !important;">
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
@endif