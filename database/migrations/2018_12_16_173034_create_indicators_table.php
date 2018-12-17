<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coin_basis_id');
            $table->foreign('coin_basis_id')->references('id')->on('coin_basis');
            $table->unsignedInteger('tick_data_id');
            $table->foreign('tick_data_id')->references('id')->on('tick_data');
            $table->decimal('percentage_1h', 10, 5);
            $table->decimal('percentage_24h', 10, 5);
            $table->decimal('percentage_7d', 10, 5);
            $table->decimal('liquidity', 30, 10);
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
        Schema::dropIfExists('indicators');
    }
}
