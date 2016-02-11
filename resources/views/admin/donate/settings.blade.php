@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject bold uppercase"> {{ trans( 'donate.paypal_title' ) }}</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" action="{{ url( 'admin/donate/paypal' ) }}" method="post">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paypal_double', trans( 'donate.double_donation' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::checkbox( 'paypal_double', NULL, settings( 'paypal_double' ), ['class' => 'make-switch', 'id' => 'paypal_double', 'data-size' => 'normal', 'data-on-color' => 'danger', 'data-off-color' => 'default'] ) !!}
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paypal_currency', trans( 'donate.paypal_currency' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::select( 'paypal_currency', $currencies, settings( 'paypal_currency' ), ['class' => 'form-control', 'id' => 'paypal_currency'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paypal_client_id', trans( 'donate.paypal_client_id' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'paypal_client_id', settings( 'paypal_client_id' ), ['class' => 'form-control', 'id' => 'paypal_client_id'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{!! trans( 'donate.paypal_client_id_desc' ) !!}</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paypal_secret', trans( 'donate.paypal_secret' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'paypal_secret', settings( 'paypal_secret' ), ['class' => 'form-control', 'id' => 'paypal_secret'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paypal_per', trans( 'donate.paypal_per', ['currency' => settings( 'paypal_currency' )] ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'paypal_per', settings( 'paypal_per' ), ['class' => 'form-control', 'id' => 'paypal_per'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paypal_min', trans( 'donate.paypal_min', ['currency' => settings( 'paypal_min' )] ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'paypal_min', settings( 'paypal_min' ), ['class' => 'form-control', 'id' => 'paypal_min'] ) !!}
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

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject bold uppercase"> {{ trans( 'donate.paymentwall_title' ) }}</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" action="{{ url( 'admin/donate/paymentwall' ) }}" method="post">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="well">
                        <legend>{{ trans( 'donate.paymentwall_setup.title' ) }}</legend>
                        <ol>
                            <li>{{ trans( 'donate.paymentwall_setup.steps.1' ) }}</li>
                            <li>{{ trans( 'donate.paymentwall_setup.steps.2' ) }}</li>
                            <li>{{ trans( 'donate.paymentwall_setup.steps.3' ) }}</li>
                            <li>{{ trans( 'donate.paymentwall_setup.steps.4', [ 'url' => url( 'donate/paymentwall' ) ] ) }}</li>
                            <li>{!! trans( 'donate.paymentwall_setup.steps.5' ) !!}</li>
                        </ol>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paymentwall_double', trans( 'donate.double_donation' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::checkbox( 'paymentwall_double', NULL, settings( 'paymentwall_double' ), ['class' => 'make-switch', 'id' => 'paymentwall_double', 'data-size' => 'normal', 'data-on-color' => 'danger', 'data-off-color' => 'default'] ) !!}
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paymentwall_link', trans( 'donate.paymentwall_link' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'url', 'paymentwall_link', settings( 'paymentwall_link' ), ['class' => 'form-control', 'id' => 'paymentwall_link'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'paymentwall_key', trans( 'donate.paymentwall_key' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'paymentwall_link', settings( 'paymentwall_key' ), ['class' => 'form-control', 'id' => 'paymentwall_key'] ) !!}
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