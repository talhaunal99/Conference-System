<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CountryCity')->insert([
            'CityName' => 'Ankara',
            'CountryCode' => 'TUR',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'İstanbul',
            'CountryCode' => 'TUR',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'İzmir',
            'CountryCode' => 'TUR',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'Münih',
            'CountryCode' => 'GER',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'Berlin',
            'CountryCode' => 'GER',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'Frankfurt',
            'CountryCode' => 'GER',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'Paris',
            'CountryCode' => 'FRA',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'Lyon',
            'CountryCode' => 'FRA',
        ]);

        DB::table('CountryCity')->insert([
            'CityName' => 'Nice',
            'CountryCode' => 'FRA',
        ]);
    }
}
