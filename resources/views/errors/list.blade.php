@if ( $errors->any() )
    <ul class="alert alert-danger list-unstyled">
        @foreach( $errors->all() as $e )
            <li>{{ $e }}</li>
        @endforeach
    </ul>
@endif