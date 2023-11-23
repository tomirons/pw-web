@extends( 'front.header' )

@section( 'content' )
<style>
    .portlet {
        background-color: #34495e;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.25);
    }

    .portlet-title {
        background-color: #34495e; /* Same background color as the login form */
        color: #ffffff;
        text-align: center;
        border-bottom: 20px solid #34495e; /* Same color as the background */
    }

    .portlet-body {
        background-color: #34495e; /* Same background color as the login form */
        color: #ff6347;
    }
</style>
@foreach( $articles as $article )
    <div class="portlet mt-element-ribbon portlet-fit ">
        <div class="ribbon ribbon-right ribbon-clip uppercase">
            <div class="ribbon-sub ribbon-clip ribbon-right"></div> {{ trans( 'news.category.' . $article->category ) }}
        </div>
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject bold uppercase">{{ $article->title }}</span>
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