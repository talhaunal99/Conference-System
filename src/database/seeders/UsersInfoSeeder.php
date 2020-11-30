<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UsersInfo')->insert([
            'Salutation' => 'Admin',
            'Name' => 'Admin of',
            'LastName' => 'the website',
            'Affiliation' => 'Head of website development at Website University',
            'SecondaryEmail' => 'admin2@gmail.com',
            'Phone' => '05059594563',
            'Fax' => '+44 161 999 8881',
            'URL' => 'http://www.admin.com/website/developer',
            'Address' => 'Admin street, Website province.',
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 1,
        ]);

        DB::table('UsersInfo')->insert([
            'Salutation' => 'Mr.',
            'Name' => 'Talha',
            'LastName' => 'Ünal',
            'Affiliation' => 'Medical Informatics Group School of Biotechnology Dublin City University',
            'SecondaryEmail' => 'talha2@gmail.com',
            'Phone' => '05059594562',
            'Fax' => '+44 161 999 8888',
            'URL' => 'http://www.example.com/believe/bit?bells=boundary&actor=acoustics',
            'Address' => 'Etimesgut, Elvankent',
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 2,
        ]);

        DB::table('UsersInfo')->insert([
            'Salutation' => 'Mr.',
            'Name' => 'Alper Kaan',
            'LastName' => 'YILDIZ',
            'Affiliation' => 'Medical Informatics Group School of Biotechnology Dublin City University',
            'SecondaryEmail' => 'alper2@gmail.com',
            'Phone' => '05059594565',
            'Fax' => '+44 161 999 8882',
            'URL' => 'http://www.csseaky.com/believe/bit?bells=boundary&actor=acoustics',
            'Address' => 'Emek, Çankaya',
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 3,
        ]);

        DB::table('UsersInfo')->insert([
            'Salutation' => 'Mr.',
            'Name' => 'Yahya Can',
            'LastName' => 'TUĞRUL',
            'Affiliation' => 'Medical Informatics Group School of Biotechnology Dublin City University',
            'SecondaryEmail' => 'yahya2@gmail.com',
            'Phone' => '050592594565',
            'Fax' => '+44 161 999 88222',
            'URL' => 'http://www.yct.com/believe/bit?bells=boundary&actor=acoustics',
            'Address' => 'Demetevler, Yenimahalle',
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 4,
        ]);

        DB::table('UsersInfo')->insert([
            'Salutation' => 'Mr.',
            'Name' => 'Tansel',
            'LastName' => 'ÖZYER',
            'Affiliation' => 'Computer Science Department',
            'SecondaryEmail' => 'ozyer@etu.edu.tr',
            'Phone' => '0505925942565',
            'Fax' => '+44 161 9199 88222',
            'URL' => 'http://ozyer.etu.edu.tr',
            'Address' => 'Söğütözü, ÇANKAYA',
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 5,
        ]);

        DB::table('UsersInfo')->insert([
            'Salutation' => 'Ms.',
            'Name' => 'Büşra',
            'LastName' => 'KARATAY',
            'Affiliation' => 'Computer Science Department',
            'SecondaryEmail' => 'karatay@etu.edu.tr',
            'Phone' => '05059225942565',
            'Fax' => '+44 161 91929 88222',
            'URL' => 'http://karatay.etu.edu.tr',
            'Address' => 'Söğütözü, ÇANKAYA',
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 6,
        ]);
    }
}
