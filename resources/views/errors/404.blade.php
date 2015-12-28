<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>404 - {{ settings( 'server_name' ) }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/front/main.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'css/front/global.css' ) }}">

        <link href="{{ asset( 'css/front/error.min.css' ) }}" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="favicon.ico" />
    </head>

    <body class="page-404-3">

        <div class="page-inner">
            <img src="{{ asset( 'img/earth.jpg' ) }}" class="img-responsive" alt=""> </div>
        <div class="container error-404">
            <h1>404</h1>
            <h2>{{ trans( 'main.404.title' ) }}</h2>
            <p> {{ trans( 'main.404.content' ) }} </p>
            <p>
                <a href="{{ url( Request::is( 'admin/*' ) ? 'admin' : '/' ) }}" class="btn red btn-outline"> {{ trans( 'main.404.button' ) }} </a>
                <br>
            </p>
        </div>
        <script src="{{ asset( 'js/front/main.js' ) }}"></script>
        <script src="{{ asset( 'js/front/plugins.js' ) }}"></script>
        <script src="{{ asset( 'js/front/global.js' ) }}"></script>

    </body>
</html>