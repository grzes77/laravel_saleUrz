<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Type_room;
use App\Building;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('building_id')->unsigned();
            $table->integer('type_romms_id')->unsigned();
            $table->integer('numbers_of_seats');
            $table->integer('surface');
            $table->integer('numbers_of_computers');
            $table->string('additional_equipment');
            $table->string('addition_information');
            $table->timestamps();

            $table->foreign('building_id')->references('id')->on('buildings');
            $table->foreign('type_romms_id')->references('id')->on('type_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
