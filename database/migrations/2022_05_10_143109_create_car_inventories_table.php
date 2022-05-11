nam<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('name');
            $table->string('model');
            $table->string('Year');
            $table->string('Info');
            $table->string('color');
            $table->string('status');
            $table->string('Stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_inventories');
    }
}
