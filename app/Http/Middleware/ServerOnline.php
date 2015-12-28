<?php

namespace App\Http\Middleware;

use Closure;
use Huludini\PerfectWorldAPI\API;

class ServerOnline
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
        $api = new API();
        if ( !$api->online )
        {
            flash()->error( trans( 'main.server_not_online' ) );
            return redirect()->back();
        }
        return $next($request);
    }
}
