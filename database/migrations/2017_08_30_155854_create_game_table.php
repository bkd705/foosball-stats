<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', [ 'finished', 'inprogress' ])->default('inprogress');
            $table->integer('team_one_goals')->nullable();
            $table->integer('team_two_goals')->nullable();
            $table->integer('team_one_id')->unsigned();
            $table->integer('team_two_id')->unsigned();
            $table->integer('winning_team_id')->unsigned()->nullable();            
            $table->timestamps();

            $table->foreign('team_one_id')->references('id')->on('team');
            $table->foreign('team_two_id')->references('id')->on('team');
            $table->foreign('winning_team_id')->references('id')->on('team');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
