<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class CustomValidation extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('current_pass', function($attribute, $value, $parameters, $validator) {
            $user = Auth::user();
            if ( Hash::make( $user->name . $value ) !== $user->passwd )
            {
                return FALSE;
            }
            return TRUE;
        });

        Validator::extend('channel_available', function($attribute, $value, $parameters, $validator) {
            if ( settings( 'server_version' ) == '07' && $value == 12 )
            {
                return FALSE;
            }
            return TRUE;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
