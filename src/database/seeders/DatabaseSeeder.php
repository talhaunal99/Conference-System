<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CountrySeeder::class,
            CountryCitySeeder::class,
            UserSeeder::class,
            UsersInfoSeeder::class,
            UsersLogSeeder::class,
        ]);

        /*
         * Tabloların hepsini silme:
         * 1) mongo -> use admin
         * 2) db.mongo_subs.drop()
         * 3) php artisan migrate:fresh
         * Tabloların hepsini silme ve seedi kullanma
         * 1)  mongo -> use admin
         * 2) db.mongo_subs.drop()
         * 3) php artisan migrate:fresh --seed
         *
         * TODO:
         * 1) User seedi.
        */
    }
}
