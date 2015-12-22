@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $item = new \App\ShopItem(), ['url' => route( 'admin.shop.index' ), 'class' => 'form-horizontal'] ) !!}
                @include( 'admin.shop.form', [ 'submitButtonText' => trans( 'shop.add_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection