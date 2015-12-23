@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/management/gm' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        {!! Form::label( 'account_id', trans( 'management.fields.gm.account_id' ), ['class' => 'col-md-2 control-label'] ) !!}
                        <div class="col-md-9">
                            {!! Form::input( 'number', 'account_id', NULL, ['class' => 'form-control', 'id' => 'account_id'] ) !!}
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'management.submit.gm.add' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="portlet light">
        <div class="portlet-body">
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> {{ trans( 'management.table.gm.id' ) }} </th>
                            <th> {{ trans( 'management.table.gm.name' ) }} </th>
                            <th> {{ trans( 'management.table.gm.actions' ) }} </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $gms as $gm )
                            <tr>
                                <td id="user_id"> {{ $gm->userid }} </td>
                                <td> {{ App\User::find( $gm->userid )['name'] }} </td>
                                <td>
                                    <div class="fs20">
                                        <a class="font-blue tooltips mr-md" data-placement="top" data-original-title="{{ trans( 'management.change_permissions' ) }}" href="{{ url( 'admin/management/gm/edit/' . $gm->userid ) }}"><i class="icon-settings"></i></a>
                                        <a class="font-red tooltips" data-placement="top" data-original-title="{{ trans( 'main.remove' ) }}" href="{{ url( 'admin/management/gm/remove/' . $gm->userid ) }}"><i class="icon-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection