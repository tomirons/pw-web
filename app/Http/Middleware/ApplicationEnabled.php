<?php

namespace App\Http\Middleware;

use App\Application;
use Closure;

class ApplicationEnabled
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
        if ( !$request->is( 'admin*' ) && !$request->is( 'auth/*' ) && !$request->is( 'account/*' ) && !$request->is( 'character/*' ) )
        {
            // If application is disabled, redirect to next enabled application
            $application = Application::findOrFail( ( $request->segment( 1 ) !== NULL ) ? $request->segment( 1 ) : 'news' );
            if ( !$application->enabled )
            {
                $applications = Application::all();

                foreach ( $applications as $application )
                {
                    if ( $application->enabled )
                    {
                        return redirect( $application->key );
                    }
                }
            }
        }
        return $next( $request );
    }
}
