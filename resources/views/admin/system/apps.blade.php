@extends( 'admin.header' )

@section( 'content' )
    <form action="{{ url( 'admin/system/apps' ) }}" method="post" class="form-horizontal">
        {!! csrf_field() !!}
        @foreach( $apps as $app )
            <div class="col-md-4">
                <div class="portlet box red-flamingo">
                    <div class="portlet-title">
                        <div class="caption"> {{ trans( 'main.apps.' . $app->key ) }} </div>
                    </div>
                    <div class="portlet-body">
                        <div class="form-group form-md-line-input">
                            {!! Form::label( $app->key . '_enabled', trans( 'services.fields.enabled' ), ['class' => 'col-md-2 control-label'] ) !!}
                            <div class="col-md-8">
                                {!! Form::checkbox( $app->key . '_enabled', NULL, $app->enabled, ['class' => 'make-switch', 'id' => 'enabled', 'data-size' => 'normal', 'data-on-color' => 'danger', 'data-off-color' => 'default'] ) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-12">
            <button type="submit" class="btn green">{{ trans( 'main.save_settings' ) }}</button>
        </div>
    </form>
@endsection