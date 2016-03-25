@extends( 'front.header' )

@section( 'content' )
        @if ( !settings( 'paypal_client_id' ) && !settings( 'paymentwall_link' ) )
            <div class="portlet light">
                <div class="portlet-body text-center">
                    {{ trans( 'donate.no_methods' ) }}
                </div>
            </div>
        @else
            @if ( settings( 'paypal_client_id' ) )
                <div class="portlet light">
                    <div class="portlet-body">
                        <form action="{{ url( 'donate/paypal' ) }}" onsubmit="return donation_check();" method="post">
                            {!! csrf_field() !!}
                            <legend>{{ trans( 'donate.paypal_title' ) }}</legend>
                            <div class="col-md-12 mb-md">
                                @if( settings( 'paypal_double' ) )
                                    <div class="alert alert-info">
                                        {!! trans( 'donate.double_notice' ) !!}
                                    </div>
                                @endif
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <div class="input-group left-addon right-addon">
                                        <span class="input-group-addon">$</span>
                                        <input id="donation_dollars" name="dollars" type="number" class="form-control">
                                        <span class="input-group-addon">=</span>
                                        <input id="donation_tokens" name="tokens" type="number" class="form-control">
                                        <span class="input-group-addon">{{ settings( 'currency_name' ) }}</span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-block btn-lg blue" type="submit">{{ trans( 'main.buy' ) }}</button>
                        </form>
                    </div>
                </div>
            @endif
            @if ( settings( 'paymentwall_link' ) && settings( 'paymentwall_key' ) )
                <div class="portlet light">
                    <div class="portlet-body">
                        <legend>{{ trans( 'donate.paymentwall_title' ) }}</legend>
                        @if( settings( 'paymentwall_double' ) )
                            <div class="alert alert-info">
                                {!! trans( 'donate.double_notice' ) !!}
                            </div>
                        @endif
                        <iframe src="{{ str_replace( [ '[USER_ID]', '[USER_E]', '[USER_D]' ], [ Auth::user()->ID, Auth::user()->email, Auth::user()->creatime->timestamp ], settings( 'paymentwall_link' ) ) }}" width="100%" height="800" frameborder="0"></iframe>
                    </div>
                </div>
            @endif
        @endif
@endsection

@section( 'footer' )
    @parent
    <script>
        function donation_check() {
            dollar_minimum = "{{ settings('paypal_min') }}";
            dollars_paypal = $('#donation_tokens').val();
            dollars = $('#donation_dollars').val();
            if (dollars == null || dollars == "" || dollars_paypal == null || dollars_paypal == "") {
                toastr.error("{!! trans( 'donate.error.message', ['currency' => settings('currency_name')] ) !!}", "{{ trans( 'donate.error.title' ) }}");
                return false;
            } else if ( parseFloat( dollars ) < dollar_minimum || parseFloat( dollars_paypal ) < dollar_minimum ) {
                toastr.error("{{ trans( 'donate.error.minimum', ['min' => settings('paypal_min')] ) }}", "{{ trans( 'donate.error.title' ) }}");
                return false;
            } else {
                return true;
            }
        }

        function format_number(field_id, decimal_places) {
            field = $("#" + field_id);
            new_val = Math.round(field.val() * Math.pow(10, decimal_places)) / Math
                            .pow(10, decimal_places);
            if (parseFloat(new_val) != parseFloat(field.val()) || (field.val().charAt(0) == "0" && field.val().charAt(field.val().length - 1) != ".")) {
                field.val(new_val);
            }
        }

        $(function() {
            var per_USD = "{{ settings('paypal_per') }}";
            var double_donation = "{{ settings( 'paypal_double' ) }}";
            $("#donation_dollars").on('input', function () {
                format_number("donation_dollars", 2);
                $("#donation_tokens").val($("#donation_dollars").val() * ( double_donation ? per_USD * 2 : per_USD ) );
                format_number("donation_tokens", 0);
            });
            $("#donation_tokens").on('input', function () {
                format_number("donation_tokens", 0);
                $("#donation_dollars").val($("#donation_tokens").val() / ( double_donation ? per_USD * 2 : per_USD ) );
                format_number("donation_dollars", 2);
            });
        });
    </script>
@endsection