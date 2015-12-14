<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Perfect World Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset( 'front/css/main.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'front/css/plugins.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'front/css/global.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'front/css/layout.css' ) }}">

    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="page-container-bg-solid page-boxed">
    <div class="page-header">
        <!-- BEGIN HEADER TOP -->
        <div class="page-header-top">
            <div class="container">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a class="logo-default navbar-brand uppercase font-dark" href="{{ url( '/' ) }}">Perfect World Panel</a>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="#" class="menu-toggler"></a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        @if ( Auth::user() )
                            <!-- BEGIN CHARACTER DROPDOWN -->
                            <li class="dropdown dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a id="charList" href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    {{ Auth::user()->character() ? Auth::user()->character()['base']['name'] : trans( 'main.select_character' ) }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
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
                                </ul>
                            </li>
                            <!-- END CHARACTER DROPDOWN -->
                            <li class="droddown dropdown-separator">
                                <span class="separator"></span>
                            </li>
                        @endif
                        @if ( Auth::guest() )
                            <li>
                                <a href="{{ url( 'auth/login' ) }}" class="nav-link">
                                   {{ trans( 'main.login_link' ) }}
                                </a>
                            </li>
                        @else
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    @if ( Auth::user()->isAdmin() )
                                        <li>
                                            <a href="{{ url( 'admin' ) }}">
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
                            <!-- END USER LOGIN DROPDOWN -->
                        @endif
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- END HEADER TOP -->
        <div class="page-header-menu">
            <div class="container">
                <div class="hor-menu">
                    <ul class="nav navbar-nav">
                        <li {{ Request::is( '/' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/' ) }}"> {{ trans( 'main.apps.news') }} </a>
                        </li>
                        <li {{ Request::is( 'shop*' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/shop' ) }}"> {{ trans( 'main.apps.shop') }} </a>
                        </li>
                        <li {{ Request::is( 'donate*' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/donate' ) }}"> {{ trans( 'main.apps.donate') }} </a>
                        </li>
                        <li {{ Request::is( 'vote*' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/vote' ) }}"> {{ trans( 'main.apps.vote') }} </a>
                        </li>
                        <li {{ Request::is( 'voucher*' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/voucher' ) }}"> {{ trans( 'main.apps.voucher') }} </a>
                        </li>
                        <li {{ Request::is( 'services*' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/services' ) }}"> {{ trans( 'main.apps.services') }} </a>
                        </li>
                        <li {{ Request::is( 'ranking*' ) ? 'class=active' : NULL }}>
                            <a href="{{ url( '/ranking' ) }}"> {{ trans( 'main.apps.ranking') }} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            {!! Breadcrumbs::render() !!}
            <div class="page-content">
                <div class="container">
                    <div class="page-content-inner">
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
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    @include( 'front.footer' )

    <script src="{{ asset( 'front/js/main.js' ) }}"></script>
    <script src="{{ asset( 'front/js/plugins.js' ) }}"></script>
    <script src="{{ asset( 'front/js/global.js' ) }}"></script>
    <script src="{{ asset( 'front/js/layout.js' ) }}"></script>

    @if ( !$api->serverOnline() )
        <script>
            $(function() {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "positionClass": "toast-top-full-width",
                    "onclick": null,
                    "showDuration": "0",
                    "hideDuration": "0",
                    "timeOut": "0",
                    "extendedTimeOut": "0",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };
                toastr.error("{{ trans( 'main.server_offline.message' ) }}", "{{ trans( 'main.server_offline.title' ) }}");
            });
        </script>
    @endif

    @yield( 'footer' )
</body>
</html>