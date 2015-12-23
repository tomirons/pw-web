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