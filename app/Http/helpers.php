<?php

function makeTime( $time )
{
    $days = floor( $time / 86400 );
    $days = $days > 0 ? ( $days > 1 ) ? $days . " " . trans( 'ranking.time.days' ) : $days . " " . trans( 'ranking.time.day' ) : '';

    $hours = ceil( ceil( $time - ( $days * 86400 ) ) / 3600 );
    $hours = $hours > 1 ? ( $hours > 1 ) ? $hours . " " . trans( 'ranking.time.hours' ) : $hours . " ". trans( 'ranking.time.hour' ) : ' > 1 ' . trans( 'ranking.time.hour' );

    $time = $days . ' ' . $hours;

    return $time;
}

/**
 * Set the active class to the current opened menu.
 *
 * @param  string|array $route
 * @param  string $className
 * @return string
 */
function isActive( $route, $className = 'active' )
{
    if ( is_array( $route ) ) {
        return in_array(Route::currentRouteName(), $route ) ? $className : '';
    }
    if ( Route::currentRouteName() == $route ) {
        return $className;
    }
    if ( strpos( URL::current(), $route ) ) return $className;
}

function isDone( $step )
{
    $steps = steps();
    $step = array_search( $step, $steps );
    $current_step = array_search( Route::currentRouteName(), $steps );
    return ( $current_step > $step ) ? 'done' : NULL;
}

function setupTasks()
{
    $jobs = shell_exec( 'crontab -l' );

    foreach ( preg_split( "/((\r?\n)|(\r\n?))/", $jobs ) as $line )
    {
        if ( !str_contains( $line, ['php', 'artisan'] ) )
        {
            return TRUE;
        }
    }
}

function steps()
{
    $steps = [];
    foreach ( Route::getRoutes() as $route )
    {
        $route_name = $route->getName();
        if ( str_contains( $route_name, 'admin.installer' ) )
        {
            $steps[] = $route_name;
        }
    }
    return $steps;
}