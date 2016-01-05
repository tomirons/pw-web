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
    protected $hidden = ['password', 'remember_token'];

    public function balance()
    {
        return number_format( $this->money, 2 );
    }

    public function getRoleAttribute( $value )
    {
        return ucfirst( $value );
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
}
