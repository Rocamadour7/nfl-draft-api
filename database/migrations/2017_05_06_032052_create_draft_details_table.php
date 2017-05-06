<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draft_details', function (Blueprint $table) {
            $table->unsignedInteger('draftOverall')->unique();
            $table->unsignedInteger('draftRound');
            $table->unsignedInteger('round');
            $table->foreign('round')->references('id')->on('rounds');
            $table->unsignedInteger('player_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->unsignedInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('draft_details');
    }
}
