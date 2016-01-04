<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
        if ( $request->has( 'language' ) )
        {
            // Save as users language
            if ( Auth::user() )
            {
                Auth::user()->language = $request->language;
                Auth::user()->save();
            }

            App::setLocale( $request->language );
        }
        elseif ( Auth::user() )
        {
            App::setLocale( Auth::user()->language );
        }
        return $next( $request );
    }
}
