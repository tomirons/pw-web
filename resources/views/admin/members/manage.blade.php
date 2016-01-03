@extends( 'admin.header' )

@section( 'content' )
<div class="portlet light bordered">
    <div class="portlet-title bb-none mb-none">
        <div class="inputs">
            <div class="portlet-input input-inline">
                <div class="input-icon right">
                    <i class="icon-magnifier"></i>
                    <input name="search_query" id="search" type="text" class="form-control input-circle" placeholder="{{ trans( 'members.fields.search.placeholder' ) }}">
                </div>
            </div>
        </div>
    </div>
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
                            <td> {{ $user->role }} </td>
                            <td>
                                <a class="btn red btn-outline" data-toggle="modal" href="#{{ $user->name }}_balance"> {{ trans( 'members.actions.give', ['currency' => settings( 'currency_name' )] ) }} </a>
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
                            </td>
                        </tr>
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

        $("#search").keyup(function(){
            table = $('table tbody');
            $.ajax({
                method: 'POST',
                url: "{{ url( 'admin/members/search' ) }}",
                data: {
                    '_token' : "{{ csrf_token() }}",
                    'search_query' : $("input[name='search_query']").val()
                },
                success: function (response) {
                    table.empty();
                    for (var i = 0; i < response.length; i++)
                    {
                        table.append("<tr><td>" + response[i].ID + "</td><td>" + response[i].name + "</td><td>" + response[i].money + "</td><td>" + response[i].role + "</td><td>" + actions(response[i]) + "</td></tr>");
                    }
                    $("input[id='amount").each(function(){
                        $(this).inputmask({
                            "mask": "9{0,10}.9{0,2}",
                            greedy: false
                        })
                    });
                },
                error: function (response) {
                    console.log(response);
                }
            });

            function actions(response){
                button = "<a class=\"btn red btn-outline\" data-toggle=\"modal\" href=\"#" + response.name + "_balance\"> {{ trans( 'members.actions.give', ['currency' => settings( 'currency_name' )] ) }} </a>";
                modal = "<div class=\"modal fade\" id=\"" + response.name + "_balance\" tabindex=\"-1\" aria-hidden=\"true\">" +
                            "<div class=\"modal-dialog\">" +
                                "<div class=\"modal-content\">" +
                                    "<form action=\"{{ url( 'admin/members/balance' ) }}/" + response.ID + "\" method=\"post\">" +
                                        "<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">" +
                                        "<div class=\"modal-header\">" +
                                            "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>" +
                                            "<h4 class=\"modal-title\">{{ trans( 'members.ajax.title', ['currency' => settings( 'currency_name' )] ) }} " + response.name + ":</h4>" +
                                        "</div>" +
                                        "<div class=\"modal-body\">" +
                                            "<div class=\"form-group form-md-line-input form-md-floating-label\">" +
                                                "<input name=\"amount\" type=\"text\" class=\"form-control\" id=\"amount\">" +
                                                "<label for=\"amount\">{{ trans( 'members.fields.amount.label' ) }}</label>" +
                                            "</div>" +
                                        "</div>" +
                                        "<div class=\"modal-footer\">" +
                                            "<button class=\"btn dark btn-outline\" data-dismiss=\"modal\">{{ trans( 'members.modal.close' ) }}</button>" +
                                            "<button type=\"submit\" class=\"btn green\">{{ trans( 'members.modal.submit' ) }}</button>" +
                                        "</div>" +
                                    "</form>" +
                                "</div>" +
                            "</div>" +
                        "</div>";
                return button + modal;
            }
        });
    </script>
@endsection