<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('filename');
            $table->string('caption');
            $table->integer('shot');

            $table->unsignedBigInteger('camera_id');
            $table->unsignedBigInteger('album_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photographs');
    }
}
