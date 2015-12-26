@extends( 'front.header' )

@section( 'content' )
<div class="portlet light">
    <div class="portlet-body text-center">
        <h4>{{ trans( 'vote.success.continue' ) }}</h4>
        <p>{!! trans( 'vote.success.notice' ) !!}</p>
        <a target="_blank" href="{{ $site->link }}" class="btn btn-primary">{{ trans( 'vote.success.button' ) }}</a>
    </div>
</div>
@endsection