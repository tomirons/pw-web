@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light">
        <div class="portlet-body">
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> {{ trans( 'voucher.table.code' ) }} </th>
                                <th> {{ trans( 'voucher.table.name' ) }} </th>
                                <th> {{ trans( 'voucher.table.redeemed' ) }} </th>
                                <th> {{ trans( 'voucher.table.actions' ) }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $vouchers as $voucher )
                                <tr>
                                    <td id="code"> {{ $voucher->code }} </td>
                                    <td> {{ $voucher->item_name }} </td>
                                    <td> {{ $voucher->times_redeemed }} </td>
                                    <td>
                                        <div class="fs20">
                                            <a class="font-green tooltips mr-md" data-placement="top" data-original-title="{{ trans( 'main.edit' ) }}" href="{{ route( 'admin.voucher.edit', $voucher->code ) }}"><i class="icon-pencil"></i></a>
                                            <a class="font-red tooltips delete" data-placement="top" data-original-title="{{ trans( 'main.remove' ) }}" href="{{ route( 'admin.voucher.destroy', $voucher->code ) }}"><i class="icon-trash"></i></a>
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
    <div class="text-center">
        {!! $vouchers->render() !!}
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $('.delete').click(function (e) {
            e.preventDefault();
            e.stopPropagation();

            var voucher_code = $(this).closest('tr').find('#code').html();

            $.ajax({
                method: 'DELETE',
                url: $(this).attr('href'),
                data: {
                    '_token' : "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('tr').filter(function() {
                        return $(this).find('#code').text() === voucher_code
                    }).remove();
                },
                error: function (response) {
                    // handle error
                }
            });
        });
    </script>
@endsection