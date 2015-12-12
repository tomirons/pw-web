<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('transaction_id');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign( 'user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pweb_payments');
    }
}
