@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/management/mailer' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'type', trans( 'management.fields.mailer.type' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::select( 'type', trans( 'management.fields.mailer.types' ), NULL, ['class' => 'form-control', 'id' => 'type'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input" id="roles">
                        {!! Form::label( 'roles', trans( 'management.fields.mailer.roles' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'roles', NULL, ['class' => 'form-control', 'id' => 'roles'] ) !!}
                            <div class="form-control-focus"> </div>
                            <span class="help-block"> {{ trans( 'management.fields.mailer.roles_desc' ) }} </span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'item_id', trans( 'management.fields.mailer.item_id' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'item_id', NULL, ['class' => 'form-control', 'id' => 'item_id'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'quantity', trans( 'management.fields.mailer.quantity' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'quantity', NULL, ['class' => 'form-control', 'id' => 'quantity'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'protection_type', trans( 'management.fields.mailer.protection_type' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'protection_type', NULL, ['class' => 'form-control', 'id' => 'protection_type'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'time_limit', trans( 'management.fields.mailer.time_limit' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'time_limit', NULL, ['class' => 'form-control', 'id' => 'time_limit'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'octet', trans( 'management.fields.mailer.octet' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'octet', NULL, ['class' => 'form-control', 'id' => 'octet'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'mask', trans( 'management.fields.mailer.mask' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::select( 'mask', $masks, NULL, ['class' => 'form-control'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'gold', trans( 'management.fields.mailer.gold' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'gold', NULL, ['class' => 'form-control', 'id' => 'gold'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'subject', trans( 'management.fields.mailer.subject' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::text( 'subject', NULL, ['class' => 'form-control', 'id' => 'subject'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'message', trans( 'management.fields.mailer.message' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::textarea( 'message', NULL, ['class' => 'form-control', 'id' => 'message', 'rows' => 3] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'management.submit.mailer' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $(function(){
            $("select[name=type]").change(function(){
                var value = $(this).val();
                var selDivs = $("#roles");
                if (value != "list"){
                    selDivs.hide();
                }else{
                    selDivs.show();
                }
            }).trigger("change");
        });
    </script>
@endsection