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

    public function scopeSubType( $query, $sub )
    {
        $column = [
            'level' => 'level',
            'rep' => 'reputation',
            'time' => 'time_used',
            'pvp' => 'pk_count'
        ];

        return $query->orderBy( $column[ $sub ], 'desc' );
    }
}
