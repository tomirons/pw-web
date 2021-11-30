@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            @if ( setupTasks() )
                <div class="portlet box red-flamingo">
                    <div class="portlet-title">
                        <div class="caption"> {{ trans( 'main.cron.add' ) }} </div>
                    </div>
                    <div class="portlet-body">
                        <p>{{ trans( 'main.cron.info' ) }}</p>
                        <p>{{ trans( 'main.cron.job' ) }}</p>
                    </div>
                </div>
            @endif
            <form action="{{ url( 'admin/ranking/settings' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'ranking_ignore_roles', trans( 'ranking.fields.ignore_roles' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'ranking_ignore_roles', settings( 'ranking_ignore_roles' ), ['class' => 'form-control', 'id' => 'ranking_ignore_roles'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans( 'ranking.fields.ignore_roles_desc' ) }}</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'ranking_ignore_factions', trans( 'ranking.fields.ignore_factions' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'ranking_ignore_factions', settings( 'ranking_ignore_factions' ), ['class' => 'form-control', 'id' => 'ranking_ignore_factions'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans( 'ranking.fields.ignore_factions_desc' ) }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'main.save_settings' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
                <div class="col-md-4">
                    <form action="{{ url( 'admin/ranking/settings/updatePlayer' ) }}" method="get"
                          class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-body">
                            <div class="portlet box red-flamingo">
                                <div class="portlet-title">
                                    <div class="caption"> {{ trans( 'ranking.players.caption' ) }} </div>
                                </div>
                                <div class="portlet-body">
                                    <p>{{ trans( 'ranking.players.content' ) }}</p>
                                    <button type="submit"
                                            class="btn green">{{ trans( 'ranking.players.button' ) }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="{{ url( 'admin/ranking/settings/updateFaction' ) }}" method="get"
                          class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-body">
                            <div class="portlet box red-flamingo">
                                <div class="portlet-title">
                                    <div class="caption"> {{ trans( 'ranking.factions.caption' ) }} </div>
                                </div>
                                <div class="portlet-body">
                                    <p>{{ trans( 'ranking.factions.content' ) }}</p>
                                    <button type="submit"
                                            class="btn green">{{ trans( 'ranking.factions.button' ) }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="{{ url( 'admin/ranking/settings/updateTerritories' ) }}" method="get"
                          class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-body">
                            <div class="portlet box red-flamingo">
                                <div class="portlet-title">
                                    <div class="caption"> {{ trans( 'ranking.territories.caption' ) }} </div>
                                </div>
                                <div class="portlet-body">
                                    <p>{{ trans( 'ranking.territories.content' ) }}</p>
                                    <button type="submit"
                                            class="btn green">{{ trans( 'ranking.territories.button' ) }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection