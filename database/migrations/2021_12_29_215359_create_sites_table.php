<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->unsignedBigInteger('site_id')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('updater');

            $table->foreign('site_id')->references('id')->on('sites');
            $table->foreign('creator')->references('id')->on('users');
            $table->foreign('updater')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
