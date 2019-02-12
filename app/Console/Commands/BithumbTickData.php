<?php

namespace App\Console\Commands;

use App\Models\CoinBasi;
use App\Models\TickDatum;
use App\Models\Exchange;
use ccxt\NetworkError;
use ccxt\bithumb;
use ccxt\ExchangeError;
use DateTime;
use Illuminate\Console\Command;

class BithumbTickData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tick:bithumb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch tick data from bithumb';

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
        date_default_timezone_set('UTC');
        $exchange = new bithumb(array(
            // 'verbose' => true, // for debugging
            'enableRateLimit' => true,
        ));

        try {
            $tick = $exchange->fetch_tickers();
        } catch (NetworkError $e) {
            echo '[Network Error] ' . $e->getMessage() . "\n";
        } catch (ExchangeError $e) {
            echo '[Exchange Error] ' . $e->getMessage() . "\n";
        } catch (Exception $e) {
            echo '[Error] ' . $e->getMessage() . "\n";
        }

        foreach ($tick as $obj) {
            $td = new TickDatum();

            $td->pair = $obj['symbol'];
            $td->ask_price = $obj['ask'];
            $td->ask_qty = $obj['askVolume'];
            $td->bid_price = $obj['bid'];
            $td->bid_qty = $obj['bidVolume'];
            $td->high_price = $obj['high'];
            $td->last_price = $obj['last'];
            $td->open_price = $obj['open'];
            $td->close_price = $obj['close'];
            $td->low_price = $obj['low'];
            $td->vwap = $obj['vwap'];
            $td->previous_close = $obj['previousClose'];
            $td->price_change = $obj['change'];
            $td->price_change_percentage = $obj['percentage'];
            $td->average = $obj['average'];
            $td->base_volume = $obj['baseVolume'];
            $td->quote_volume = $obj['quoteVolume'];
            $td->last_qty = null;

            /*
            if($obj['symbol'] == "BCN/BTC") {
                $this->info("STOP DEBUG");
            }
            */

            // $td->close_time = $this->convertToDateTimeObj($obj['info']['closeTime']);
            // $td->open_time = $this->convertToDateTimeObj($obj['info']['openTime']);
            $td->exchange_timestamp = $this->convertToDateTimeObj($obj['timestamp']);

            // associate binance exchange with model
            $ex = Exchange::where('name', 'Bithumb')->first();;
            $td->exchange()->associate($ex);

            // associate base coin with model
            $s = explode("/", $td->pair);
            $c = CoinBasi::where('symbol', $s[0])->first();;
            $td->coin_basi()->associate($c);

            try {

                $td->firstOrCreate(
                    [
                        'pair' => $td->pair,
                        'exchange_timestamp' => $td->exchange_timestamp],
                    [
                        'pair' => $td->pair,
                        'exchange_timestamp' => $td->exchange_timestamp,
                        'ask_price' => $td->ask_price,
                        'ask_qty' => $td->ask_qty,
                        'bid_price' => $td->bid_price,
                        'bid_qty' => $td->bid_qty,
                        'high_price' => $td->high_price,
                        'last_price' => $td->last_price,
                        'open_price' => $td->open_price,
                        'close_price' => $td->close_price,
                        'low_price' => $td->low_price,
                        'vwap' => $td->vwap,
                        'previous_close' => $td->previous_close,
                        'price_change' => $td->price_change,
                        'price_change_percentage' => $td->price_change_percentage,
                        'average' => $td->average,
                        'base_volume' => $td->base_volume,
                        'quote_volume' => $td->quote_volume,
                        'last_qty' => $td->last_qty,
                        'exchanges_id' => $td->exchanges_id,
                        'coin_basis_id' => $td->coin_basis_id
                    ]);
                // $cb->updateOrCreate(['symbol' => $cb->symbol], ['algorithm' => $cb->algorithm, 'coin_name' => $cb->coin_name, 'full_name' => $cb->full_name, 'total_supply' => $cb->total_supply, 'image_url' => $cb->image_url, 'fully_premined' => $cb->fully_premined, 'proof_type' => $cb->proof_type, 'smart_contract_address' => $cb->smart_contract_address]);
            } catch (Exception $e) {
                $this->error($e);
            }
            $this->info("Insert pair: " . $td->pair);
        }

    }

    /**
     * Generate DateTimeObj
     * @param $t
     */
    public function convertToDateTimeObj($t)
    {
        $timestamp = (int)($t / 1000);
        return DateTime::createFromFormat('U', $timestamp);
    }
}
