<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('reservations', function (Blueprint $table) {
        $table->increments('id');
        $table->time('started');
        $table->time('ended');
        $table->boolean('accept');
        $table->integer('room_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->integer('field_study_id')->unsigned();
        $table->integer('event_id')->unsigned();
        $table->timestamps();

        $table->foreign('room_id')->references('id')->on('rooms');
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('field_study_id')->references('id')->on('field_studies');
        $table->foreign('event_id')->references('id')->on('events');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
