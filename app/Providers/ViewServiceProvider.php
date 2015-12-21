<?php

namespace App\Providers;

use App\App;
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
        view()->composer( 'front.header', function ( $view ) {
            $apps = App::all();
            $view->with( 'apps', $apps );
        });

        view()->composer( 'admin.news.form', function ( $view ) {
            $categories = [
                'update' => trans( 'news.category.update' ),
                'maintenance' => trans( 'news.category.maintenance' ),
                'event' => trans( 'news.category.event' ),
                'contest' => trans( 'news.category.contest' ),
                'other' => trans( 'news.category.other' )
            ];
            $view->with( 'categories', $categories );
        });

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
