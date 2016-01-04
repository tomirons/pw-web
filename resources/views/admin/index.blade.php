@extends( 'admin.header' )

@section( 'content' )
    <div class="col-md-6">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-red bold uppercase">Port Status</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    @foreach( $api->ports() as $name => $port )
                        <div class="col-md-6 mb-md">
                            <div class="dashboard-stat {{ $port['open'] ? 'green-jungle' : 'red' }}">
                                <div class="visual">
                                    <i class="{{ $port['open'] ? 'icon-arrow-up' : 'icon-arrow-down' }}"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span>{{ $port['port'] }}</span>
                                    </div>
                                    <div class="desc"> {{ $name }} </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-red bold uppercase">Game Stats</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6 mb-md">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="icon-user"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{ $api->online ? count( $api->getOnlineList() ) : 0 }}">0</span>
                                </div>
                                <div class="desc"> {{ trans( 'widget.players_online_title' ) }} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md">
                        <div class="dashboard-stat purple">
                            <div class="visual">
                                <i class="icon-users"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{ DB::table('point')->count() }}">0</span>
                                </div>
                                <div class="desc"> {{ trans( 'widget.acc_registered_title' ) }} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md">
                        <div class="dashboard-stat yellow-gold">
                            <div class="visual">
                                <i class="icon-user"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{ DB::table('pweb_ranking_players')->count() }}">0</span>
                                </div>
                                <div class="desc"> {{ trans( 'widget.total_characters_title' ) }} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                <i class="icon-users"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{ DB::table('pweb_ranking_factions')->count() }}">0</span>
                                </div>
                                <div class="desc"> {{ trans( 'widget.total_factions_title' ) }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-red bold uppercase">PW Web Releases</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="list-group">
                    @foreach( $releases as $release )
                        {{--*/ $date = new \Carbon\Carbon( $release['published_at'] ) /*--}}
                        <a target="_blank" href="{{ $release['zipball_url'] }}" class="list-group-item">
                            <h4 class="list-group-item-heading">{{ $release['name'] }} {!! ( $date > \Carbon\Carbon::now()->subHours( 48 ) ) ? '<span class="badge badge-danger badge-roundless">' . trans( 'system.releases.new' ) . '</span>' : NULL !!}</h4>
                            @if( $release['prerelease'] )
                                <div class="note note-danger mt-md">
                                    <h4 class="block"> {{ trans( 'system.releases.notice.title' ) }} </h4>
                                    <p> {!! trans( 'system.releases.notice.body', ['tag' => $release['tag_name']] ) !!} </p>
                                </div>
                            @endif
                            <p class="list-group-item-text"> {!! $release['body'] !!} </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection