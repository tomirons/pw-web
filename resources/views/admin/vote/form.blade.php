<div class="form-body">
    <div class="form-group form-md-line-input">
        {!! Form::label( 'double_rewards', trans( 'vote.fields.double_rewards' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::checkbox( 'double_rewards', NULL, NULL, ['class' => 'make-switch', 'id' => 'double_rewards', 'data-size' => 'normal', 'data-on-color' => 'danger', 'data-off-color' => 'default'] ) !!}
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'name', trans( 'vote.fields.name' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::text( 'name', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'link', trans( 'vote.fields.link' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'url', 'link', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-radios">
        <label class="col-md-2 control-label">{{ trans( 'vote.fields.type.title' ) }}</label>
        <div class="md-radio-inline">
            <div class="md-radio">
                {!! Form::radio( 'type', 'cubi', NULL, ['id' => 'cubi', 'class' => 'md-radiobtn'] ) !!}
                <label for="cubi">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> {{ trans( 'vote.fields.type.cubi' ) }} </label>
            </div>
            <div class="md-radio">
                {!! Form::radio( 'type', 'virtual', NULL, ['id' => 'virtual', 'class' => 'md-radiobtn'] ) !!}
                <label for="virtual">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> {{ trans( 'vote.fields.type.virtual' ) }} </label>
            </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'reward_amount', trans( 'vote.fields.reward' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'reward_amount', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'hour_limit', trans( 'vote.fields.limit' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::input( 'number', 'hour_limit', NULL, ['class' => 'form-control'] ) !!}
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