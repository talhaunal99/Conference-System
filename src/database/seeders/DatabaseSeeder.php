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

        DB::table('users')->insert([
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'approved' => 1,
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'username' => 'talha',
            'email' => 'talha@gmail.com',
            'password' => Hash::make('talha123'),
            'approved' => 1,
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'username' => 'alper',
            'email' => 'alper@alper.com',
            'password' => Hash::make('alper123'),
            'approved' => 1,
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'username' => 'yahya',
            'email' => 'yahya@gmail.com',
            'password' => Hash::make('yahya123'),
            'approved' => 1,
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'username' => 'tansel',
            'email' => 'tansel@gmail.com',
            'password' => Hash::make('tansel123'),
            'approved' => 0,
            'role' => 'User',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'username' => 'busra',
            'email' => 'busra@gmail.com',
            'password' => Hash::make('busra123'),
            'approved' => 0,
            'role' => 'User',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('UsersInfo')->insert([
            'id' => 1,
            'Salutation' => 'Admin',
            'Name' => 'Admin of',
            'LastName' => 'the website',
            'Affiliation' => 'Head of website development at Website University',
            'SecondaryEmail' => 'admin2@gmail.com',
            'Phone' => '05059594563',
            'Fax' => '+44 161 999 8881',
            'URL' => 'http://www.admin.com/website/developer',
            'Address' => 'Admin street, Website province.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 1,
        ]);

        DB::table('UsersLog')->insert([
            'id' => 2,
            'Salutation' => 'Mr.',
            'Name' => 'Talha',
            'LastName' => 'Ünal',
            'Affiliation' => 'Medical Informatics Group School of Biotechnology Dublin City University',
            'SecondaryEmail' => 'talha2@gmail.com',
            'Phone' => '05059594562',
            'Fax' => '+44 161 999 8888',
            'URL' => 'http://www.example.com/believe/bit?bells=boundary&actor=acoustics',
            'Address' => 'Etimesgut, Elvankent',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 2,
        ]);

        DB::table('UsersLog')->insert([
            'id' => 2,
            'Salutation' => 'Mr.',
            'Name' => 'Alper Kaan',
            'LastName' => 'YILDIZ',
            'Affiliation' => 'Medical Informatics Group School of Biotechnology Dublin City University',
            'SecondaryEmail' => 'alper2@gmail.com',
            'Phone' => '05059594565',
            'Fax' => '+44 161 999 8882',
            'URL' => 'http://www.csseaky.com/believe/bit?bells=boundary&actor=acoustics',
            'Address' => 'Emek, Çankaya',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 3,
        ]);

        DB::table('UsersLog')->insert([
            'id' => 3,
            'Salutation' => 'Mr.',
            'Name' => 'Yahya Can',
            'LastName' => 'TUĞRUL',
            'Affiliation' => 'Medical Informatics Group School of Biotechnology Dublin City University',
            'SecondaryEmail' => 'yahya2@gmail.com',
            'Phone' => '050592594565',
            'Fax' => '+44 161 999 88222',
            'URL' => 'http://www.yct.com/believe/bit?bells=boundary&actor=acoustics',
            'Address' => 'Demetevler, Yenimahalle',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 4,
        ]);

        DB::table('UsersLog')->insert([
            'id' => 4,
            'Salutation' => 'Mr.',
            'Name' => 'Tansel',
            'LastName' => 'ÖZYER',
            'Affiliation' => 'Computer Science Department',
            'SecondaryEmail' => 'ozyer@etu.edu.tr',
            'Phone' => '0505925942565',
            'Fax' => '+44 161 9199 88222',
            'URL' => 'http://ozyer.etu.edu.tr',
            'Address' => 'Söğütözü, ÇANKAYA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 5,
        ]);

        DB::table('UsersLog')->insert([
            'id' => 4,
            'Salutation' => 'Mr.',
            'Name' => 'Tansel',
            'LastName' => 'ÖZYER',
            'Affiliation' => 'Computer Science Department',
            'SecondaryEmail' => 'ozyer@etu.edu.tr',
            'Phone' => '0505925942565',
            'Fax' => '+44 161 9199 88222',
            'URL' => 'http://ozyer.etu.edu.tr',
            'Address' => 'Söğütözü, ÇANKAYA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 5,
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
