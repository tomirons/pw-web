@extends( 'front.header' )

@section( 'content' )
    @include( 'front.ranking.nav' )
    <div class="portlet light">
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> {{ trans( 'ranking.name' ) }} </th>
                        <th> {{ trans( 'ranking.class' ) }} </th>
                        <th> {{ trans( 'ranking.type.' . Request::segment( 3 ) ) }} </th>
                        <th> {{ trans( 'ranking.guild' ) }} </th>
                    </tr>
                    </thead>
                    <tbody>
                        {{--*/ $count = ( ( $ranks->currentPage() - 1 ) * $ranks->perPage() ) + 1 /*--}}
                        @foreach( $ranks as $rank )
                            <tr>
                                <td>
                                    <span class="badge badge-primary badge-roundless"> {{ $count }} </span>
                                </td>
                                <td> {{ $rank->name }} </td>
                                <td> <span class="class s-16 c{{ $rank->cls }} pull-left mr-xs"></span> {{ trans( 'main.classes.' . $rank->cls ) }} </td>
                                <td>
                                    @if ( Request::is( 'ranking/*/level' ) )
                                        {{ $rank->level }}
                                    @elseif ( Request::is( 'ranking/*/rep' ) )
                                        {{ number_format( $rank->reputation ) }}
                                    @elseif ( Request::is( 'ranking/*/time' ) )
                                        {{ makeTime( $rank->time_used ) }}
                                    @elseif ( Request::is( 'ranking/*/pvp' ) )
                                        {{ $rank->pk_count }}
                                    @endif
                                </td>
                                <td> {{ ( $rank->faction_name ) ? $rank->faction_name : '-' }} </td>
                            </tr>
                            {{--*/ $count++ /*--}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center">
        {!! $ranks->render() !!}
    </div>
@endsection