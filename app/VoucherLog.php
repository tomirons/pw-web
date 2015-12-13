<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class VoucherLog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pweb_voucher_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'ip_address', 'reward', 'site_id'];

    public function voucher()
    {
        return $this->hasOne( 'App\Voucher', 'id', 'voucher_id' );
    }

    public function scopeRedeemed( $query, $id )
    {
        return $query
            ->where( 'user_id', Auth::user()->ID )
            ->where( 'voucher_id', $id );
    }
}
