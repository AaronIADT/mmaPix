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
            $table->bigInteger('fight_id')->unsigned();
            $table->string('fighter_id1');
            $table->string('fighter_id2');
            $table->string('fighter_id3');
            $table->string('fighter_id4');
            $table->string('fighter_id5');
            $table->string('fighter_id6');
            $table->string('fighter_id7');
            $table->string('fighter_id8');
            $table->string('fighter_id9');
            $table->string('fighter_id10');
            // $table->string('fight2');
            // $table->string('fight3');
            // $table->string('fight4');
            // $table->string('fight5');
            // $table->string('fight6');
            // $table->string('fight7');
            // $table->string('fight8');
            // $table->string('fight9');
            // $table->string('fight10');
            $table->string('userTag');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fight_id')->references('id')->on('fights')->onUpdate('cascade')->onDelete('restrict');
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
