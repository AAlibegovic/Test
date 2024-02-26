<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ward;
class WardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Ward::factory()->count(4)->create();
    }
}
