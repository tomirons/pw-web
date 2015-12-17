<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebRankingPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_ranking_players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cls');
            $table->integer('gender');
            $table->integer('spouse');
            $table->integer('level');
            $table->integer('level2');
            $table->integer('hp');
            $table->integer('mp');
            $table->integer('pariah_time');
            $table->integer('reputation');
            $table->integer('time_used');
            $table->integer('pk_count');
            $table->integer('dead_flag');
            $table->integer('force_id');
            $table->integer('title_id');
            $table->integer('faction_id');
            $table->string('faction_name');
            $table->integer('faction_role');
            $table->integer('faction_contrib');
            $table->integer('faction_feat');
            $table->text('equipment');
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
        Schema::drop('pweb_ranking_players');
    }
}
