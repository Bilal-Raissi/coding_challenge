<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tasks')->insert([
        //     'name' => Str::random(10),
        //     'description' => Str::random(10),
        //     'completed' => Str::random(10),
        // ]);

        Task::factory()
            ->count(20)
            ->create();
    }
}
