<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyMetrics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('metrics', function (Blueprint $table) {


            //  $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('advert_id')->references('id')->on('adverts');

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
        //

        Schema::table('metrics', function (Blueprint $table) {
            $table->dropUnique(['adverts_id']);

            $table->dropForeign('adverts_id');
        });
    }
}
