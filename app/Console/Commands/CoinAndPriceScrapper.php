<?php

namespace App\Console\Commands;

use Goutte\Client;
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
        $startUrl = "https://coinlib.io/coins";

        //arrays
        $coinArr = array();
        $urlArr = array();
        $symbolArr = array();

        $resArr = array();
        $multi = array();

        //xpath
        $coinName = 'td.clickable-coin-td > div.tbl-currency > a';
        $url = 'td.clickable-coin-td > div.tbl-currency > a';
        $symbol = 'td.clickable-coin-td > div.tbl-currency > span';

        $client = new Client();
        //Change $i to 108
        for ($i = 0; $i < 10; $i++) {

            if ($i == 0) {
                $crawler = $client->request('GET', $startUrl);
            }

            $crawler = $client->request('GET', "https://coinlib.io/coins?page=" . $i);

            $crawler->filter($coinName)->each(function ($node) use (&$coinArr) {
                $this->info($node->text() . "\n");
                array_push($coinArr, $node->text());
            });

            $crawler->filter($symbol)->each(function ($node) use (&$symbolArr) {
                array_push($symbolArr, $node->text());
            });

            $crawler->filter($url)->each(function ($node) use (&$urlArr) {
                $link = $node->link();
                $uri = $link->getUri();
                $this->info($uri . "\n");
                array_push($urlArr, $uri);
            });

            // get Links from Subpages
            $this->info("Start SubPages");
            foreach ($urlArr as $key => $v) {
                //for ($key=0; $key < 2; $key++) {

                $subCrawler = $client->request('GET', $urlArr[$key]);

                // image
                $image = $subCrawler->filter("img.sub-coin-icon")->extract(array('src'));
                print_r($image[0] . "\n");
                //$link = $image[0]->link();
                $uri = $image[0];
                $this->info($uri);

                // algorithm
                $algorithm = $subCrawler->filter("div.comp-top.col-sm-6 > div > div:nth-child(6)")->eq(1)->text();
                $this->info($algorithm);

                // proof
                $proof = $subCrawler->filter("div.comp-top.col-sm-6 > div > div:nth-child(8)")->eq(1)->text();
                $this->info($proof);

                // mineable
                $mineable = ($subCrawler->filter("div.comp-top.col-sm-6 > div > div:nth-child(10)")->eq(0)->text() == 'Yes') ? True : False;
                $this->info($mineable);

                // links
                $links = $subCrawler->filter("#info > div > div.comp-bottom.col-sm-6 > div")->eq(0)->text();
                $this->info($links);

                // symbol
                $rep = array("[", "]");
                $sym = str_replace($rep, "", $symbolArr[$key]);

                $multi[] = [$coinArr[$key], $uri, $urlArr[$key], $sym, $algorithm, $proof, $mineable, $links];

            }
        }
        // insert into db

        var_dump($multi);
    }
}
