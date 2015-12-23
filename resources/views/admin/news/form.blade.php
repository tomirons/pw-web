<div class="form-body">
    <div class="form-group form-md-line-input">
        {!! Form::label( 'title', trans( 'news.fields.title' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::text( 'title', NULL, ['class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'content', trans( 'news.fields.content' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::textarea( 'content', NULL, ['id' => 'summernote', 'class' => 'form-control'] ) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        {!! Form::label( 'category', trans( 'news.fields.category' ), ['class' => 'col-md-2 control-label'] ) !!}
        <div class="col-md-9">
            {!! Form::select( 'category', $categories, NULL, ['class' => 'form-control'] ) !!}
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
            $('input[name="content"]').val( $(".summernote").code() );
        });
    </script>
@endsection