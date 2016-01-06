<div class="col-md-3 mb-md">
    <div class="mt-element-list">
        <div class="mt-list-container list-simple ext-1 group">
            <a class="list-toggle-container" href="{{ url( 'shop/' ) }}">
                <div class="list-toggle uppercase {{ Request::is( 'shop' ) ? 'done' : NULL }}"> {{ trans( 'shop.all' ) }} </div>
            </a>
            <a class="list-toggle-container" href="{{ url( 'shop/mask/1' ) }}">
                <div class="list-toggle uppercase {{ Request::is( 'shop/mask/1' ) ? 'done' : NULL }}"> {{ trans( 'shop.masks.1' ) }} </div>
            </a>
            <a class="list-toggle-container" data-toggle="collapse" href="#equipment" aria-expanded="false">
                <div class="list-toggle uppercase {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.armor' ) ) ? 'done' : NULL }}"> {{ trans( 'shop.equipment' ) }} </div>
            </a>
            <div class="panel-collapse collapse {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.armor' ) ) ? 'in' : NULL }}" id="equipment">
                <ul>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/2' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/2' ) }}">{{ trans( 'shop.masks.armor.2' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/256' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/256' ) }}">{{ trans( 'shop.masks.armor.256' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/16' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/16' ) }}">{{ trans( 'shop.masks.armor.16' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/8' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/8' ) }}">{{ trans( 'shop.masks.armor.8' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/64' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/64' ) }}">{{ trans( 'shop.masks.armor.64' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/128' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/128' ) }}">{{ trans( 'shop.masks.armor.128' ) }}</a>
                            </h3>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="list-toggle-container" data-toggle="collapse" href="#fashion" aria-expanded="false">
                <div class="list-toggle uppercase {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.fashion' ) ) ? 'done' : NULL }}"> {{ trans( 'shop.fashion' ) }} </div>
            </a>
            <div class="panel-collapse collapse {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.fashion' ) ) ? 'in' : NULL }}" id="fashion">
                <ul>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/65536' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/65536' ) }}">{{ trans( 'shop.masks.fashion.65536' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/8192' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/8192' ) }}">{{ trans( 'shop.masks.fashion.8192' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/16384' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/16384' ) }}">{{ trans( 'shop.masks.fashion.16384' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/32768' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/32768' ) }}">{{ trans( 'shop.masks.fashion.32768' ) }}</a>
                            </h3>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="list-toggle-container" data-toggle="collapse" href="#accessories" aria-expanded="false">
                <div class="list-toggle uppercase {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.accessories' ) ) ? 'done' : NULL }}"> {{ trans( 'shop.accessories' ) }} </div>
            </a>
            <div class="panel-collapse collapse {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.accessories' ) ) ? 'in' : NULL }}" id="accessories">
                <ul>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/4' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/4' ) }}">{{ trans( 'shop.masks.accessories.4' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/32' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/32' ) }}">{{ trans( 'shop.masks.accessories.32' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/1536' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/1536' ) }}">{{ trans( 'shop.masks.accessories.1536' ) }}</a>
                            </h3>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="list-toggle-container" data-toggle="collapse" href="#charms" aria-expanded="false">
                <div class="list-toggle uppercase {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.charms' ) ) ? 'done' : NULL }}"> {{ trans( 'shop.charms' ) }} </div>
            </a>
            <div class="panel-collapse collapse {{ array_key_exists( Request::segment( 3 ), trans( 'shop.masks.charms' ) ) ? 'in' : NULL }}" id="charms">
                <ul>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/1048576' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/1048576' ) }}">{{ trans( 'shop.masks.charms.1048576' ) }}</a>
                            </h3>
                        </div>
                    </li>
                    <li class="mt-list-item {{ Request::is( 'shop/mask/2097152' ) ? 'done' : NULL }}">
                        <div class="list-item-content p-none">
                            <h3 class="uppercase">
                                <a href="{{ url( 'shop/mask/2097152' ) }}">{{ trans( 'shop.masks.charms.2097152' ) }}</a>
                            </h3>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="list-toggle-container" href="{{ url( 'shop/mask/262144' ) }}">
                <div class="list-toggle uppercase {{ Request::is( 'shop/mask/262144' ) ? 'done' : NULL }}"> {{ trans( 'shop.masks.262144' ) }} </div>
            </a>
            <a class="list-toggle-container" href="{{ url( 'shop/mask/524288' ) }}">
                <div class="list-toggle uppercase {{ Request::is( 'shop/mask/524288' ) ? 'done' : NULL }}"> {{ trans( 'shop.masks.524288' ) }} </div>
            </a>
            <a class="list-toggle-container" href="{{ url( 'shop/mask/4096' ) }}">
                <div class="list-toggle uppercase {{ Request::is( 'shop/mask/4096' ) ? 'done' : NULL }}"> {{ trans( 'shop.masks.4096' ) }} </div>
            </a>
            <a class="list-toggle-container" href="{{ url( 'shop/mask/0' ) }}">
                <div class="list-toggle uppercase {{ Request::is( 'shop/mask/0' ) ? 'done' : NULL }}"> {{ trans( 'shop.masks.0' ) }} </div>
            </a>
        </div>
    </div>
</div>