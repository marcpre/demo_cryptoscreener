<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTickDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tick_data', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coin_basis_id');
            $table->foreign('coin_basis_id')->references('id')->on('coin_basis');
            $table->unsignedInteger('exchanges_id');
            $table->foreign('exchanges_id')->references('id')->on('exchanges');
            $table->decimal('price', 40, 30);
            $table->decimal('market_cap', 30, 10);
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
        Schema::dropIfExists('tick_data');
    }
}
