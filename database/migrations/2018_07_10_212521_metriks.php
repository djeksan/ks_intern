<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Metriks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('metrics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address');
            $table->timestamps();
            $table->string('referer');
            $table->string('user_agent');
            $table->integer('adverts_id');


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
        Schema::dropIfExists('metrics');
    }
}
