<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebVoucherLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_voucher_logs', function (Blueprint $table) {
            $table->integer('voucher_id')->unsigned()->index();
            $table->foreign('voucher_id')->references('id')->on('pweb_vouchers')->onDelete('cascade');

            $table->integer('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('pweb_voucher_logs');
    }
}
