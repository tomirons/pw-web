<?php

namespace App\Providers;

use App\Application;
use App\User;
use Huludini\PerfectWorldAPI\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer( ['front.header', 'admin.header'], function( $view ) {
            $languages = [];
            $folders = File::directories( base_path( 'resources/lang/' ) );
            foreach ( $folders as $folder )
            {
                $languages[] = str_replace( '\\', '', last( explode( '/', $folder ) ) );
            }
            $view->with( 'languages', $languages );
        });

        view()->composer( 'front.header', function ( $view ) {
            $apps = Application::all();
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

        view()->composer( ['admin.shop.form', 'admin.management.mailer'], function ( $view ) {
            $masks = [
                0 => trans( 'shop.masks.0' ),
                1 => trans( 'shop.masks.1' ),
                trans( 'shop.equipment' ) => [
                    2 => trans( 'shop.masks.armor.2' ),
                    16 => trans( 'shop.masks.armor.16' ),
                    64 => trans( 'shop.masks.armor.64' ),
                    128 => trans( 'shop.masks.armor.128' ),
                    256 => trans( 'shop.masks.armor.256' ),
                    8 => trans( 'shop.masks.armor.8' )
                ],
                trans( 'shop.fashion' ) => [
                    8192 => trans( 'shop.masks.fashion.8192' ),
                    16384 => trans( 'shop.masks.fashion.16384' ),
                    32768 => trans( 'shop.masks.fashion.32768' ),
                    65536 => trans( 'shop.masks.fashion.65536' ),
                    //33554432 => trans( 'shop.masks.fashion.33554432' ),
                    //536870912 => trans( 'shop.masks.fashion.536870912' )
                ],
                trans( 'shop.accessories' ) => [
                    1536 => trans( 'shop.masks.accessories.1536' ),
                    4 => trans( 'shop.masks.accessories.4' ),
                    32 => trans( 'shop.masks.accessories.32' )
                ],
                trans( 'shop.charms' ) => [
                    1048576 => trans( 'shop.masks.charms.1048576' ),
                    2097152 => trans( 'shop.masks.charms.2097152' )
                ],
                //2048 => trans( 'shop.masks.2048' ),
                262144 => trans( 'shop.masks.262144' ),
                524288 => trans( 'shop.masks.524288' ),
                4096 => trans( 'shop.masks.4096' )
            ];
            $view->with( 'masks', $masks );
        });

        view()->composer( 'admin.donate.settings', function ( $view ) {
            $view->with( 'currencies', trans( 'donate.currency' ) );
        });

        view()->composer( 'front.widgets', function ( $view ) {
            $gms = [];
            foreach ( DB::table( 'auth' )->select( 'userid' )->distinct()->get() as $gm )
            {
                $gms[] = User::find( $gm->userid );
            }
            $view->with( 'gms', $gms );
        });

        if ( Schema::hasTable( 'pweb_settings' ) )
        {
            view()->share( 'api', new API() );
        }

        view()->share( 'agent', new Agent() );
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
