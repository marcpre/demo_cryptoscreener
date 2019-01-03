<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class TestSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Basic Setup for Test Data';

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
        Artisan::call('migrate:refresh', ['--seed' => '']);
        Artisan::call('basis:cc');
        Artisan::call('tick:binance');
        Artisan::call('tick:bittrex');

        $this->info("DB freshly setup: DONE");
        $this->info("Coin Basics: DONE");
        $this->info("Binance Scrapped: DONE");
    }
}
