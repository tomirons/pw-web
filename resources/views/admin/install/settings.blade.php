@extends( 'admin.install.header' )

@section( 'content' )
    <div class="col-md-4 col-md-offset-4">
        @if ( session('message') )
            <div class="alert alert-info">
                {{ session( 'message' ) }}
            </div>
        @endif
        @include( 'errors.list' )
        <form method="post" action="{{ route( 'admin.installer.settings.save' ) }}" class="form-horizontal">
            {!! csrf_field() !!}
            <div class="form-group form-md-line-input">
                <label class="col-md-4 control-label" for="server_name">{{ trans( 'system.server_name' ) }}</label>
                <div class="col-md-8">
                    <input name="server_name" type="text" class="form-control" id="server_name" placeholder="{{ trans( 'system.server_name' ) }}" value="{{ settings( 'server_name' ) }}">
                    <div class="form-control-focus"> </div>
                </div>
            </div>
            <div class="form-group form-md-line-input">
                <label class="col-md-4 control-label" for="currency_name">{{ trans( 'system.currency_name' ) }}</label>
                <div class="col-md-8">
                    <input name="currency_name" type="text" class="form-control" id="currency_name" placeholder="{{ trans( 'system.currency_name' ) }}" value="{{ settings( 'currency_name' ) }}">
                    <div class="form-control-focus"> </div>
                </div>
            </div>
            <div class="form-group form-md-line-input">
                <label class="col-md-4 control-label" for="server_ip">{{ trans( 'system.server_ip' ) }}</label>
                <div class="col-md-8">
                    <input name="server_ip" type="text" class="form-control" id="server_ip" placeholder="{{ trans( 'system.server_ip' ) }}" value="{{ settings( 'server_ip' ) }}">
                    <div class="form-control-focus"> </div>
                    <span class="help-block">{{ trans( 'system.server_ip_desc' ) }}</span>
                </div>
            </div>
            <div class="form-group form-md-line-input">
                <label class="col-md-4 control-label" for="server_version">{{ trans( 'system.server_version' ) }}</label>
                <div class="col-md-8">
                    <select name="server_version" class="form-control" id="version">
                        <option value="07" {{ settings( 'server_version' ) == '07' ? 'selected' : NULL }}>v07</option>
                        <option value="63" {{ settings( 'server_version' ) == '63' ? 'selected' : NULL }}>v63</option>
                        <option value="69" {{ settings( 'server_version' ) == '69' ? 'selected' : NULL }}>v69</option>
                        <option value="70" {{ settings( 'server_version' ) == '70' ? 'selected' : NULL }}>v70</option>
                        <option value="80" {{ settings( 'server_version' ) == '80' ? 'selected' : NULL }}>v80</option>
                        <option value="85" {{ settings( 'server_version' ) == '85' ? 'selected' : NULL }}>v85</option>
                        <option value="88" {{ settings( 'server_version' ) == '88' ? 'selected' : NULL }}>v88</option>
                        <option value="101" {{ settings( 'server_version' ) == '101' ? 'selected' : NULL }}>v101</option>
                    </select>
                    <span class="help-block">{{ trans( 'system.server_version_desc' ) }}</span>
                    <div class="form-control-focus"> </div>
                </div>
            </div>
            <div class="form-group form-md-line-input">
                <label class="col-md-4 control-label" for="encryption_type">{{ trans( 'system.encrypt_type' ) }}</label>
                <div class="col-md-8">
                    <select name="encryption_type" class="form-control" id="encryption_type">
                        <option value="md5" {{ settings( 'encryption_type' ) == 'md5' ? 'selected' : NULL }}> {{ trans( 'system.encrypt.md5' ) }} </option>
                        <option value="base64" {{ settings( 'encryption_type' ) == 'base64' ? 'selected' : NULL }}> {{ trans( 'system.encrypt.base64' ) }} </option>
                    </select>
                    <span class="help-block">{{ trans( 'system.encrypt_type_desc' ) }}</span>
                    <div class="form-control-focus"> </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-lg">
                <button class="btn btn-primary btn-lg">{{ trans( 'install.continue' ) }}</button>
            </div>
        </form>
    </div>
@endsection