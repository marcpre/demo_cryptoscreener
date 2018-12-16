<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_social', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coin_basis_id');
            $table->foreign('coin_basis_id')->references('id')->on('coin_basis');
            $table->string('netowork_name');
            $table->string('url');
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
        Schema::dropIfExists('coin_social');
    }
}
