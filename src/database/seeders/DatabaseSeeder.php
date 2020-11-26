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
    }
}
