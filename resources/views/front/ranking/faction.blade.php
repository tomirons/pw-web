@extends( 'front.header' )

@section( 'content' )
    @include( 'front.ranking.nav' )
    <div class="portlet light">
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th> #</th>
                        <th> {{ trans( 'ranking.name' ) }} </th>
                        <th> {{ trans( 'ranking.leader' ) }} </th>
                        <th> {{ trans( 'ranking.type.' . Request::segment( 3 ) ) }} </th>
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
                            <td> {{ $rank->master_name }} </td>
                            <td>
                                @if ( Request::is( 'ranking/*/level' ) )
                                    {{ $rank->level }}
                                @elseif ( Request::is( 'ranking/*/members' ) )
                                    {{ number_format( $rank->members ) }}
                                @elseif ( Request::is( 'ranking/*/territories' ) )
                                    {{ number_format( $rank->territories ) }}
                                @elseif ( Request::is( 'ranking/*/pvp' ) )
                                    {{ number_format($rank->pk_count) }}
                                @endif
                            </td>
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