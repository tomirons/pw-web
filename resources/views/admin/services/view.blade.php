@extends( 'admin.header' )

@section( 'content' )
    <form action="{{ url( 'admin/services' ) }}" method="post" class="form-horizontal">
        {!! csrf_field() !!}
        @foreach( $services as $service )
            <div class="col-md-4">
                <div class="portlet box red-flamingo">
                    <div class="portlet-title">
                        <div class="caption"> {{ trans( 'services.' . $service->key . '.title') }} </div>
                    </div>
                    <div class="portlet-body">
                        <div class="form-group form-md-line-input">
                            {!! Form::label( $service->key . '_enabled', trans( 'services.fields.enabled' ), ['class' => 'col-md-2 control-label'] ) !!}
                            <div class="col-md-8">
                                {!! Form::checkbox( $service->key . '_enabled', NULL, $service->enabled, ['class' => 'make-switch', 'id' => 'enabled', 'data-size' => 'normal', 'data-on-color' => 'danger', 'data-off-color' => 'default'] ) !!}
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label( $service->key . '_price', trans( 'services.fields.price' ), ['class' => 'col-md-2 control-label'] ) !!}
                            <div class="col-md-9">
                                {!! Form::input( 'number', $service->key . '_price', $service->price, ['class' => 'form-control'] ) !!}
                                <div class="form-control-focus"></div>
                                <span class="help-block">{{ trans( 'services.fields.price_desc' ) }}</span>
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