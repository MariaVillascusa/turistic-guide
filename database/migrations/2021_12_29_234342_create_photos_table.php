<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('route', 245);
            $table->unsignedBigInteger('interest_point_id');
            $table->integer('order');
            $table->timestamps();
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('updater');
            $table->unsignedBigInteger('thematic_area_id');

            $table->foreign('interest_point_id')->references('id')->on('interest_points');
            $table->foreign('creator')->references('id')->on('users');
            $table->foreign('updater')->references('id')->on('users');
            $table->foreign('thematic_area_id')->references('id')->on('thematic_areas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
