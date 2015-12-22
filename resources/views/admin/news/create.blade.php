@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $article = new \App\Article, ['url' => route( 'admin.news.index' ), 'class' => 'form-horizontal'] ) !!}
                @include( 'admin.news.form', [ 'submitButtonText' => trans( 'news.add_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection