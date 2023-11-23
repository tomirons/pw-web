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
    <link rel="stylesheet" href="{{ asset( 'css/front/dark-theme.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'css/front/main.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'css/front/global.css' ) }}">

   

    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="login">


    <!-- BEGIN LOGIN -->
    <div class="logo"></div>
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
    <div class="login-container centered-form">
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
    <h3 class="form-title font-green">{{ trans( 'main.signup.title' ) }}</h3>
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="email">{{ trans( 'main.signup.email' ) }}</label>
        <input id="email" class="form-control" type="text" placeholder="{{ trans( 'main.signup.email' ) }}" name="email" required />
    </div>
    <div class="form-group">
        <label for="username">{{ trans( 'main.signup.username' ) }}</label>
        <input id="username" class="form-control" type="text" placeholder="{{ trans( 'main.signup.username' ) }}" name="name" required />
    </div>
    <div class="form-group">
        <label for="password">{{ trans( 'main.signup.password' ) }}</label>
        <input id="password" class="form-control" type="password" placeholder="{{ trans( 'main.signup.password' ) }}" name="password" required />
    </div>
    <div class="form-group">
        <label for="password_confirmation">{{ trans( 'main.signup.confirm' ) }}</label>
        <input id="password_confirmation" class="form-control" type="password" placeholder="{{ trans( 'main.signup.confirm' ) }}" name="password_confirmation" required />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ trans( 'main.signup.submit' ) }}</button>
    </div>
</form>

</div>
        <!-- END REGISTRATION FORM -->
    </div>

    <script src="{{ asset( 'js/front/main.js' ) }}"></script>
    <script src="{{ asset( 'js/front/plugins.js' ) }}"></script>
    <script src="{{ asset( 'js/front/global.js' ) }}"></script>
    <script src="{{ asset( 'js/front/login.min.js' ) }}"></script>
    <script>
        document.getElementById('register-btn').addEventListener('click', function() {
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.register-form').style.display = 'block';
});
</script>

</body>

</html>