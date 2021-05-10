<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('fighter_id1')->unsigned();
            $table->bigInteger('fighter_id2')->unsigned();
            $table->bigInteger('fighter_id3')->unsigned();
            $table->bigInteger('fighter_id4')->unsigned();
            $table->bigInteger('fighter_id5')->unsigned();
            $table->bigInteger('fighter_id6')->unsigned();
            $table->bigInteger('fighter_id7')->unsigned();
            $table->bigInteger('fighter_id8')->unsigned();
            $table->bigInteger('fighter_id9')->unsigned();
            $table->bigInteger('fighter_id10')->unsigned();
            // $table->string('fight2');
            // $table->string('fight3');
            // $table->string('fight4');
            // $table->string('fight5');
            // $table->string('fight6');
            // $table->string('fight7');
            // $table->string('fight8');
            // $table->string('fight9');
            // $table->string('fight10');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id1')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id2')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id3')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id4')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id5')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id6')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id7')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id8')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id9')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id10')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picks');
    }
}
