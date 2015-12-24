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
                        <li class="dropdown dropdown-user pr-md">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="page_user_lock_1.html">
                                        <i class="icon-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out
                                    </a>
                                </li>
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