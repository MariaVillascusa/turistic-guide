<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_point', function (Blueprint $table) {
            $table->foreignId('thematic_area_id')->references('id')->on('thematic_areas');
            $table->foreignId('interest_point_id')->references('id')->on('interest_points');
            $table->string('title', 145);
            $table->string('description', 2000)->nullable();
            $table->integer('code_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_point');
    }
}
