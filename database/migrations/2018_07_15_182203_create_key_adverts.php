<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyAdverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('adverts', function (Blueprint $table) {


            //  $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('advert_id')->references('id')->on('adverts');



            $table->foreign('user_id')->references('id')->on('adverts');
            $table->foreign('category_id')->references('id')->on('sub_category');

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
        Schema::table('adverts', function (Blueprint $table) {
            $table->dropUnique(['user_id','category_id']);

            $table->dropForeign('user_id');
            $table->dropForeign('category_id');
        });
    }
}
