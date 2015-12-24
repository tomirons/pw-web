<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pweb_apps';

    protected $primaryKey = 'key';

    public function setEnabledAttribute( $value )
    {
        $this->attributes['enabled'] = $value ? 1 : 0;
    }
}
