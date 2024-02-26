<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guards;

class GuardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Guards::factory()->count(10)->create();
    }
}
