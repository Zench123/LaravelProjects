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
                  'username' => 'juan123',
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan123@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}
