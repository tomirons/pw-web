@extends( 'front.header' )

@section( 'content' )
    @foreach( $articles as $article )
        <div class="portlet mt-element-ribbon light portlet-fit ">
            <div class="ribbon ribbon-right ribbon-clip ribbon-color-{{ $article->color( $article->category ) }} uppercase">
                <div class="ribbon-sub ribbon-clip ribbon-right"></div> {{ trans( 'news.category.' . $article->category ) }}
            </div>
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject text-{{ $article->color( $article->category ) }} bold uppercase">{{ $article->title }}</span>
                </div>
            </div>
            <div class="portlet-body">
                {!! $article->content !!}
            </div>
        </div>
    @endforeach
    <div class="text-center">
        {!! $articles->render() !!}
    </div>
@endsection