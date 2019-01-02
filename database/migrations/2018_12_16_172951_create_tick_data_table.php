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
            $table->unsignedInteger('coin_basis_id')->nullable();
            $table->foreign('coin_basis_id')->references('id')->on('coin_basis');
            $table->unsignedInteger('exchanges_id')->nullable();
            $table->foreign('exchanges_id')->references('id')->on('exchanges');
            $table->string('pair')->nullable();

            // fields as cctx api
            $table->decimal('high_price', 50, 30)->nullable();
            $table->decimal('low_price', 50, 30)->nullable();
            $table->decimal('bid_price', 50, 30)->nullable();
            $table->decimal('bid_qty', 50, 30)->nullable();
            $table->decimal('ask_price', 50, 30)->nullable();
            $table->decimal('ask_qty', 50, 30)->nullable();
            $table->decimal('vwap', 50, 30)->nullable();
            $table->decimal('open_price', 50, 30)->nullable();
            $table->decimal('close_price', 50, 30)->nullable();
            $table->decimal('last_price', 50, 30)->nullable();
            $table->decimal('last_qty', 50, 30)->nullable();
            $table->decimal('previous_close', 50, 30)->nullable();
            $table->decimal('price_change', 50, 30)->nullable();
            $table->decimal('price_change_percentage', 50, 30)->nullable();
            $table->decimal('average', 50, 30)->nullable();
            $table->decimal('base_volume', 50, 20)->nullable();
            $table->decimal('quote_volume', 50, 30)->nullable();

            $table->timestamp('open_time')->nullable();
            $table->timestamp('close_time')->nullable();
            $table->timestamp('exchange_timestamp')->nullable();
            $table->timestamps();
        });

        //DB::unprepared('ALTER TABLE `tick_data` CONVERT TO CHARACTER SET utf8mb4');
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
