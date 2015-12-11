<?php

namespace App\Providers;

use Huludini\PerfectWorldAPI\API;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer( 'front.header', function ( $view ) {
            $apps = [
                0 => 'news',
                1 => 'shop',
                2 => 'donate',
                3 => 'vote',
                4 => 'voucher',
                5 => 'services',
                6 => 'ranking'
            ];
            $view->with( 'apps', $apps );
        });*/

        view()->share( 'api', new API() );
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
