<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('video_id')->references('id')->on('videos');
            $table->string('quality', 45)->nullable();
            $table->string('format', 45)->nullable();
            $table->string('orientation', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_item');
    }
}
