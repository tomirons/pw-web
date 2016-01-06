@extends( 'front.header' )

@section( 'content' )
    @include( 'errors.list' )
    @foreach( $services as $service )
        @if ( $service->enabled)
            <div class="col-md-6">
                <form action="{{ url( 'services/' . $service->key ) }}" method="post">
                    <div class="grid-item box bg-white">
                        <div class="grid_icon_service">
                            <i class="icon-{{ $service->icon }}"></i>
                        </div>
                        <div class="grid-item-title">
                            <span class="font-dark">{{ trans( 'services.' . $service->key . '.title') }}</span>
                        </div>
                        <div class="grid-item-price font-blue">
                            @if ( $service->price > 0 )
                                {{ number_format( $service->price ) }} {{ ( $service->currency_type == 'virtual' ) ? settings( 'currency_name' ) : trans( 'services.ingame_gold' ) }}
                            @else
                                {{ trans( 'services.free' ) }}
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
                                        {{--*/ $requirements = trans( 'services.' . $service->key . '.requirements') /*--}}
                                        @foreach ( $requirements as $requirement )
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
                                            <input name="{{ trans( 'services.' . $service->key . '.input')['name'] }}" type="{{ trans( 'services.' . $service->key . '.input')['type'] }}" class="form-control" placeholder="{{ trans( 'services.' . $placeholder ) }}">
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
                    {!! csrf_field() !!}
                </form>
            </div>
        @endif
    @endforeach
@endsection