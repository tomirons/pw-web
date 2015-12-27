@extends( 'admin.install.header' )

@section( 'content' )
    <div class="col-md-4 col-md-offset-4">
        <ul class="list-group installer">
            @foreach( $permissions['permissions'] as $permission )
                <li class="list-group-item">{{ $permission['folder'] }} <span><i class="fs20 icon-{{ $permission['isSet'] ? 'check font-green-jungle' : 'close font-red' }}"></i> {{ $permission['permission'] }}</span></li>
            @endforeach
        </ul>
        @if( !isset( $permissions['errors'] ) )
            <div class="text-center">
                <a class="btn btn-primary btn-lg" href="{{ route( 'admin.installer.database' ) }}">{{ trans( 'install.continue' ) }}</a>
            </div>
        @endif
    </div>
@endsection