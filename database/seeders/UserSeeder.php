<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('ganlanshu'),
                'role' => 'admin',
                'status' => 'active',
                'email' => 'admin@a.com',
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'password' => bcrypt('ganlanshu'),
                'role' => 'user',
                'status' => 'active',
                'email' => 'user@a.com',
            ],
            [
                'name' => 'vendor',
                'username' => 'vendor',
                'password' => bcrypt('ganlanshu'),
                'role' => 'vendor',
                'status' => 'active',
                'email' => 'vendor@a.com',
            ]
        ]);

    }
}
