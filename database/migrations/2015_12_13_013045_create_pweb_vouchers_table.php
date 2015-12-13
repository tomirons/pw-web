<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('item_id');
            $table->string('item_name');
            $table->integer('item_count');
            $table->integer('item_proc_type');
            $table->integer('times_redeemed');
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
        Schema::drop('pweb_vouchers');
    }
}
