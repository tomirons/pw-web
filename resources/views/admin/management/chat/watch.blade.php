@extends( 'admin.header' )

@section( 'content' )
    <button id="chat_refresh" type="button" class="btn btn-primary"><i class="icon-refresh"></i> {{ trans( 'management.buttons.refresh' ) }}</button>
    <div class="portlet light">
        <div class="portlet-body">
            <div class="portlet-body live-chat">
                <div class="table-responsive">
                    <table id="live_chat" class="table">
                        <thead>
                        <tr>
                            <th> {{ trans( 'management.table.chat.date' ) }} </th>
                            <th> {{ trans( 'management.table.chat.user_id' ) }} </th>
                            <th> {{ trans( 'management.table.chat.channel' ) }} </th>
                            <th> {{ trans( 'management.table.chat.destination' ) }} </th>
                            <th> {{ trans( 'management.table.chat.message' ) }} </th>
                        </tr>
                        </thead>
                        <tbody class="reverse">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $(function(){
            if ($('#live_chat tbody:empty'))
            {
                loadLogs();
            }
        });
        $("#chat_refresh").click(function(){
            loadLogs();
        });

        function loadLogs()
        {
            $('#chat_refresh').prop('disabled', true);
            $('#chat_refresh').html("{{ trans( 'main.loading' ) }}");
            $('#live_chat tbody').empty();
            $.ajax({
                method: 'post',
                url: '{{ url( 'admin/management/chat/logs' ) }}',
                data: {
                    '_token' : "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(r) {
                    for (var i = 0; i < r.length; i++)
                    {
                        $('#live_chat tbody').append("<tr class=" + r[i].row_color + "><td>" + r[i].date + "</td><td>" + r[i].uid + "</td><td>" + r[i].channel + "</td><td>" + r[i].dest + "</td><td>" + r[i].msg + "</td></tr>");
                    }
                    $("tbody.reverse").each(function(elem,index){
                        var arr = $.makeArray($("tr",this).detach());
                        arr.reverse();
                        $(this).append(arr);
                    });
                    $("#chat_refresh").prop('disabled', false);
                    $("#chat_refresh").html("<span class='icon-refresh'></span> {{ trans( 'management.buttons.refresh' ) }}");
                },
                error: function(e) {

                }
            });
        }
    </script>
@endsection