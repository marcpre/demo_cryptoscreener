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
            $table->increments('Id');
            $table->string('symbol');
            $table->string('image_url')->nullable();
            $table->string('coin_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('proof_type')->nullable();
            $table->bigInteger('total_supply')->nullable();
            $table->string('algorithm')->nullable();
            $table->integer('ico_year')->unsigned()->nullable();
            $table->boolean('pays_dividends')->nullable();
            $table->boolean('fully_premined')->nullable();
            $table->string('smart_contract_address')->nullable();
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
