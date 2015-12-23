@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/management/chat/settings' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="log_path">{{ trans( 'management.fields.chat.path' ) }}</label>
                        <div class="col-md-9">
                            <input name="log_path" type="text" class="form-control" id="log_path" value="{{ settings( 'chat_log_path' ) }}">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{!! trans( 'management.fields.chat.path_desc' ) !!}</span>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'main.save_settings' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection