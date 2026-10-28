<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;





class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Jose Cruz',
                'email' => 'jose@example.com',
                'phone' => '09211234567',
            ],
        ]
        
        
        );















    }
}
