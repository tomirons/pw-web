<div class="form-body">
    <div class="form-group form-md-line-input form-md-floating-label">
        {!! Form::label( 'code', trans( 'voucher.fields.code' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            <div class="input-group">
                <div class="input-group-control">
                    {!! Form::text( 'code', NULL, ['class' => 'form-control', 'readonly'] ) !!}
                    <div class="form-control-focus"> </div>
                </div>
            <span class="input-group-btn btn-right">
                <button id="generate_code" class="btn green-haze" type="button">{{ trans( 'voucher.generate' ) }}</button>
            </span>
            </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'item_name', trans( 'voucher.fields.item_name' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::text( 'item_name', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'item_id', trans( 'voucher.fields.item_id' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'item_id', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'item_count', trans( 'voucher.fields.item_count' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'item_count', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'item_proc_type', trans( 'voucher.fields.item_proc_type' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'item_proc_type', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-2 col-md-9">
            {!! Form::submit( $submitButtonText, ['id' => 'form_submit', 'class' => 'btn green'] ) !!}
        </div>
    </div>
</div>

@section( 'footer' )
    @parent
    <script>
        $('#generate_code').click(function() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

            for( var i=0; i < 6; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            $('input[name=code]').attr('value', text);
        });
    </script>
@endsection