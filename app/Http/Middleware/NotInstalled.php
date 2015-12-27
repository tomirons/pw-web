<?php

namespace App\Http\Middleware;

use Closure;

class NotInstalled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( !str_contains( $request->path(), 'install' ) && !file_exists( storage_path( 'installed' ) ) )
        {
            return redirect( 'admin/install' );
        }

        return $next($request);
    }
}
