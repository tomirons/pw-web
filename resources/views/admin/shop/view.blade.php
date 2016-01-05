@extends( 'admin.header' )

@section( 'content' )
    @if( $items->count() > 0 )
        @foreach( $items as $item )
            <div class="col-md-4">
                <div class="grid-item box bg-white">
                    <div class="grid_icon">
                        <img src="{{ asset( File::exists( base_path( 'public/img/icons/' . $item->item_id . '.gif' ) ) ? 'img/icons/' . $item->item_id . '.gif' : 'img/icons/0.gif' ) }}" alt="{{ $item->name }}">
                    </div>
                    <div class="grid-item-title">
                        <span class="font-dark" id="name">{{ $item->name }}</span>
                    </div>
                    <div class="grid-item-price font-blue">
                        @if ( $item->discount)
                            <s>{{ $item->price }}</s> <span class="font-red">{{ $item->price - ( ( $item->price / 100 ) * $item->discount ) }}</span> {{ settings( 'currency_name' ) }}
                        @else
                            {{ $item->price . ' ' . settings( 'currency_name' ) }}
                        @endif
                    </div>
                    <div class="caption mt-xs p-sm">
                        @if ( !File::exists( base_path( 'public/img/icons/' . $item->item_id . '.gif' ) ) )
                            <div class="note note-danger">
                                <h4 class="block">{{ trans( 'shop.missing.title' ) }}</h4>
                                <p> {!! trans( 'shop.missing.body', ['path' => base_path( 'public/img/icons/' ), 'id' => $item->item_id] ) !!} </p>
                            </div>
                        @endif
                        <div class="scroller" style="height:100px" data-always-visible="1" data-rail-visible="1" data-rail-color="#111" data-handle-color="#000">
                            {!! $item->description !!}
                        </div>
                        <div class="grid-item-buy text-center mt-md">
                            <div class="text-center fs20">
                                <a class="font-green tooltips mr-md" data-placement="top" data-original-title="{{ trans( 'main.edit' ) }}" href="{{ route( 'admin.shop.edit', $item->id ) }}"><i class="icon-pencil"></i></a>
                                <a class="font-red tooltips delete" data-placement="top" data-original-title="{{ trans( 'main.remove' ) }}" href="{{ route( 'admin.shop.destroy', $item->id ) }}"><i class="icon-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center">
            <h4> {{ trans( 'main.no_results') }} </h4>
        </div>
    @endif

    <div class="text-center">
        {!! $items->render() !!}
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $('.delete').click(function (e) {
            e.preventDefault();
            e.stopPropagation();

            var item_name = $(this).closest('div.col-md-4').find('#name').html();

            $.ajax({
                method: 'DELETE',
                url: $(this).attr('href'),
                data: {
                    '_token' : "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('div.col-md-4').filter(function() {
                        return $(this).find('#name').text() === item_name
                    }).remove();
                },
                error: function (response) {
                    // handle error
                }
            });
        });
    </script>
@endsection