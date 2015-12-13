@extends( 'front.header' )

@section( 'content' )
    <div class="row">
        <a href="{{ url( 'donate' ) }}" class="btn blue mb-md"> {{ trans( 'main.acc_balance', ['money' => Auth::user()->money, 'currency' => settings('currency_name')] ) }} </a>
    </div>
    @foreach( $services as $service )
        <div class="col-md-6">
            <form action="">
                <div class="grid-item box bg-white">
                    <div class="grid_icon_service">
                        <i class="fa fa-{{ $service->icon }}"></i>
                    </div>
                    <div class="grid-item-title">
                        <span class="font-dark">{{ trans( 'services.' . $service->key . '.title') }}</span>
                    </div>
                    <div class="grid-item-price font-blue">
                        @if ( $service->price > 0 )
                            {{ number_format( $service->price ) }} {{ ( $service->currency_type == 'virtual' ) ? settings( 'currency_name' ) : trans( 'services.ingame_gold' ) }}
                        @else
                            Free
                        @endif
                    </div>
                    <div class="caption">
                        <div class="grid-service-description">
                            <div>
                                <small><strong>{{ trans( 'services.' . $service->key . '.description') }}</strong></small>
                            </div>
                            <div>
                                <small>{{ trans( 'services.requirements' ) }}</small>
                                <ul class="disc">
                                    @foreach ( trans( 'services.' . $service->key . '.requirements') as $requirement )
                                        <li>
                                            <small>{{ trans( 'services.' . $requirement ) }}</small>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="grid-service-buy text-center mb-md">
                            @if ( is_array( trans( 'services.' . $service->key . '.input') ) )
                                <div class="col-md-12">
                                    <div class="input-group">
                                        {{--*/ $placeholder = trans( 'services.' . $service->key . '.input')['placeholder'] /*--}}
                                        <input name="{{ trans( 'services.' . $service->key . '.input')['name'] }}" type="{{ trans( 'services.' . $service->key . '.input')['type'] }}" class="form-control" {{ ( trans( 'services.' . $service->key . '.input')['type'] == 'number' ) ? 'min=0' : NULL }} placeholder="{{ trans( 'services.' . $placeholder ) }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">{{ trans( 'main.buy' ) }}</button>
                                        </span>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-11">
                                        <button class="btn btn-primary btn-block" type="submit">{{ trans( 'main.buy' ) }}</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection