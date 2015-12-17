@extends( 'front.header' )

@section( 'content' )
    @include( 'front.ranking.nav' )
    <div class="portlet light">
        <div class="portlet-body">
            <div id="map-container hidden-xs hidden-sm" style="background-color: #211C10;">
                <object data="{{ asset( 'img/svg/PW-Territory.svg' ) }}" type="image/svg+xml" id="battlemap"></object>
            </div>
        </div>
    </div>
@endsection

@section( 'footer' )
    @parent
    <script>
        $(function(){
            var cities = {!! $zones !!};
            var main = $('#battlemap');
            main[0].addEventListener('load', function() {
                var map = main.contents();
                var zones = map.find('path');
                alert(JSON.stringify(zones));
                zones.each(function(k, v) {
                    var id = v.id;
                    if (id in cities) {
                        if (cities[id].owner > 0) {
                            v.setAttribute('fill', 'rgb(' + cities[id].color + ')');
                        } else {
                            v.setAttribute('fill', 'rgb(255, 255, 255)');
                            v.setAttribute('opacity', '0.0');
                        }

                        v.addEventListener('mouseover', function() {
                            v.setAttribute('opacity', '0.5');

                            map.find('#zone_level').text(cities[id].level || '-');
                            map.find('#zone_owner').text(cities[id].owner_name || '-');
                            map.find('#zone_challenger').text(cities[id].challenger_name || '-');
                            map.find('#zone_challenge_time').text(((cities[id].challenger > 0) ? cities[id].challenge_time : '-'));
                        });

                        v.addEventListener('mouseout', function() {
                            if (cities[id].owner > 0) {
                                v.setAttribute('opacity', '0.3');
                            } else {
                                v.setAttribute('opacity', '0.0');
                            }
                        }, false);
                    }
                    if ($(this).attr('id') in cities)
                    {

                        console.log('Exists');

                    }
                });
            });
        });
    </script>
@endsection