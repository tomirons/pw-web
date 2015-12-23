@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/management/gm/edit/' . Request::segment( 5 ) ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="row col-md-offset-1">
                        {{--*/ $rights = trans( 'management.gm_permissions' ) /*--}}
                        @foreach( $rights as $k => $v )
                            <div class="col-md-6">
                                <div class="md-checkbox">
                                    <input type="hidden" name="gm_rights[{{ $k }}]" value="0">
                                    <input type="checkbox" id="right_{{ $k }}" class="md-check" name="gm_rights[{{ $k }}]" value="1" {{ isset( $user_rights[ $k ] ) ? 'checked' : NULL }}>
                                    <label for="right_{{ $k }}">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> {{ trans( 'management.gm_permissions.' . $k ) }} </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'management.submit.gm.save' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection