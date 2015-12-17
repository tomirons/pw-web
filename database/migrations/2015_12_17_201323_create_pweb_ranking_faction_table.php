<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebRankingFactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_ranking_factions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('level');
            $table->integer('master');
            $table->string('master_name');
            $table->integer('members');
            $table->integer('reputation');
            $table->integer('time_used');
            $table->integer('pk_count');
            $table->text('announce');
            $table->text('sys_info');
            $table->integer('last_op_time');
            $table->integer('territories');
            $table->integer('contribution');
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
        Schema::drop('pweb_ranking_factions');
    }
}
