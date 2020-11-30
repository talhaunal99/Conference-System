<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Country')->insert([
            'CountryCode' => 'TUR',
            'CountryName' => 'Turkey',
        ]);

        DB::table('Country')->insert([
            'CountryCode' => 'GER',
            'CountryName' => 'Germany',
        ]);

        DB::table('Country')->insert([
            'CountryCode' => 'FRA',
            'CountryName' => 'France',
        ]);
    }
}
