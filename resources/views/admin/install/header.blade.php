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

    <body class="bg-white">
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="page-content installer">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        @include( 'admin.install.steps' )
                    </div>
                    <div class="col-md-12">
                        @yield( 'content' )
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset( 'js/admin/main.js' ) }}"></script>
    <script src="{{ asset( 'js/admin/plugins.js' ) }}"></script>
    <script src="{{ asset( 'js/admin/global.js' ) }}"></script>
    <script src="{{ asset( 'js/admin/layout.js' ) }}"></script>

    </body>
</html>