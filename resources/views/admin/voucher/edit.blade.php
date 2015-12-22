@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $voucher, [ 'method' => 'PATCH', 'action' => ['Admin\VoucherController@update', $voucher->code], 'class' => 'form-horizontal'] ) !!}
                @include( 'admin.voucher.form', [ 'submitButtonText' => trans( 'voucher.update_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection