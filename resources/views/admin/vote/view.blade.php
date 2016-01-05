@extends( 'admin.header' )

@section( 'content' )
    @if ( setupTasks() )
        <div class="portlet box red-flamingo">
            <div class="portlet-title">
                <div class="caption"> {{ trans( 'main.cron.add' ) }} </div>
            </div>
            <div class="portlet-body">
                <p>{{ trans( 'main.cron.info' ) }}</p>
                <p>{{ trans( 'main.cron.job' ) }}</p>
            </div>
        </div>
    @endif
    <div class="portlet light">
        <div class="portlet-body">
            <div class="panel-group accordion scrollable" id="vote_sites">
                @foreach( $sites as $site )
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#vote_sites" href="#site_{{ $site->id }}"> <span id="name">{{ $site->name }}</span> {!! $site->double_rewards ? "<span class=\"label label-primary font-white\"> " . trans( 'vote.double_rewards' ) . "</span>" : NULL !!} </a>
                            </h4>
                        </div>
                        <div id="site_{{ $site->id }}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form action="#" class="form-horizontal">
                                    <div class="col-md-12 col-md-offset-1">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label">{{ trans( 'vote.fields.link' ) }}</label>
                                                <div class="col-md-4">
                                                    <div class="form-control form-control-static"> {{ $site->link }} </div>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label">{{ trans( 'vote.fields.limit' ) }}</label>
                                                <div class="col-md-4">
                                                    <div class="form-control form-control-static"> {{ $site->hour_limit }} </div>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-md-offset-1">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label">{{ trans( 'vote.fields.reward' ) }}</label>
                                                <div class="col-md-4">
                                                    <div class="form-control form-control-static"> {{ $site->reward_amount }} </div>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label">{{ trans( 'vote.fields.type.title' ) }}</label>
                                                <div class="col-md-4">
                                                    <div class="form-control form-control-static"> {{ $site->type }} </div>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center fs20">
                                    <a class="font-green tooltips mr-md" data-placement="top" data-original-title="{{ trans( 'main.edit' ) }}" href="{{ route( 'admin.vote.edit', $site->id ) }}"><i class="icon-pencil"></i></a>
                                    <a class="font-red tooltips delete" data-placement="top" data-original-title="{{ trans( 'main.remove' ) }}" href="{{ route( 'admin.vote.destroy', $site->id ) }}"><i class="icon-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center">
        {!! $sites->render() !!}
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $('.delete').click(function (e) {
            e.preventDefault();
            e.stopPropagation();

            var site_name = $(this).closest('div.panel.panel-default').find('#name').html();

            $.ajax({
                method: 'DELETE',
                url: $(this).attr('href'),
                data: {
                    '_token' : "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('div.panel.panel-default').filter(function() {
                        return $(this).find('#name').text() === site_name
                    }).remove();
                },
                error: function (response) {
                    // handle error
                }
            });
        });
    </script>
@endsection