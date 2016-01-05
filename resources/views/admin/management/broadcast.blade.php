@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/management/broadcast' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'user', trans( 'management.fields.broadcast.user' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'user', NULL, ['class' => 'form-control', 'id' => 'user'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans( 'management.fields.broadcast.user_desc' ) }}</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'channel', trans( 'management.fields.broadcast.channel' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::select( 'channel', trans( 'management.channels' ), NULL, ['class' => 'form-control', 'id' => 'channel'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'message', trans( 'management.fields.broadcast.message' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'message', NULL, ['class' => 'form-control', 'id' => 'message'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'management.submit.broadcast' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection