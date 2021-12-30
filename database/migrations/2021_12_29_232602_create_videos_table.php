<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('route', 245);
            $table->foreignId('interest_point_id')->references('id')->on('interest_points');
            $table->integer('order');
            $table->timestamps();
            $table->foreignId('creator')->references('id')->on('users');
            $table->foreignId('updater')->references('id')->on('users');
            $table->integer('code_id')->index();
            $table->foreignId('thematic_area_id')->references('id')->on('thematic_areas');
            $table->string('description', 2000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
