<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("buyer_id");
            $table->string("agent_id");
            $table->unsignedBigInteger("property_id");
            $table->text("message");
            $table->string("status");
            $table->float("price", 20, 2);
            $table->timestamps();

            $table->foreign("property_id")->on("properties")->references("id");
            $table->foreign("buyer_id")->on("users")->references("id");
            $table->foreign("agent_id")->on("users")->references("email");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
