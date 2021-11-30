<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pweb_ranking_players';

    protected $fillable = [ 'id', 'name', 'cls', 'gender', 'spouse', 'level', 'level2', 'hp', 'mp', 'pariah_time', 'reputation', 'time_used', 'pk_count', 'dead_flag', 'force_id', 'title_id', 'faction_id', 'faction_name', 'faction_role', 'faction_contrib', 'faction_feat', 'equipment' ];

    public function scopeSubType( $query, $sub )
    {
        $column = [
            'level' => 'level',
            'rep' => 'reputation',
            'time' => 'time_used',
            'pvp' => 'pk_count'
        ];

        return $query
            ->whereNotIn('id', explode(',', settings('ranking_ignore_roles')))
            ->orderBy(isset($column[$sub]) ? $column[$sub] : 'level', 'desc');
    }

    public function getSpouse($id)
    {
        //$query = DB::select('SELECT name FROM pweb_ranking_players WHERE id =' . $id );
        return Player::find($id);
    }
}
