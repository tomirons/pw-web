@extends( 'admin.install.header' )

@section( 'content' )
    <div class="text-center">
        <p class="p-lg">{{ trans( 'install.welcome.content' ) }}</p>
        <a href="{{ route( 'admin.installer.settings' ) }}" class="btn btn-primary btn-lg">{{ trans( 'install.continue' ) }}</a>
    </div>
@endsection