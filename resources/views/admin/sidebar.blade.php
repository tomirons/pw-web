<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            {{--*/ $menus = config( 'menu.admin' ) /*--}}
            @foreach( $menus as $name => $menu )
                @if( !is_array( $menu ) )
                    @if( $menu == 'dashboard' )
                        <li class="nav-item start {{ Request::is( 'admin' ) ? 'active' : NULL }}">
                            <a href="{{ url( 'admin/') }}" class="nav-link">
                                <i class="icon-{{ config( 'menu.icons.dashboard' ) }}"></i>
                                <span class="title">{{ trans( 'menu.dashboard' ) }}</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item start {{ Request::is( '*' . $name . '*' ) ? 'active' : NULL }}">
                            <a href="{{ url( 'admin/' . $name ) }}" class="nav-link">
                                <i class="icon-{{ config( 'menu.icons.' . $name ) }}"></i>
                                <span class="title">{{ trans( 'menu.' . $name ) }}</span>
                            </a>
                        </li>
                    @endif
                @else
                    @if( isset( $menu['application'] ) )
                        @if ( \App\Application::find( $name )->enabled )
                            <li class="nav-item {{ Request::is( '*' . $name . '*' ) ? 'active open' : NULL }}">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="icon-{{ config( 'menu.icons.' . $name ) }}"></i>
                                    <span class="title">{{ trans( 'menu.' . $name . '.title' ) }}</span>
                                    <span class="arrow {{ Request::is( '*' . $name . '*' ) ? 'open' : NULL }}"></span>
                                </a>
                                <ul class="sub-menu">
                                    @foreach( $menu as $title )
                                        @unless( $title == 'application' )
                                            <li class="nav-item {{ Request::is( '*/' . $name . '/' . $title) ? 'active' : NULL }}">
                                                <a href="{{ url( ( $title == 'view' ? 'admin/' . $name : 'admin/' . $name . '/' . $title) ) }}" class="nav-link">
                                                    <span class="title">{{ trans( 'menu.' . $name . '.' . $title ) }}</span>
                                                </a>
                                            </li>
                                        @endunless
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @else
                        <li class="nav-item {{ Request::is( '*' . $name . '*' ) ? 'active open' : NULL }}">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-{{ config( 'menu.icons.' . $name ) }}"></i>
                                <span class="title">{{ trans( 'menu.' . $name . '.title' ) }}</span>
                                <span class="arrow {{ Request::is( '*' . $name . '*' ) ? 'open' : NULL }}"></span>
                            </a>
                            <ul class="sub-menu">
                                @foreach( $menu as $title => $sub )
                                    @if( is_array( $sub ) )
                                        <li class="nav-item {{ Request::is( '*' . $name . '/' . $title . '*' ) ? 'active open' : NULL }}">
                                            <a href="#" class="nav-link nav-toggle">
                                                <span class="title">{{ trans( 'menu.' . $name . '.' . $title . '.title' ) }}</span>
                                                <span class="arrow {{ Request::is( '*' . $name . '/' . $title . '*' ) ? 'open' : NULL }}"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                @foreach( $sub as $value )
                                                    <li class="nav-item {{ Request::is( '*' . $name . '/' . $title . '/' . $value . '*' ) ? 'active' : NULL }}">
                                                        <a href="{{ url( 'admin/' . $name . '/' . $title . '/' . $value ) }}" class="nav-link "> {{ trans( 'menu.' . $name . '.' . $title . '.' . $value ) }} </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item {{ Request::is( '*/' . $name . '/' . $sub ) ? 'active' : NULL }}">
                                            <a href="{{ url( 'admin/' . $name . '/' . $sub ) }}" class="nav-link">
                                                <span class="title">{{ trans( 'menu.' . $name . '.' . $sub ) }}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endif
            @endforeach
        </ul>
    </div>
</div>