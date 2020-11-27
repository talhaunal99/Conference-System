<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Role')->insert([
            'Role' => 'Chair',
        ]);
        DB::table('Role')->insert([
            'Role' => 'Reviewer',
        ]);
        DB::table('Role')->insert([
            'Role' => 'Author',
        ]);

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
