@extends( 'front.header' )

@section( 'content' )
    @if ( count( $sites ) == 0 )
        <div class="portlet light">
            <div class="portlet-body text-center">
                {{ trans( 'vote.no_sites' ) }}
            </div>
        </div>
    @else
        @foreach( $sites as $site )
            <div class="portlet mt-element-ribbon light portlet-fit">
                @if ( $site->double_rewards )
                    <div class="ribbon ribbon-right ribbon-clip ribbon-shadow ribbon-color-primary uppercase">
                        <div class="ribbon-sub ribbon-clip ribbon-right"></div> {{ trans( 'vote.double_rewards' ) }}
                    </div>
                @endif
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold">{{ $site->name }}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    @if ( $vote_info[ $site->id ]['status'] )
                        <form action="{{ url( 'vote/check/' . $site->id ) }}" method="post">
                            {!! csrf_field() !!}
                            <button class="btn btn-block btn-lg btn-primary" type="submit">{{ trans( 'vote.button', ['name' => $site->name] ) }}</button>
                        </form>
                    @else
                        <div class="bg-grey text-center p-md">
                            <span>{{ trans( 'vote.cooldown' ) }}</span>
                            <div data-countdown="{{ $vote_info[ $site->id ]['end_time'] }}"></div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    @endif
@endsection

@section( 'footer' )
    @parent
    <script>
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            seconds = new Date().getTime() + (finalDate * 1000);
            $this.countdown(seconds, function(event) {
                $this.html(event.strftime(
                      "<span class=\"clock\">%-H</span> {{ trans( 'vote.time.hours' ) }}"
                    + "<span class=\"clock\">%-M</span> {{ trans( 'vote.time.minutes' ) }}"
                    + "<span class=\"clock\">%-S</span> {{ trans( 'vote.time.seconds' ) }}"
                ));
            })
            .on('finish.countdown', function(event) {
                $(this).html("{{ trans( 'vote.cooldown_done' ) }}}");
                location.reload();
            });
        });
    </script>
@endsection