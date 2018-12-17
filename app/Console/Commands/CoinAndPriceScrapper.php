<?php

namespace App\Console\Commands;

<<<<<<< HEAD
use Goutte\Client;
=======
>>>>>>> 36d3780e337bef3faeae645866e6a2343e0de05c
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
<<<<<<< HEAD
       $startUrl = "https://coinlib.io/coins";

       //arrays
       $coinArr = array();
       $urlArr = array();

       //xpath
       $coinName = 'td.clickable-coin-td > div.tbl-currency > a';
       $url = 'td.clickable-coin-td > div.tbl-currency > a';

       $client = new Client();
       //Change $i to 108
       for ($i=0; $i < 10; $i++) { 

            if($i == 0) {
                $crawler = $client->request('GET', $startUrl);
            }

            $crawler = $client->request('GET', "https://coinlib.io/coins?page=" . $i);

            $crawler->filter($coinName)->each(function ($node) use (&$coinArr) {
                $this->info($node->text()."\n");
                array_push($coinArr, $node->text());
            });
            
            $crawler->filter($url)->each(function ($node) use (&$urlArr) {
                $link = $node->link();
                $uri = $link->getUri();
                $this->info($uri."\n");
                array_push($urlArr, $uri);
            });
            
            // get Links from Subpages
            $this->info("Start SubPages");
            foreach ($urlArr as $key => $v) {
            //for ($key=0; $key < 2; $key++) { 
                
                $subCrawler = $client->request('GET', $urlArr[$key]);
                $image = $subCrawler->filter("img.sub-coin-icon")->extract(array('src')); //->each(function ($node) use (&$imgArr) {
                print_r($image[0] . "\n");  
                //$link = $image[0]->link();
                $uri = $image[0];
                $this->info($uri);
                //array_push($imgArr, $uri);
                //});
            }
       }
        
=======
        //
>>>>>>> 36d3780e337bef3faeae645866e6a2343e0de05c
    }
}
