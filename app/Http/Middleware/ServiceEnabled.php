<?php

namespace App\Http\Middleware;

use App\Service;
use Closure;

class ServiceEnabled
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
        $service = Service::find($request->segment(2));
        if ( !$service->enabled )
        {
            flash()->error( trans( 'service.disabled' ) );
            return redirect()->back();
        }

        return $next($request);
    }
}
