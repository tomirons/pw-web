@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/services/settings' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <h4 class="col-md-offset-2">{{ trans( 'services.teleport.title') }}</h4>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'teleport_world_tag', trans( 'services.fields.world_tag' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'teleport_world_tag', settings( 'teleport_world_tag' ), ['class' => 'form-control', 'id' => 'teleport_world_tag'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'teleport_x', trans( 'services.fields.x' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'teleport_x', settings( 'teleport_x' ), ['class' => 'form-control', 'id' => 'teleport_x'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'teleport_y', trans( 'services.fields.y' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'teleport_y', settings( 'teleport_y' ), ['class' => 'form-control', 'id' => 'teleport_y'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'teleport_z', trans( 'services.fields.z' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'teleport_z', settings( 'teleport_z' ), ['class' => 'form-control', 'id' => 'teleport_z'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <h4 class="col-md-offset-2">{{ trans( 'services.level_up.title') }}</h4>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'level_cap', trans( 'services.fields.cap' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'level_cap', settings( 'level_up_cap' ), ['class' => 'form-control', 'id' => 'level_cap'] ) !!}
                            <div class="form-control-focus"> </div>
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
        </div>
    </div>
@endsection