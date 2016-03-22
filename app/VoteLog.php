<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteLog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pweb_vote_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'ip_address', 'reward', 'site_id'];

    public function scopeRecent( $query, Request $request, VoteSite $site )
    {
        return $query
            ->where( 'site_id', $site->id )
            ->where( 'user_id', Auth::user()->ID )
            ->where( 'ip_address', $request->ip() )
            ->where( 'created_at', '>=', Carbon::now()->subHours( $site->hour_limit ) );
    }

    public function scopeOnCooldown( $query, Request $request, $id )
    {
        return $query
            ->where( 'ip_address', $request->ip() )
            ->where( 'user_id', Auth::user()->ID )
            ->where( 'site_id', $id )
            ->orderBy( 'created_at', 'desc' )
            ->take( 1 );
    }
}
