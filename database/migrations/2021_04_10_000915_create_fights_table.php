<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('event_id')->unsigned();
            $table->unsignedbigInteger('fighter_id_1')->unsigned();
            $table->unsignedbigInteger('fighter_id_2')->unsigned();
            $table->string('order');
            $table->timestamps();


            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id_1')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fighter_id_2')->references('id')->on('fighters')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fights');
    }
}
