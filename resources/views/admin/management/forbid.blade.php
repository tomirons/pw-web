@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/management/forbid' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'type', trans( 'management.fields.forbid.type' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::select( 'type', trans( 'management.fields.forbid.types' ), NULL, ['class' => 'form-control', 'id' => 'type'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'user_id', trans( 'management.fields.forbid.user_id' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'user_id', NULL, ['class' => 'form-control', 'id' => 'user_id'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block"> {{ trans( 'management.fields.forbid.user_id_desc' ) }} </span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'length', trans( 'management.fields.forbid.length' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'length', NULL, ['class' => 'form-control', 'id' => 'length'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block"> {{ trans( 'management.fields.forbid.length_desc' ) }} </span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'reason', trans( 'management.fields.forbid.reason' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'reason', NULL, ['class' => 'form-control', 'id' => 'reason'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'management.submit.forbid' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection