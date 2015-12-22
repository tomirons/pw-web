<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'item_id',
        'octet',
        'mask',
        'count',
        'max_count',
        'protection_type',
        'expire_date',
        'shareable'
    ];

    public $table = 'pweb_shop_items';
}
