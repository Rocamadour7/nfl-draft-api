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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('imgPath');
            $table->unsignedInteger('height');
            $table->unsignedInteger('weight');
            $table->float('armLength', 5, 3);
            $table->float('hands', 5, 3);
            $table->unsignedInteger('college_id');
            $table->foreign('college_id')->references('id')->on('colleges');
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('id')->on('positions');

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
