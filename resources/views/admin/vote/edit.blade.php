@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $site, [ 'method' => 'PATCH', 'action' => ['Admin\VoteController@update', $site->id], 'class' => 'form-horizontal'] ) !!}
                @include( 'admin.vote.form', [ 'submitButtonText' => trans( 'vote.update_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection