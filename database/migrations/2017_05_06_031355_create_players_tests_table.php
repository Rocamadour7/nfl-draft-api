<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_test', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->unsignedInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->float('result', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_test');
    }
}
