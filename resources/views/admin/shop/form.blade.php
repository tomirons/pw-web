<div class="form-body">
    <div class="form-group form-md-line-input">
        {!! Form::label( 'name', trans( 'shop.fields.name' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::text( 'name', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'price', trans( 'shop.fields.price' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'price', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'item_id', trans( 'shop.fields.item_id' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'item_id', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'octet', trans( 'shop.fields.octet' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::text( 'octet', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'mask', trans( 'shop.fields.mask' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::select( 'mask', $masks, NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'count', trans( 'shop.fields.count' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'count', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'max_count', trans( 'shop.fields.max_count' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'max_count', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'protection_type', trans( 'shop.fields.protection_type' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'protection_type', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'expire_date', trans( 'shop.fields.expire_date' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'expire_date', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'discount', trans( 'shop.fields.discount' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'discount', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-radios">
        <label class="col-md-2 control-label">{{ trans( 'shop.fields.shareable.title' ) }}</label>
        <div class="md-radio-inline">
            <div class="md-radio">
                {!! Form::radio( 'shareable', 1, NULL, ['id' => 'yes', 'class' => 'md-radiobtn'] ) !!}
                <label for="yes">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> {{ trans( 'shop.fields.shareable.yes' ) }} </label>
            </div>
            <div class="md-radio">
                {!! Form::radio( 'shareable', 0, NULL, ['id' => 'no', 'class' => 'md-radiobtn'] ) !!}
                <label for="no">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> {{ trans( 'shop.fields.shareable.no' ) }} </label>
            </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        {!! Form::label( 'description', trans( 'shop.fields.description' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::textarea( 'description', NULL, ['id' => 'summernote', 'class' => 'form-control'] ) !!}
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
        $('#summernote').summernote({height: 300});

        $('#form_submit').click(function () {
            $('input[name="description"]').val( $(".summernote").code() );
        });
    </script>
@endsection