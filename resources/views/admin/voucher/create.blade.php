@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $voucher = new \App\Voucher, ['url' => route( 'admin.voucher.index' ), 'class' => 'form-horizontal'] ) !!}
                @include( 'admin.voucher.form', [ 'submitButtonText' => trans( 'voucher.add_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection