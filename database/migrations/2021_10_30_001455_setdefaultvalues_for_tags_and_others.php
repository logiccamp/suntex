<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetdefaultvaluesForTagsAndOthers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('tag');
            $table->dropColumn('type');
            $table->dropColumn('price');
            $table->dropColumn('image');
            $table->dropColumn('state');
            $table->dropColumn('country');
            $table->dropColumn('isPubslished');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            
        });
    }
}
