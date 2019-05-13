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
            $table->bigIncrements('id');

            $table->string('manufacturer');
            $table->string('model');
            $table->string('image');
            $table->string('description');

            $table->string('ref');

            $table->unsignedBigInteger('camera_type_id');
        });

        // Camera Types
        Schema::create('camera_types', function (Blueprint $table) {
            $table->bigIncrements('id');
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
