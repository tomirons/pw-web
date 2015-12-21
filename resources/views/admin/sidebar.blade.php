<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="nav-item start {{ Request::is( 'admin') ? 'active' : NULL }}">
                <a href="{{ url( '/admin/') }}" class="nav-link">
                    <i class="fa fa-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is( '*system*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-cogs"></i>
                    <span class="title">{{ trans( 'main.apps.system' ) }}</span>
                    <span class="arrow {{ Request::is( '*system*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Request::is( '*system/panel') ? 'active' : NULL }}">
                        <a href="{{ url( 'admin/system/panel' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'system.panel' ) }}</span>
                        </a>
                    </li>
                    <!--<li class="nav-item {{ Request::is( '*system/widget') ? 'active' : NULL }}">
                        <a href="{{ url( 'admin/system/widget' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'system.widget' ) }}</span>
                        </a>
                    </li>-->
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*news*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">{{ trans( 'main.apps.news' ) }}</span>
                    <span class="arrow {{ Request::is( '*news*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Request::is( '*news/create') ? 'active' : NULL }}">
                        <a href="{{ url( 'admin/news/create' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'news.add' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is( '*news') ? 'active' : NULL }}">
                        <a href="{{ url( 'admin/news' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'news.view' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is( '*news/settings') ? 'active' : NULL }}">
                        <a href="{{ url( 'admin/news/settings' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'main.settings' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*shop*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">{{ trans( 'main.apps.shop' ) }}</span>
                    <span class="arrow {{ Request::is( '*shop*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/shop/create' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'shop.add' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/shop' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'shop.view' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/shop/settings' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'main.settings' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*donate*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-paypal"></i>
                    <span class="title">{{ trans( 'main.apps.donate' ) }}</span>
                    <span class="arrow {{ Request::is( '*donate*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/donate/settings' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'main.settings' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*voucher*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-tag"></i>
                    <span class="title">{{ trans( 'main.apps.voucher' ) }}</span>
                    <span class="arrow {{ Request::is( '*voucher*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/voucher/create' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'voucher.add' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/voucher' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'voucher.view' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*vote*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="title">{{ trans( 'main.apps.vote' ) }}</span>
                    <span class="arrow {{ Request::is( '*vote*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/vote/create' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'vote.add' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/vote' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'vote.view' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*services*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-cog"></i>
                    <span class="title">{{ trans( 'main.apps.services' ) }}</span>
                    <span class="arrow {{ Request::is( '*services*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/services/settings' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'main.settings' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*ranking*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-bar-chart"></i>
                    <span class="title">{{ trans( 'main.apps.ranking' ) }}</span>
                    <span class="arrow {{ Request::is( '*ranking*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/ranking/settings' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'main.settings' ) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is( '*management*') ? 'active open' : NULL }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ trans( 'main.apps.manage' ) }}</span>
                    <span class="arrow {{ Request::is( '*management*') ? 'open' : NULL }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ url( 'admin/management/broadcast' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'management.broadcast' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/management/mailer' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'management.mailer' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/management/forbid' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'management.forbid' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url( 'admin/management/gms' ) }}" class="nav-link">
                            <span class="title">{{ trans( 'management.gms' ) }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is( '*management/chat*') ? 'active open' : NULL }}">
                        <a href="#" class="nav-link nav-toggle">
                            <span class="title">{{ trans( 'management.chat' ) }}</span>
                            <span class="arrow {{ Request::is( '*management/chat*') ? 'open' : NULL }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{ url( 'admin/management/chat/watch' ) }}" class="nav-link "> {{ trans( 'management.watch' ) }} </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url( 'admin/management/chat/settings' ) }}" class="nav-link "> {{ trans( 'main.settings' ) }} </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>