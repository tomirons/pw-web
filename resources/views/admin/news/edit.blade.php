@extends( 'admin.header' )

@section( 'content' )
    @include( 'errors.list' )
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-body form">
                {!! Form::model($article, [ 'method' => 'PATCH', 'action' => ['Admin\NewsController@update', $article->id], 'class' => 'form-horizontal' ] ) !!}
                    @include( 'admin.news.form', [ 'submitButtonText' => trans( 'news.update_button' ) ] )
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection