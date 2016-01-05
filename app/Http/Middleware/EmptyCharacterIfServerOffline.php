<?php

namespace App\Http\Middleware;

use Closure;
use Huludini\PerfectWorldAPI\API;

class EmptyCharacterIfServerOffline
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
            $request->session()->forget('character_id');
            $request->session()->forget('character_name');
        }
        return $next($request);
    }
}
