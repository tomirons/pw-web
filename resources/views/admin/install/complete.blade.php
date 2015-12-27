@extends( 'admin.install.header' )

@section( 'content' )
    <div class="col-md-4 col-md-offset-4 text-center">
        <p class="paragraph">{{ session( 'message' )['message'] }}</p>
        @if ( session( 'message' )['status'] === 'success' )
            <a href="/" class="btn btn-primary btn-lg">{{ trans( 'install.complete.exit' ) }}</a>
        @else
            <a href="{{ route( 'admin.installer.database' ) }}" class="btn btn-primary btn-lg">{{ trans( 'install.complete.retry' ) }}</a>
        @endif
    </div>
@endsection