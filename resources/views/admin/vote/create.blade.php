@extends( 'admin.header' )

@section( 'content' )
    <div class="note note-info">
        <h4 class="block">Need A Voting Site?</h4>
        <p> RankTheServer (RTS) is a newer toplist website, you can create a free account and create a site in minutes! <a href="http://ranktheserver.com/auth/login">Click here to register!</a>
        </p>
    </div>
    <div class="portlet light bordered">
        <div class="portlet-body form">
            {!! Form::model( $site = new \App\VoteSite, ['url' => route( 'admin.vote.index' ), 'class' => 'form-horizontal'] ) !!}
                @include( 'admin.vote.form', [ 'submitButtonText' => trans( 'vote.add_button' ) ] )
            {!! Form::close() !!}
        </div>
    </div>
@endsection