@extends( 'admin.header' )

@section( 'content' )
<div class="portlet light bordered">
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th> {{ trans( 'members.table.id' ) }} </th>
                        <th> {{ trans( 'members.table.name' ) }} </th>
                        <th> {{ trans( 'members.table.balance' ) }} </th>
                        <th> {{ trans( 'members.table.role' ) }} </th>
                        <th> {{ trans( 'members.table.actions' ) }} </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $users as $user )
                        <tr>
                            <td> {{ $user->ID }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->money }} </td>
                            <td> {{ ucfirst( $user->role ) }} </td>
                            <td> <a class="btn red btn-outline" data-toggle="modal" href="#{{ $user->name }}_balance"> {{ trans( 'members.actions.give', ['currency' => settings( 'currency_name' )] ) }} </a> </td>
                        </tr>
                        <div class="modal fade" id="{{ $user->name }}_balance" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ url( 'admin/members/balance/' . $user->ID ) }}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">{{ trans( 'members.modal.title', ['currency' => settings( 'currency_name' ), 'user' => $user->name] ) }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input name="amount" type="text" class="form-control" id="amount">
                                                <label for="amount">{{ trans( 'members.fields.amount.label' ) }}</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn dark btn-outline" data-dismiss="modal">{{ trans( 'members.modal.close' ) }}</button>
                                            <button type="submit" class="btn green">{{ trans( 'members.modal.submit' ) }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {!! $users->render() !!}
        </div>
    </div>
</div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $("#amount").inputmask({
            "mask": "9{0,10}.9{0,2}",
            greedy: false
        });
    </script>
@endsection