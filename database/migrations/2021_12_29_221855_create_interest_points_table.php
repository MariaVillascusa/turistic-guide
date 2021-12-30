<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_points', function (Blueprint $table) {
            $table->id();
            $table->string('qr', 45)->nullable();
            $table->integer('distance')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->foreignId('site_id')->references('id')->on('sites');
            $table->timestamps();
            $table->foreignId('creator')->references('id')->on('users');
            $table->foreignId('updater')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interest_points');
    }
}
