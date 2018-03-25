<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Faculty;

class UsersFaculty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_faculty', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('faculty_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::table('user_faculty', function (Blueprint $table) {
            //
        });
    }
}
