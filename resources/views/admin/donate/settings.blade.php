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
                        <label class="control-label col-md-2" for="paypal_double">{{ trans( 'donate.double_donation' ) }}</label>
                        <div class="col-md-9">
                            <input id="paypal_double" name="paypal_double" type="checkbox" class="make-switch" data-size="normal" {{ settings( 'paypal_double' ) ? 'checked' : NULL }}>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="paypal_currency">{{ trans( 'donate.paypal_currency' ) }}</label>
                        <div class="col-md-9">
                            {!! Form::select( 'paypal_currency', $currencies, settings( 'paypal_currency' ), ['class' => 'form-control', 'id' => 'paypal_currency'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="paypal_email">{{ trans( 'donate.paypal_email' ) }}</label>
                        <div class="col-md-9">
                            <input name="paypal_email" type="text" class="form-control" id="paypal_email" value="{{ settings( 'paypal_email' ) }}">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="paypal_per">{{ trans( 'donate.paypal_per', ['currency' => settings( 'paypal_currency' )] ) }}</label>
                        <div class="col-md-9">
                            <input name="paypal_per" type="number" class="form-control" id="paypal_per" value="{{ settings( 'paypal_per' ) }}">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="paypal_min">{{ trans( 'donate.paypal_min', ['currency' => settings( 'paypal_min' )] ) }}</label>
                        <div class="col-md-9">
                            <input name="paypal_min" type="number" class="form-control" id="paypal_min" value="{{ settings( 'paypal_min' ) }}">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
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
                        <label class="control-label col-md-2" for="paymentwall_double">{{ trans( 'donate.double_donation' ) }}</label>
                        <div class="col-md-9">
                            <input id="paymentwall_double" name="paymentwall_double" type="checkbox" class="make-switch" data-size="normal" {{ settings( 'paymentwall_double' ) ? 'checked' : NULL }}>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="paymentwall_link">{{ trans( 'donate.paymentwall_link' ) }}</label>
                        <div class="col-md-9">
                            <input name="paymentwall_link" type="text" class="form-control" id="paymentwall_link" value="{{ settings( 'paymentwall_link' ) }}">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="paymentwall_key">{{ trans( 'donate.paymentwall_key' ) }}</label>
                        <div class="col-md-9">
                            <input name="paymentwall_key" type="text" class="form-control" id="paymentwall_key" value="{{ settings( 'paymentwall_key' ) }}">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'main.save_settings' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection