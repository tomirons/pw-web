<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ pagetitle()->get() }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/front/main.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/front/plugins.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/front/global.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/front/layout.css' ) }}">

        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body class="page-container-bg-solid page-boxed">
        <div class="page-header">
            <div class="page-header-top">
                <div class="container">
                    <div class="page-logo">
                        <a class="logo-default navbar-brand uppercase font-dark" href="{{ url( '/' ) }}">{{ settings( 'server_name', 'Perfect World Panel' ) }}</a>
                    </div>
                    <a href="#" class="menu-toggler"></a>
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            @if ( Auth::guest() )
                                <li>
                                    <a href="{{ url( 'auth/login' ) }}">
                                       {{ trans( 'main.login_link' ) }}
                                    </a>
                                </li>
                            @else
                                <li class="hidden-xs">
                                    <a href="{{ url( 'donate' ) }}">
                                        {{ trans( 'main.acc_balance', ['money' => Auth::user()->balance(), 'currency' => settings('currency_name')] ) }}
                                    </a>
                                </li>
                                <li class="dropdown dropdown-separator hidden-xs">
                                    <span class="separator"></span>
                                </li>
                                <li class="dropdown dropdown-dark">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        {{ Auth::user()->characterId() ? Auth::user()->characterName() : trans( 'main.select_character' ) }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        @if ( $api->online )
                                            {{--*/ $roles = Auth::user()->roles() /*--}}
                                            @if ( count( $roles ) > 0 )
                                                @foreach( $roles as $role )
                                                    <li>
                                                        <a href="{{ url( 'character/select/' . $role['id'] ) }}">
                                                            {{ $role['name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @else
                                                <li>
                                                    <a href="#">
                                                        {{ trans( 'main.char_list_error' ) }}
                                                    </a>
                                                </li>
                                            @endif
                                        @else
                                            <li>
                                                <a href="#">
                                                    {{ trans( 'main.server_not_online' ) }}
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-separator">
                                    <span class="separator"></span>
                                </li>
                                <li class="dropdown dropdown-dark">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        @if ( !$agent->isMobile() )
                                            <img class="avatar" src="{{ Avatar::create( strtoupper( Auth::user()->name ) )->toBase64() }}" />
                                        @endif
                                        <span>{{ Auth::user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        @if ( Auth::user()->isAdmin() )
                                            <li>
                                                <a href="{{ url( 'admin' ) }}" target="_blank">
                                                    <i class="icon-rocket"></i> {{ trans( 'main.acp_link' ) }}
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{ url( 'account/settings' ) }}">
                                                <i class="icon-user"></i> {{ trans( 'main.acc_settings' ) }}
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="{{ url( 'auth/logout' ) }}">
                                                <i class="icon-key"></i> {{ trans( 'main.logout' ) }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-header-menu">
                <div class="container">
                    <div class="hor-menu">
                        <ul class="nav navbar-nav">
                            @foreach( $apps as $app )
                                @if ( $app->enabled )
                                    <li {{ ( $app->key == 'news' ) ? ( Request::is( '/' ) ? 'class=active' : NULL ) : ( Request::is( $app->key . '*' ) ? 'class=active' : NULL ) }}>
                                        <a href="{{ ( $app->key == 'news' ) ? url( '/') : url( '/' . $app->key ) }}"> {{ trans( 'main.apps.' . $app->key ) }} </a>
                                    </li>
                                @endif
                            @endforeach
                            <li class="menu-dropdown classic-menu-dropdown visible-lg" style="position: absolute; right: 0">
                                <a href="#">
                                    <i class="icon-globe"></i>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    @foreach( $languages as $language )
                                        <li>
                                            <a href="{{ Request::url() . '?language=' . $language }}">
                                                <img src="{{ asset( 'img/flags/' . $language . '.png' ) }}"> {{ trans( 'language.' . $language ) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-container">
            <div class="page-content-wrapper">
                {!! Breadcrumbs::render() !!}
                <div class="page-content">
                    <div class="container">
                        <div class="page-content-inner">
                            @include( 'errors.list' )
                            @include( 'flash::message' )
                            <div class="row">
                                <div class="col-md-{{ Request::is( 'shop*' ) ? '12' : '9' }}">
                                    @yield( 'content' )
                                </div>
                                @unless( Request::is( 'shop*' ) )
                                    <div class="col-md-3">
                                        @include( 'front.widgets' )
                                    </div>
                                @endunless
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include( 'front.footer' )

        <script src="{{ asset( 'js/front/main.js' ) }}"></script>
        <script src="{{ asset( 'js/front/plugins.js' ) }}"></script>
        <script src="{{ asset( 'js/front/global.js' ) }}"></script>
        <script src="{{ asset( 'js/front/layout.js' ) }}"></script>

        @yield( 'footer' )
    </body>
</html>