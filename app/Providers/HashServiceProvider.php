<?php

namespace App\Providers;

use App\Hash\Base64Hasher;
use App\Hash\BinSaltHasher;
use App\Hash\MD5Hasher;
use Illuminate\Support\ServiceProvider;

class HashServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hash', function()
        {
            switch ( settings( 'encryption_type' ) )
            {
                case 'md5':
                    return new MD5Hasher();
                    break;

                case 'base64':
                    return new Base64Hasher();
                    break;

                case 'binsalt':
                    return new BinSaltHasher();
                    break;

                default:
                    return new MD5Hasher();
                    break;
            }

        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['hash'];
    }
}
