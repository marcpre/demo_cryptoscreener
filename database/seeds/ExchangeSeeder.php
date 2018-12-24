<?php

use App\Models\Exchange;
use Illuminate\Database\Seeder;
use Keboola\Csv\CsvReader;


class ExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('exchanges')->delete();

        $csv = new CsvReader(
            database_path() . "\seeds\Exchange_Seed_Data.csv"
            );

        foreach($csv AS $row) {
            Exchange::create(['name' => $row[0], 'url' => $row[1], 'description' => $row[2]]);
        }
    }
}
