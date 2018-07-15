<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeySubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('sub_category', function (Blueprint $table) {



            $table->foreign('main_category_id')->references('id')->on('main_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('sub_category', function (Blueprint $table) {
            $table->dropUnique(['main_category_id']);

            $table->dropForeign('main_category_id');
        });
    }
}
