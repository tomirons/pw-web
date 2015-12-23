@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/news/settings' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="articles_per_page">{{ trans( 'news.articles_per_page' ) }}</label>
                        <div class="col-md-9">
                            <input name="articles_per_page" type="number" class="form-control" id="articles_per_page" value="{{ settings( 'news_items_per_page' ) }}">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans( 'news.articles_per_page_desc' ) }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'main.save_settings' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection