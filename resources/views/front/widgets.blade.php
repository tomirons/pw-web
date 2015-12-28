<div class="dashboard-stat {{ $api->online ? 'green-jungle' : 'red' }}">
    <div class="visual">
        <i class="{{ $api->online ? 'icon-arrow-up' : 'icon-arrow-down' }}"></i>
    </div>
    <div class="details">
        <div class="number">
            <span>{{ $api->online ? trans( 'widget.server_status_online' ) : trans( 'widget.server_status_offline' ) }}</span>
        </div>
        <div class="desc"> {{ trans( 'widget.server_status_title' ) }} </div>
    </div>
</div>
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