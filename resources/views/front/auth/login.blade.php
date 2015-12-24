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
    <link rel="stylesheet" href="{{ asset( 'css/front/global.css' ) }}">

    <link href="{{ asset( 'css/front/login.min.css' ) }}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="login mb-lg">
    <!-- BEGIN LOGIN -->
    <div class="logo"></div>
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{ url( 'auth/login' ) }}" method="post">
            <h3 class="form-title font-green">{{ trans( 'main.signin.title' ) }}</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> {{ trans( 'main.signin.error' ) }} </span>
            </div>
            @if ( $errors->any() )
                <div class="alert alert-danger">
                    @foreach( $errors->all() as $e )
                        <span>{{ $e }}</span><br>
                    @endforeach
                </div>
            @endif
            {!! csrf_field() !!}
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ trans( 'main.signin.username' ) }}</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="text" placeholder="{{ trans( 'main.signin.username' ) }}" name="username" /> </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ trans( 'main.signin.password' ) }}</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="{{ trans( 'main.signin.password' ) }}" name="password" /> </div>
            <div class="form-actions text-center">
                <button type="submit" class="btn green uppercase">{{ trans( 'main.signin.button' ) }}</button>
                <!--<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>-->
            </div>
            <div class="create-account">
                <p>
                    <a href="javascript:;" id="register-btn" class="uppercase">{{ trans( 'main.signin.create' ) }}</a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <!--<form class="forget-form" action="{{ url( 'password/email' ) }}" method="post">
            <h3 class="font-green">Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            {!! csrf_field() !!}
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form>-->
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
        <form class="register-form" action="{{ url( 'auth/register' ) }}" method="post">
            <h3 class="font-green">{{ trans( 'main.signup.title' ) }}</h3>
            <p class="hint"> {{ trans( 'main.signup.info' ) }} </p>
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ trans( 'main.signup.email' ) }}</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="{{ trans( 'main.signup.email' ) }}" name="email" />
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ trans( 'main.signup.username' ) }}</label>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{ trans( 'main.signup.username' ) }}" name="name" /> </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ trans( 'main.signup.password' ) }}</label>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="{{ trans( 'main.signup.password' ) }}" name="password" /> </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ trans( 'main.signup.confirm' ) }}</label>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{ trans( 'main.signup.confirm' ) }}" name="password_confirmation" /> </div>
            <div class="form-group margin-top-20 margin-bottom-20">
                <div id="register_tnc_error"> </div>
            </div>
            <div class="form-actions">
                <button type="button" id="register-back-btn" class="btn btn-default">{{ trans( 'main.signup.back' ) }}</button>
                <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">{{ trans( 'main.signup.submit' ) }}</button>
            </div>
        </form>
        <!-- END REGISTRATION FORM -->
    </div>

    <script src="{{ asset( 'js/front/main.js' ) }}"></script>
    <script src="{{ asset( 'js/front/plugins.js' ) }}"></script>
    <script src="{{ asset( 'js/front/global.js' ) }}"></script>
    <script src="{{ asset( 'js/front/login.min.js' ) }}"></script>

</body>

</html>