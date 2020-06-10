<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image_uri');
            $table->integer('player_jersey_no');
            $table->string('country');
            $table->integer('matches')->nullable()->unsigned();
            $table->integer('runs')->nullable()->unsigned();
            $table->integer('highest_score')->nullable()->unsigned();
            $table->integer('fifties')->nullable()->unsigned();
            $table->integer('hundreds')->nullable()->unsigned();
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
        Schema::dropIfExists('players');
    }
}
