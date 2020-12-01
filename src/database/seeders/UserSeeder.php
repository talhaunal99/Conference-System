<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            'username' => 'tanselozyer',
            'email' => 'tansel@gmail.com',
            'password' => Hash::make('tansel123'),
            'approved' => 1,
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
    }
}
