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
        <link rel="stylesheet" href="{{ asset( 'css/admin/main.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/admin/plugins.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/admin/global.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/admin/layout.css' ) }}">

        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a class="logo-default uppercase font-grey" href="{{ url( 'admin' ) }}">{{ settings( 'server_name' ) . ' ACP' }}</a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <a href="#" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img class="img-circle" src="{{ Avatar::create( strtoupper( Auth::user()->name ) )->toBase64() }}">
                                <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{ url( '/' ) }}" target="_blank">
                                        <i class="icon-home"></i> {{ trans( 'main.site' ) }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url( 'auth/logout' ) }}">
                                        <i class="icon-key"></i> {{ trans( 'main.logout' ) }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown visible-lg">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-globe"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
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
        <div class="page-container">
            @include( 'admin.sidebar' )
            <div class="page-content-wrapper">
                <div class="page-content">
                    {!! Breadcrumbs::render() !!}
                    <div class="row">
                        <div class="col-md-12">
                            @include( 'errors.list' )
                            @include( 'flash::message' )
                        </div>
                        <div class="col-md-12">
                            @yield( 'content' )
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include( 'admin.footer' )

        <script src="{{ asset( 'js/admin/main.js' ) }}"></script>
        <script src="{{ asset( 'js/admin/plugins.js' ) }}"></script>
        <script src="{{ asset( 'js/admin/global.js' ) }}"></script>
        <script src="{{ asset( 'js/admin/layout.js' ) }}"></script>

        @yield( 'footer' )
    </body>
</html>