<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('comments', function (Blueprint $table) {


            //  $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('advert_id')->references('id')->on('adverts');

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('adverts_id')->references('id')->on('adverts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('comments', function (Blueprint $table) {
            $table->dropUnique(['user_id','adverts_id']);

            $table->dropForeign('user_id');
            $table->dropForeign('adverts_id');
        });

    }
}
