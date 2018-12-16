<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinBasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_basis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('symbol');
            $table->string('image');
            $table->string('name');
            $table->bigInteger('supply');
            $table->string('algorithm');
            $table->integer('ico_year')->unsigned();
            $table->boolean('pays_dividends');
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
        Schema::dropIfExists('coin_basis');
    }
}
