<?php

namespace App;

use Huludini\PerfectWorldAPI\API;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\DB;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID', 'name', 'email', 'passwd'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['passwd', 'remember_token'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['creatime'];

    public function balance()
    {
        return number_format( $this->money, 2 );
    }

    public function getRoleAttribute( $value )
    {
        return ucwords( $value );
    }

    public function characterId()
    {
        return session()->get( 'character_id' );
    }

    public function characterName()
    {
        return session()->get( 'character_name' );
    }

    public function roles()
    {
        $api = new API();
        $roles = $api->getRoles( $this->ID );
        return isset( $roles['roles'] ) ? $roles['roles'] : [];
    }

    public function getAuthPassword()
    {
        return $this->passwd;
    }

    public function isAdmin()
    {
        return ( $this->role === 'Administrator' ) ? TRUE : FALSE;
    }

    public function voucher_logs()
    {
        return $this->hasMany( 'App\VoucherLog' );
    }

    public function online()
    {
        return DB::table( 'point' )->where( 'uid', $this->ID )->where( 'zoneid', 1 )->exists() ? TRUE : FALSE;
    }
}
