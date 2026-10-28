<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        DB::table('users')->insert([
            [
                'username' => 'juan123',
                'full_name' => 'Juan Dela Cruz',
            ],
            [
                'username' => 'maria123',
                'full_name' => 'Maria Santos',
            ],
            [
                'username' => 'pedro123',
                'full_name' => 'Pedro Reyes',
            ],
            [
                'username' => 'ana123',
                'full_name' => 'Ana Garcia',
            ],
            [
                'username' => 'jose123',
                'full_name' => 'Jose Cruz',
            ],
        ]);
    }
}
