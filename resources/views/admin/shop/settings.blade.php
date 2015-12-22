@extends( 'admin.header' )

@section( 'content' )
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form action="{{ url( 'admin/shop/settings' ) }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="items_per_page">{{ trans( 'shop.items_per_page' ) }}</label>
                        <div class="col-md-9">
                            <input name="items_per_page" type="number" class="form-control" id="items_per_page" placeholder="{{ trans( 'shop.items_per_page' ) }}" value="{{ settings( 'shop_items_per_page' ) }}">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans( 'shop.items_per_page_desc' ) }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">{{ trans( 'main.save_settings' ) }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection