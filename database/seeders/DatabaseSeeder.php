<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $today = today();

        DB::table('tasks')->insert([
            ['title' => 'Review Laravel routing and controllers', 'status' => 'pending', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Finish the database migration notes', 'status' => 'in progress', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Test the Tasks for Today welcome page', 'status' => 'pending', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Submit the previous Laravel activity', 'status' => 'completed', 'task_date' => $today->copy()->subDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Organize project documentation', 'status' => 'pending', 'task_date' => $today->copy()->subDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Practice Eloquent queries', 'status' => 'completed', 'task_date' => $today->copy()->addDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Prepare the project presentation', 'status' => 'pending', 'task_date' => $today->copy()->addDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Review security and validation notes', 'status' => 'pending', 'task_date' => $today->copy()->addDays(2)->toDateString(), 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['username' => 'ashtonchy', 'full_name' => 'Ashton Chy', 'email' => 'ashton.chy@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
