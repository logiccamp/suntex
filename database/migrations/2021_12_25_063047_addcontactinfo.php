<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addcontactinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_profiles', function (Blueprint $table) {
            $table->integer('mob')->nullable();
            $table->integer('dob')->nullable();
            $table->integer('yob')->nullable();
            $table->integer('nationality')->nullable();
            $table->integer('identification')->nullable();
            $table->integer('idNumber')->nullable();
            $table->integer('address')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_profiles', function (Blueprint $table) {
            //
        });
    }
}
