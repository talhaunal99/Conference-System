<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UsersLog')->insert([
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
            'id' => 3,
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
            'id' => 4,
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
            'id' => 5,
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
            'id' => 6,
            'Salutation' => 'Ms.',
            'Name' => 'Büşra',
            'LastName' => 'KARATAY',
            'Affiliation' => 'Computer Science Department',
            'SecondaryEmail' => 'b.karatay@etu.edu.tr',
            'Phone' => '05059259425625',
            'Fax' => '+44 161 9199 882222',
            'URL' => 'http://karatay.etu.edu.tr',
            'Address' => 'Söğütözü, ÇANKAYA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'CountryCode' => 'TUR',
            'CityId' => 1,
            'AuthenticationID' => 6,
        ]);
    }
}
