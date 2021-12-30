<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_user', function (Blueprint $table) {
            $table->unsignedBigInteger('thematic_area_id');
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->boolean('active');

            $table->primary(['thematic_area_id', 'user_id', 'date']);

            $table->foreign('thematic_area_id')->references('id')->on('thematic_areas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_user');
    }
}
