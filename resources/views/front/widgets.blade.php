<div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
    <h4 class="widget-thumb-heading">{{ trans( 'widget.server_status_title' ) }}</h4>
    <div class="widget-thumb-wrap">
        <i class="widget-thumb-icon {{ $api->serverOnline() ? 'bg-green-jungle icon-arrow-up' : 'bg-red icon-arrow-down' }}"></i>
        <div class="widget-thumb-body">
            <span class="widget-thumb-body-stat mt-xs">{{ $api->serverOnline() ? trans( 'widget.server_status_online' ) : trans( 'widget.server_status_offline' ) }}</span>
        </div>
    </div>
</div>
<div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
    <h4 class="widget-thumb-heading">{{ trans( 'widget.players_online_title' ) }}</h4>
    <div class="widget-thumb-wrap">
        <i class="widget-thumb-icon bg-blue icon-user font-xlg"></i>
        <div class="widget-thumb-body">
            <span class="widget-thumb-body-stat mt-xs" data-counter="counterup" data-value="{{ DB::table('point')->where('zoneid', '>', '-1')->count() }}">0</span>
        </div>
    </div>
</div>
<div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
    <h4 class="widget-thumb-heading">{{ trans( 'widget.acc_registered_title' ) }}</h4>
    <div class="widget-thumb-wrap">
        <i class="widget-thumb-icon bg-purple icon-users"></i>
        <div class="widget-thumb-body">
            <span class="widget-thumb-body-stat mt-xs" data-counter="counterup" data-value="{{ DB::table('point')->count() }}">0</span>
        </div>
    </div>
</div>