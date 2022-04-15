<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('property_id');
            $table->string('caption');
            $table->string('address');
            $table->string('busstop');
            $table->string('description');
            $table->string('tag')->default("");
            $table->string('type')->default("");
            $table->string('price')->default("");
            $table->string('image')->default("");
            $table->string('state')->default("");
            $table->string('country')->default("");
            $table->string('isPubslished')->default("0");
            
            $table->timestamps();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
