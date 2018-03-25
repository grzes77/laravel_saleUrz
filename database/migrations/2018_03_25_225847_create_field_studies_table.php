<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Faculty;

class CreateFieldStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_field_study');
            $table->integer('faculty_id')->unsigned();
            $table->string('mode_of_study');
            $table->integer('year_of_start');
            $table->timestamps();

            $table->foreign('faculty_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_studies');
    }
}
