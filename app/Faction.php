<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pweb_ranking_factions';

    protected $fillable = [ 'id', 'name', 'level', 'master', 'master_name', 'members', 'time_used', 'pk_count', 'announce', 'sys_info', 'last_op_time', 'territories', 'contribution' ];

    public function scopeSubType( $query, $sub )
    {
        $column = [
            'level' => 'level',
            'rep' => 'reputation',
            'time' => 'time_used',
            'pvp' => 'pk_count'
        ];

        return $query
            ->whereNotIn( 'id', explode( ',', settings( 'ranking_ignore_factions' ) ) )
            ->orderBy( isset( $column[ $sub ] ) ? $column[ $sub ] : 'level', 'desc' );
    }
}
