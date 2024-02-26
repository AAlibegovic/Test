<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cells;
class CellTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Cells::factory()->count(10)->create();
    }
}
