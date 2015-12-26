@extends( 'front.header' )

@section( 'content' )
    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption">
                {{ trans( 'voucher.redeem_title' ) }}
            </div>
        </div>
        <div class="portlet-body">
            <form action="{{ url( 'voucher/redeem' ) }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input name="code" type="text" class="form-control" id="code">
                    <label for="code">{{ trans( 'voucher.code' ) }}</label>
                </div>
                <button class="btn blue" type="submit">{{ trans( 'voucher.redeem' ) }}</button>
            </form>
        </div>
    </div>
    @if ( count( $voucher_logs ) > 0 )
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i> {{ trans( 'voucher.logs.title' ) }}
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> {{ trans( 'voucher.logs.code' ) }} </th>
                            <th> {{ trans( 'voucher.logs.name' ) }} </th>
                            <th> {{ trans( 'voucher.logs.count' ) }} </th>
                            <th> {{ trans( 'voucher.logs.redeemed' ) }} </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $voucher_logs as $log )
                            <tr>
                                <td> {{ $log->voucher->code }} </td>
                                <td> {{ $log->voucher->item_name }} </td>
                                <td> {{ $log->voucher->item_count }} </td>
                                <td> {{ $log->created_at->format( 'm/d/Y g:i a' ) }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection