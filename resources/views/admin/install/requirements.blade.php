@extends( 'admin.install.header' )

@section( 'content' )
    <div class="col-md-4 col-md-offset-4">
        <ul class="list-group">
            @foreach( $requirements['requirements'] as $extension => $enabled )
                <li class="list-group-item">{{ $extension }} <i class="fs20 icon-{{ $enabled ? 'check font-green-jungle' : 'close font-red' }} pull-right"></i></li>
            @endforeach
        </ul>
        @if( !isset( $requirements['errors'] ) )
            <div class="text-center">
                <a class="btn btn-primary btn-lg" href="{{ route( 'admin.installer.permissions' ) }}">{{ trans( 'install.continue' ) }}</a>
            </div>
        @endif
    </div>
@endsection