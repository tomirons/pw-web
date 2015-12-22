<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebShopItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_shop_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('item_id');
            $table->text('octet');
            $table->integer('mask');
            $table->integer('count');
            $table->integer('max_count');
            $table->integer('protection_type');
            $table->integer('expire_date');
            $table->integer('times_bought');
            $table->tinyInteger('custom_quantity');
            $table->tinyInteger('shareable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pweb_shop_items');
    }
}
