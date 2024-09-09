<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Pedro Brito',
                'username' => 'pedro.brito',
                'email' => 'pedro@dev.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedor@seila.com.br',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'cliente@seila.com.br',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ]
        ])
        ;
    }
}
