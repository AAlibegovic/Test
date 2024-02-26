<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sentence;

class SentenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
       */
    public function run() 
    {
        Sentence::factory()->count(10)->create();
    }
}

