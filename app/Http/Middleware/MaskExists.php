<?php

namespace App\Http\Middleware;

use Closure;

class MaskExists
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
        $masks = array_dot( trans('shop.masks') );
        if ( !in_array( ucwords( str_replace( '-', ' ', $request->segment( 2 ) ) ), $masks  ) )
        {
            abort(404);
        }
        return $next($request);
    }
}
