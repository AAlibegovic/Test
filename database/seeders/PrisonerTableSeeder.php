<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prisoner;

class PrisonerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        Prisoner::factory()->count(10)->create();
    }
}
