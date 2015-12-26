<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>500 - {{ settings( 'server_name' ) }}</title>
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
    <body class="page-500-full-page">
        <div class="row">
            <div class="col-md-12 page-500">
                <div class=" number font-red"> 500 </div>
                <div class=" details">
                    <h3>{{ trans( 'main.500.title' ) }}</h3>
                    <p> {{ trans( 'main.500.content' ) }}
                        <br/> </p>
                    <p>
                        <a href="{{ ( Request::is( 'admin/*' ) ? 'admin' : '/' ) }}" class="btn red btn-outline"> {{ trans( 'main.500.button' ) }} </a>
                        <br> </p>
                </div>
            </div>
        </div>
        <script src="{{ asset( 'js/front/main.js' ) }}"></script>
        <script src="{{ asset( 'js/front/plugins.js' ) }}"></script>
        <script src="{{ asset( 'js/front/global.js' ) }}"></script>
    </body>
</html>