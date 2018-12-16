<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CoinAndPriceScrapper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coinandpricescrapper:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Coins and prices';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
