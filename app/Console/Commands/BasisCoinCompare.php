<?php

namespace App\Console\Commands;

use App\Models\CoinBasi;
use Storage;


use Illuminate\Console\Command;

class BasisCoinCompare extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'basis:cc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrap the absis packages from coincompare';

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
        $url = "https://min-api.cryptocompare.com/data/all/coinlist";
        $file = file_get_contents($url);
        $json = json_decode($file);

        foreach ($json->Data as $obj) {
            $cb = new CoinBasi();

            // insert image
            if (isset($obj->ImageUrl)) {
                $url = "https://www.cryptocompare.com" . $obj->ImageUrl;
                $content = file_get_contents($url);
                $file = '/image/' . substr($url, strrpos($url, '/') + 1);
                Storage::put($file, $content);
                $cb->image_url = $file;
            }

            $cb->symbol = $obj->Symbol;
            $cb->algorithm = $obj->Algorithm;
            $cb->coin_name = $obj->CoinName;
            $cb->full_name = $obj->FullName;
            $cb->total_supply = $obj->TotalCoinSupply;
            $cb->proof_type = $obj->ProofType;
            $cb->fully_premined = ($obj->FullyPremined == "0") ? False : True;
            $cb->smart_contract_address = $obj->SmartContractAddress;

            $cb->updateOrCreate(['symbol' => $cb->symbol], ['algorithm' => $cb->algorithm, 'coin_name' => $cb->coin_name, 'full_name' => $cb->full_name, 'total_supply' => $cb->total_supply, 'image_url' => $cb->image_url, 'fully_premined' => $cb->fully_premined, 'proof_type' => $cb->proof_type, 'smart_contract_address' => $cb->smart_contract_address]);
            $this->info("Insert coin: " . $cb->symbol);
        }
    }
}
