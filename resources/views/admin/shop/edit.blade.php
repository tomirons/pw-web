@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $item, [ 'method' => 'PATCH', 'action' => ['Admin\ShopController@update', $item->id], 'class' => 'form-horizontal' ] ) !!}
                @include( 'admin.shop.form', [ 'submitButtonText' => trans( 'shop.update_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection