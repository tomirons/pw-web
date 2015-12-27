@extends( 'admin.install.header' )

@section( 'content' )
    <div class="col-md-4 col-md-offset-4">
        @if ( session('message') )
            <div class="alert alert-info">
                {{ session( 'message' ) }}
            </div>
        @endif
        <form method="post" action="{{ route( 'admin.installer.environment.save' ) }}">
            {!! csrf_field() !!}
            <div class="form-group form-md-line-input form-md-floating-label">
                <textarea id="env_config" class="form-control" rows="8" name="env_config">{{ $env_config }}</textarea>
                <label for="env_config">Environment Config</label>
            </div>
            <div class="col-md-12">
                <button class="btn default pull-right" type="submit">{{ trans( 'install.environment.save' ) }}</button>
            </div>
        </form>
        <div class="col-md-12 text-center mt-lg">
            <a href="{{ route( 'admin.installer.requirements' ) }}" class="btn btn-primary btn-lg">{{ trans('install.continue') }}</a>
        </div>
    </div>
@endsection