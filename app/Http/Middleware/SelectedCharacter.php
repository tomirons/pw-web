<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SelectedCharacter
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
        if ( !Auth::user()->characterId() )
        {
            flash()->error( trans( 'main.no_character_selected' ) );
            return redirect()->back();
        }
        return $next($request);
    }
}
