<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'title' => 'Study Laravel',
                'status' => 'pending',
                'task_date' => today(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Finish TSA3 Activity',
                'status' => 'pending',
                'task_date' => today(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review PHP',
                'status' => 'completed',
                'task_date' => today()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Practice Java',
                'status' => 'pending',
                'task_date' => today()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Study Networking',
                'status' => 'pending',
                'task_date' => today()->addDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Complete Programming Assignment',
                'status' => 'pending',
                'task_date' => today()->addDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review Database Management',
                'status' => 'completed',
                'task_date' => today()->addDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Create Web Application',
                'status' => 'pending',
                'task_date' => today()->addDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}