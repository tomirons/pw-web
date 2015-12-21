<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = 'pweb_articles';

    public $dates = [ 'created_at', 'updated_at' ];

    public $fillable = [ 'title', 'content', 'category' ];

    public function color( $type )
    {
        $colors = [
            'update' => 'primary',
            'maintenance' => 'danger',
            'event' => 'success',
            'contest' => 'warning',
            'other' => 'default'
        ];
        return $colors[$type];
    }
}
