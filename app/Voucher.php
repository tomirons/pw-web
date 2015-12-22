<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pweb_vouchers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'item_id', 'item_name', 'item_count', 'item_proc_type'];

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'code';
}
