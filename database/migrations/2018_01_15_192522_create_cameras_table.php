<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->increments('id');

            $table->string('manufacturer');
            $table->string('model');
            $table->string('image');

            $table->string('ref');

            $table->integer('camera_type_id')->unsigned();
        });

        // Camera Types
        Schema::create('camera_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cameras');
        Schema::dropIfExists('camera_types');
    }
}
