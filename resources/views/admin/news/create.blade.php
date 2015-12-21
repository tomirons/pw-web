@extends( 'admin.header' )

@section( 'content' )
    @include( 'errors.list' )
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-body form">
                {!! Form::model( $article = new \App\Article, ['url' => route( 'admin.news.index' ), 'class' => 'form-horizontal'] ) !!}
                    @include( 'admin.news.form', [ 'submitButtonText' => trans( 'news.add_button' ) ] )
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection