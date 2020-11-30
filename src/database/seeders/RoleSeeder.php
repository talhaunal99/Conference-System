<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
