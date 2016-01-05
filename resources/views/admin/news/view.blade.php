@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light">
        <div class="portlet-body">
            <div class="panel-group accordion scrollable" id="news_articles">
                @foreach( $articles as $article )
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#news_articles" href="#article_{{ $article->id }}"> <span id="title">{{ $article->title }}</span> <span class="label label-{{ $article->color( $article->category ) }} font-white"> {{ ucfirst( $article->category ) }} </span> </a>
                            </h4>
                        </div>
                        <div id="article_{{ $article->id }}" class="panel-collapse collapse">
                            <div class="panel-body">
                                {!! $article->content !!}
                                <hr>
                                <div class="text-center fs20">
                                    <a class="font-green tooltips mr-md" data-placement="top" data-original-title="{{ trans( 'main.edit' ) }}" href="{{ route( 'admin.news.edit', $article->id ) }}"><i class="icon-pencil"></i></a>
                                    <a class="font-red tooltips delete" data-placement="top" data-original-title="{{ trans( 'main.remove' ) }}" href="{{ route( 'admin.news.destroy', $article->id ) }}"><i class="icon-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center">
        {!! $articles->render() !!}
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $('.delete').click(function (e) {
            e.preventDefault();
            e.stopPropagation();

            var article_title = $(this).closest('div.panel.panel-default').find('#title').html();

            $.ajax({
                method: 'DELETE',
                url: $(this).attr('href'),
                data: {
                    '_token' : "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('div.panel.panel-default').filter(function() {
                        return $(this).find('#title').text() === article_title
                    }).remove();
                },
                error: function (response) {
                    // handle error
                }
            });
        });
    </script>
@endsection